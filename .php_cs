<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('vendor')
    ->files()
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2'                     => true,
        '@PHPUnit60Migration:risky' => true,
        '@PHPUnit84Migration:risky' => true,
        'binary_operator_spaces'    => array(
            'default'   => 'align_single_space_minimal',
            'operators' => array('||' => null, '&&' => null)
        ),
        'single_quote' => true,
        'array_syntax' => array('syntax' => 'long'),
        'concat_space' => array('spacing' => 'one'),
        'psr0'         => false
    ))
    ->setUsingCache(true)
    ->setFinder($finder);
;
