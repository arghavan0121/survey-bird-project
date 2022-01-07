<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('somedir')
    ->notPath('src/Symfony/Component/Translation/Tests/fixtures/resources.php')
    ->in(__DIR__);

$config = new PhpCsFixer\Config();
return $config->setRules([
        '@Symfony' => true,
       // 'binary_operator_spaces' => ['align_double_arrow' => false],
        'array_syntax' => ['syntax' => 'short'],
        'linebreak_after_opening_tag' => true,
        'not_operator_with_successor_space' => true,
        'ordered_imports' => ['imports_order' => ['const', 'class', 'function']],
        'phpdoc_order' => true,
        'blank_line_after_opening_tag' => true,
       // 'blank_line_before_return' => true,
        'no_unused_imports' => true,
        'whitespace_after_comma_in_array' => true,
        'ternary_to_null_coalescing' => true,
        'no_whitespace_in_blank_line' => true,
        'blank_line_before_statement' => true,
    ])->setFinder($finder);