<?php

declare(strict_types=1);

/*
 * This file is part of the rst-checker.
 *
 * (c) Oskar Stark <oskarstark@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Rule;

class YamlInsteadOfYmlPrefix implements Rule
{
    public function supportedExtensions(): array
    {
        return ['rst'];
    }

    public function check(string $line)
    {
        if (strstr(strtolower($line), '.. code-block:: yml')) {
            return 'Please use ".. code-block:: yaml" instead of ".. code-block:: yml"';
        }

        if (strstr(strtolower($line), '.yml')) {
            return 'Please use ".yaml" instead of ".yml"';
        }
    }
}