<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Website configuration',
    'description' => 'A site package to provide configuration for website.',
    'category' => 'distribution',
    'version' => '1.0.0',
    'state' => 'stable',
    'clearcacheonload' => true,
    'author' => 'Justus Moroni',
    'author_email' => 'j.moroni@web-vision.de',
    'author_company' => 'web-vision GmbH',
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0',
        ],
    ],
];
