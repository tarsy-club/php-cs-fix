<?php

$rules = [
    '@PSR2' => true,
    '@PhpCsFixer' => true,
    '@Symfony' => true,
    '@DoctrineAnnotation' => true,
    '@PHP71Migration' => true,
    'no_superfluous_phpdoc_tags' => false,
    'linebreak_after_opening_tag' => true,
    'phpdoc_to_comment' => false,
    'php_unit_test_class_requires_covers' => false,
    'single_line_comment_style' => false,
    'phpdoc_var_without_name' => false,
    'phpdoc_summary' => false,
    'phpdoc_types_order' => ['null_adjustment' => 'always_last'],
    'array_syntax' => ['syntax' => 'short'],
    'phpdoc_align' => ['align' => 'left'],
    'list_syntax' => ['syntax' => 'short'],
    'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
    'concat_space' => ['spacing' => 'one'],
    'class_definition' => ['single_line' => false, 'multi_line_extends_each_single_line' => true],
    'doctrine_annotation_array_assignment' => ['operator' => '=', 'ignored_tags' => ['Route', 'ParamConverter']],
];

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ;
