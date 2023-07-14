<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'QR Redirects',
    'description' => 'This extension provides a Backend module to generate short URLs and QR codes leading to a given page.',
    'category' => 'backend',
    'version' => '1.0.0-dev',
    'state' => 'alpha',
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Xavier Perseguers',
    'author_email' => 'xavier@causal.ch',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.2.99',
            'typo3' => '10.4.0-12.4.99',
        ]
    ],
    'autoload' => [
        'psr-4' => ['Causal\\QrRedirects\\' => 'Classes']
    ],
];
