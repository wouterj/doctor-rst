<?php

declare(strict_types=1);

/*
 * This file is part of DOCtor-RST.
 *
 * (c) Oskar Stark <oskarstark@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Rule;

use App\Handler\Registry;
use App\Helper\Helper;
use App\Rst\RstParser;
use App\Traits\DirectiveTrait;
use App\Value\Lines;
use App\Value\RuleGroup;

class NoExplicitUseOfCodeBlockPhp extends AbstractRule implements Rule
{
    use DirectiveTrait;

    public static function getGroups(): array
    {
        return [RuleGroup::fromString(Registry::GROUP_SYMFONY)];
    }

    public function check(Lines $lines, int $number): ?string
    {
        $lines = $lines->toIterator();

        $lines->seek($number);

        // only interesting if a PHP code block
        if (!RstParser::codeBlockDirectiveIsTypeOf($lines->current(), RstParser::CODE_BLOCK_PHP, true)) {
            return null;
        }

        // :: is a php code block, but its ok
        if (preg_match('/\:\:$/', RstParser::clean($lines->current()))) {
            return null;
        }

        // it has no indention, check if it comes after a headline, in this case its ok
        if (!preg_match('/^[\s]+/', $lines->current(), $matches)) {
            if ($this->directAfterHeadline($lines, $number)
                || $this->directAfterTable($lines, $number)
                || $this->previousParagraphEndsWithQuestionMark($lines, $number)
            ) {
                return null;
            }
        }

        // check if the code block is not on the first level, in this case
        // it could not be in a configuration block which would be ok
        if (preg_match('/^[\s]+/', $lines->current(), $matches)
            && RstParser::codeBlockDirectiveIsTypeOf($lines->current(), RstParser::CODE_BLOCK_PHP)
            && $number > 0
        ) {
            if ($this->in(RstParser::DIRECTIVE_CONFIGURATION_BLOCK, $lines, $number)) {
                return null;
            }

            if ($this->in(RstParser::DIRECTIVE_CODE_BLOCK, $lines, $number, [RstParser::CODE_BLOCK_TEXT, RstParser::CODE_BLOCK_RST])) {
                return null;
            }
        }

        // check if the previous code block is php code block
        if ($this->previousDirectiveIs(RstParser::DIRECTIVE_CODE_BLOCK, $lines, $number, [RstParser::CODE_BLOCK_PHP, RstParser::CODE_BLOCK_YAML])) {
            return null;
        }

        // check if the previous directive is a configuration-block
        if ($this->previousDirectiveIs(RstParser::DIRECTIVE_CONFIGURATION_BLOCK, $lines, $number)) {
            return null;
        }

        return 'Please do not use ".. code-block:: php", use "::" instead.';
    }

    private function directAfterHeadline(\ArrayIterator $lines, int $number): bool
    {
        $lines = Helper::cloneIterator($lines, $number);

        $i = $number;
        while ($i >= 1) {
            --$i;

            $lines->seek($i);

            if (RstParser::isBlankLine($lines->current())) {
                continue;
            }

            if (RstParser::isHeadline($lines->current())) {
                return true;
            }

            return false;
        }

        return false;
    }

    private function directAfterTable(\ArrayIterator $lines, int $number): bool
    {
        $lines = Helper::cloneIterator($lines, $number);

        $i = $number;
        while ($i >= 1) {
            --$i;

            $lines->seek($i);

            if (RstParser::isBlankLine($lines->current())) {
                continue;
            }

            if (RstParser::isTable($lines->current())) {
                return true;
            }

            return false;
        }

        return false;
    }

    private function previousParagraphEndsWithQuestionMark(\ArrayIterator $lines, int $number): bool
    {
        $lines = Helper::cloneIterator($lines, $number);

        $i = $number;
        while ($i >= 1) {
            --$i;

            $lines->seek($i);

            if (RstParser::isBlankLine($lines->current())) {
                continue;
            }

            if (preg_match('/\?$/', RstParser::clean($lines->current()))) {
                return true;
            }

            return false;
        }

        return false;
    }
}
