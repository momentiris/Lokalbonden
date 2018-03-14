<?php

$header = <<<EOF
This file is part of Lokalbonden.

MIT License, Lokalbonden special squad.

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
EOF;

$rules = [
    '@PSR2' => true,

    'header_comment' => [
      'header' => $header,
      'location' => 'after_open'
    ],
];

$finder = PhpCsFixer\Finder::create()
    ->exclude(['vendor'])
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRules($rules)
    ->setFinder($finder);
