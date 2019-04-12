# Rules Overview

* [american_english](#american_english)
* [be_kind_to_newcomers](#be_kind_to_newcomers)
* [blank_line_after_directive](#blank_line_after_directive)
* [blank_line_after_filepath_in_code_block](#blank_line_after_filepath_in_code_block)
* [blank_line_after_filepath_in_php_code_block](#blank_line_after_filepath_in_php_code_block)
* [blank_line_after_filepath_in_twig_code_block](#blank_line_after_filepath_in_twig_code_block)
* [blank_line_after_filepath_in_xml_code_block](#blank_line_after_filepath_in_xml_code_block)
* [blank_line_after_filepath_in_yaml_code_block](#blank_line_after_filepath_in_yaml_code_block)
* [composer_dev_option_at_the_end](#composer_dev_option_at_the_end)
* [composer_dev_option_not_at_the_end](#composer_dev_option_not_at_the_end)
* [correct_code_block_directive_based_on_the_content](#correct_code_block_directive_based_on_the_content)
* [ensure_order_of_code_blocks_in_configuration_block](#ensure_order_of_code_blocks_in_configuration_block)
* [even_brackets_count](#even_brackets_count)
* [extend_abstract_admin](#extend_abstract_admin)
* [extend_abstract_controller](#extend_abstract_controller)
* [extend_controller](#extend_controller)
* [final_admin_classes](#final_admin_classes)
* [final_admin_extension_classes](#final_admin_extension_classes)
* [kernel_instead_of_app_kernel](#kernel_instead_of_app_kernel)
* [line_length](#line_length)
* [lowercase_as_in_use_statements](#lowercase_as_in_use_statements)
* [no_admin_yaml](#no_admin_yaml)
* [no_app_bundle](#no_app_bundle)
* [no_app_console](#no_app_console)
* [no_bash_prompt](#no_bash_prompt)
* [no_blank_line_after_filepath_in_code_block](#no_blank_line_after_filepath_in_code_block)
* [no_blank_line_after_filepath_in_php_code_block](#no_blank_line_after_filepath_in_php_code_block)
* [no_blank_line_after_filepath_in_twig_code_block](#no_blank_line_after_filepath_in_twig_code_block)
* [no_blank_line_after_filepath_in_xml_code_block](#no_blank_line_after_filepath_in_xml_code_block)
* [no_blank_line_after_filepath_in_yaml_code_block](#no_blank_line_after_filepath_in_yaml_code_block)
* [no_composer_phar](#no_composer_phar)
* [no_composer_req](#no_composer_req)
* [no_config_yaml](#no_config_yaml)
* [no_explicit_use_of_code_block_php](#no_explicit_use_of_code_block_php)
* [no_inheritdoc](#no_inheritdoc)
* [no_namespace_after_use_statements](#no_namespace_after_use_statements)
* [no_php_open_tag_in_code_block_php_directive](#no_php_open_tag_in_code_block_php_directive)
* [no_php_prefix_before_bin_console](#no_php_prefix_before_bin_console)
* [no_php_prefix_before_composer](#no_php_prefix_before_composer)
* [no_space_before_self_xml_closing_tag](#no_space_before_self_xml_closing_tag)
* [not_many_blank_lines](#not_many_blank_lines)
* [ordered_use_statements](#ordered_use_statements)
* [php_open_tag_in_code_block_php_directive](#php_open_tag_in_code_block_php_directive)
* [php_prefix_before_bin_console](#php_prefix_before_bin_console)
* [replace_code_block_types](#replace_code_block_types)
* [replacement](#replacement)
* [short_array_syntax](#short_array_syntax)
* [space_before_self_xml_closing_tag](#space_before_self_xml_closing_tag)
* [typo](#typo)
* [use_deprecated_directive_instead_of_versionadded](#use_deprecated_directive_instead_of_versionadded)
* [use_https_xsd_urls](#use_https_xsd_urls)
* [valid_use_statements](#valid_use_statements)
* [versionadded_directive_major_version](#versionadded_directive_major_version)
* [versionadded_directive_min_version](#versionadded_directive_min_version)
* [versionadded_directive_should_have_version](#versionadded_directive_should_have_version)
* [yaml_instead_of_yml_suffix](#yaml_instead_of_yml_suffix)
* [yarn_dev_option_at_the_end](#yarn_dev_option_at_the_end)
* [yarn_dev_option_not_at_the_end](#yarn_dev_option_not_at_the_end)
## `american_english`

  > _Ensure only American English is used._

#### Groups [`@Sonata`, `@Symfony`]

#### Checks

Pattern | Message
--- | ---
`/(B\|b)ehaviour(s)?/` | Please use American English for: %s

##### Valid Examples :+1:

```rst
This is a nice behavior...
```

##### Invalid Examples :-1:

```rst
This is a nice behaviour...
```

## `be_kind_to_newcomers`

  > _Do not use belittling words!_

#### Groups [`@Sonata`, `@Symfony`]

#### Checks

Pattern | Message
--- | ---
`/simply/i` | Please remove the word: %s
`/easy/i` | Please remove the word: %s
`/easily/i` | Please remove the word: %s
`/obviously/i` | Please remove the word: %s
`/trivial/i` | Please remove the word: %s
`/just/i` | Please remove the word: %s
`/quick/i` | Please remove the word: %s
`/of course/i` | Please remove the word: %s
`/logically/i` | Please remove the word: %s
`/clearly/i` | Please remove the word: %s
`/merely/i` | Please remove the word: %s
`/basically/i` | Please remove the word: %s

## `blank_line_after_directive`

  > _Make sure you have a blank line after each directive._

#### Groups [`@Sonata`, `@Symfony`]

## `blank_line_after_filepath_in_code_block`

  > _Make sure you have a blank line after a filepath in a code block. This rule respects PHP, YAML, XML and Twig._

#### Groups [`@Sonata`]

## `blank_line_after_filepath_in_php_code_block`

  > _Make sure you have a blank line after a filepath in a PHP code block._

## `blank_line_after_filepath_in_twig_code_block`

  > _Make sure you have a blank line after a filepath in a Twig code block._

## `blank_line_after_filepath_in_xml_code_block`

  > _Make sure you have a blank line after a filepath in a XML code block._

## `blank_line_after_filepath_in_yaml_code_block`

  > _Make sure you have a blank line after a filepath in a YAML code block._

## `composer_dev_option_at_the_end`

  > _Make sure Composer `--dev` option for `require` command is used at the end._

#### Groups [`@Sonata`]

##### Valid Examples :+1:

```rst
composer require symfony/form --dev
```

##### Invalid Examples :-1:

```rst
composer require --dev symfony/form
```

## `composer_dev_option_not_at_the_end`

  > _Make sure Composer `--dev` option for `require` command is not used at the end._

#### Groups [`@Symfony`]

##### Valid Examples :+1:

```rst
composer require --dev symfony/form
```

##### Invalid Examples :-1:

```rst
composer require symfony/form --dev
```

## `correct_code_block_directive_based_on_the_content`

#### Groups [`@Sonata`, `@Symfony`]

## `ensure_order_of_code_blocks_in_configuration_block`

#### Groups [`@Sonata`, `@Symfony`]

## `even_brackets_count`

#### Groups [`@Sonata`, `@Symfony`]

## `extend_abstract_admin`

  > _Ensure `AbstractAdmin` and the corresponding namespace `Sonata\AdminBundle\Admin\AbstractAdmin` is used._

#### Groups [`@Sonata`]

## `extend_abstract_controller`

  > _Ensure `AbstractController` and the corresponding namespace `Symfony\Bundle\FrameworkBundle\Controller\AbstractController` is used. Instead of `Symfony\Bundle\FrameworkBundle\Controller\Controller`._

#### Groups [`@Symfony`]

## `extend_controller`

  > _Ensure `Controller` and the corresponding namespace `Symfony\Bundle\FrameworkBundle\Controller\Controller` is used. Instead of `Symfony\Bundle\FrameworkBundle\Controller\AbstractController`._

#### Groups [`@Symfony`]

## `final_admin_classes`

#### Groups [`@Sonata`]

## `final_admin_extension_classes`

#### Groups [`@Sonata`]

## `kernel_instead_of_app_kernel`

#### Groups [`@Sonata`]

## `line_length`

## `lowercase_as_in_use_statements`

#### Groups [`@Sonata`, `@Symfony`]

## `no_admin_yaml`

#### Groups [`@Sonata`]

## `no_app_bundle`

#### Groups [`@Sonata`]

## `no_app_console`

#### Groups [`@Sonata`, `@Symfony`]

## `no_bash_prompt`

  > _Ensure no bash prompt `$` is used before commands in `bash`, `shell` or `terminal` code blocks._

#### Groups [`@Sonata`]

##### Valid Examples :+1:

```rst
bin\console list
```

##### Invalid Examples :-1:

```rst
$ bin\console list
```

## `no_blank_line_after_filepath_in_code_block`

## `no_blank_line_after_filepath_in_php_code_block`

#### Groups [`@Symfony`]

## `no_blank_line_after_filepath_in_twig_code_block`

#### Groups [`@Symfony`]

## `no_blank_line_after_filepath_in_xml_code_block`

#### Groups [`@Symfony`]

## `no_blank_line_after_filepath_in_yaml_code_block`

#### Groups [`@Symfony`]

## `no_composer_phar`

#### Groups [`@Sonata`]

## `no_composer_req`

#### Groups [`@Symfony`]

## `no_config_yaml`

#### Groups [`@Sonata`, `@Symfony`]

## `no_explicit_use_of_code_block_php`

#### Groups [`@Symfony`]

## `no_inheritdoc`

#### Groups [`@Sonata`]

## `no_namespace_after_use_statements`

#### Groups [`@Sonata`, `@Symfony`]

## `no_php_open_tag_in_code_block_php_directive`

#### Groups [`@Sonata`, `@Symfony`]

## `no_php_prefix_before_bin_console`

  > _Ensure `bin/console` is not prefixed with `php`._

#### Groups [`@Sonata`]

##### Valid Examples :+1:

```rst
bin/console list
```

##### Invalid Examples :-1:

```rst
php bin/console list
```

## `no_php_prefix_before_composer`

#### Groups [`@Sonata`]

## `no_space_before_self_xml_closing_tag`

#### Groups [`@Sonata`]

## `not_many_blank_lines`

#### Groups [`@Sonata`, `@Symfony`]

#### Configuration options

Name | Required
--- | ---
`max` | `true`
## `ordered_use_statements`

#### Groups [`@Sonata`, `@Symfony`]

## `php_open_tag_in_code_block_php_directive`

## `php_prefix_before_bin_console`

  > _Ensure `bin/console` is prefixed with `php` to be safe executable on Microsoft Windows._

#### Groups [`@Symfony`]

##### Valid Examples :+1:

```rst
php bin/console list
```

##### Invalid Examples :-1:

```rst
bin/console list
```

## `replace_code_block_types`

  > _Propose alternatives for disallowed code block types._

#### Groups [`@Sonata`, `@Symfony`]

#### Checks

Pattern | Message
--- | ---
`jinja` | Please do not use type "jinja" for code-block, use "twig" instead
`html+jinja` | Please do not use type "html+jinja" for code-block, use "html+twig" instead
`js` | Please do not use type "js" for code-block, use "javascript" instead

## `replacement`

#### Groups [`@Sonata`, `@Symfony`]

#### Checks

Pattern | Message
--- | ---
`/^([\s]+)?\/\/.\.(\.)?$/` | Please replace "%s" with "// ..."
`/^([\s]+)?#.\.(\.)?$/` | Please replace "%s" with "# ..."
`/^([\s]+)?<!--(.\.(\.)?\|[\s]+\.\.[\s]+)-->$/` | Please replace "%s" with "<!-- ... -->"
`/^([\s]+)?{#(.\.(\.)?\|[\s]+\.\.[\s]+)#}$/` | Please replace "%s" with "{# ... #}"
`/apps/` | Please replace "%s" with "applications"
`/Apps/` | Please replace "%s" with "Applications"
`/typehint/` | Please replace "%s" with "type-hint"
`/Typehint/` | Please replace "%s" with "Type-hint"
`/encoding="utf-8"/` | Please replace "%s" with "encoding="UTF-8""
`/\$fileSystem/` | Please replace "%s" with "$filesystem"
`/Content-type/` | Please replace "%s" with "Content-Type"
`/\-\-env prod/` | Please replace "%s" with "--env=prod"
`/\-\-env test/` | Please replace "%s" with "--env=test"
`/End 2 End/i` | Please replace "%s" with "End-to-End"
`/E2E/` | Please replace "%s" with "End-to-End"

## `short_array_syntax`

#### Groups [`@Sonata`]

## `space_before_self_xml_closing_tag`

## `typo`

#### Groups [`@Sonata`, `@Symfony`]

#### Checks

Pattern | Message
--- | ---
`/compsoer/i` | Typo in word "%s"
`/registerbundles\(\)/` | Typo in word "%s", use "registerBundles()"
`/retun/` | Typo in word "%s"
`/displayes/i` | Typo in word "%s"
`/mantains/i` | Typo in word "%s"
`/doctine/i` | Typo in word "%s"
`/adress/i` | Typo in word "%s"
`/argon21/` | Typo in word "%s", use "argon2i"
`/descritpion/i` | Typo in word "%s"
`/recalcuate/i` | Typo in word "%s"

## `use_deprecated_directive_instead_of_versionadded`

#### Groups [`@Sonata`, `@Symfony`]

## `use_https_xsd_urls`

#### Groups [`@Sonata`, `@Symfony`]

## `valid_use_statements`

#### Groups [`@Sonata`, `@Symfony`]

## `versionadded_directive_major_version`

#### Groups [`@Symfony`]

#### Configuration options

Name | Required
--- | ---
`major_version` | `true`
## `versionadded_directive_min_version`

#### Groups [`@Symfony`]

#### Configuration options

Name | Required
--- | ---
`min_version` | `true`
## `versionadded_directive_should_have_version`

#### Groups [`@Sonata`, `@Symfony`]

## `yaml_instead_of_yml_suffix`

  > _Make sure to only use `yaml` instead of `yml`._

#### Groups [`@Sonata`, `@Symfony`]

##### Valid Examples :+1:

```rst
.travis.yml
```

```rst
..code-block:: yaml
```

```rst
Please add this to your services.yaml file.
```

##### Invalid Examples :-1:

```rst
..code-block:: yml
```

```rst
Please add this to your services.yml file.
```

## `yarn_dev_option_at_the_end`

  > _Make sure yarn `--dev` option for `add` command is used at the end._

#### Groups [`@Sonata`, `@Symfony`]

##### Valid Examples :+1:

```rst
yarn add jquery --dev
```

##### Invalid Examples :-1:

```rst
yarn add --dev jquery
```

## `yarn_dev_option_not_at_the_end`

  > _Make sure yarn `--dev` option for `add` command is used at the end._

##### Valid Examples :+1:

```rst
yarn add --dev jquery
```

##### Invalid Examples :-1:

```rst
yarn add jquery --dev
```
