<?php
defined('TYPO3_MODE') || die();

// Configuration du conteneur pour la gestion des grades
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'grade_section', // CType
            'Section Grade - Grades & Promotions', // Label
            'Présente les grades avec son header, un contenu principal et des zones latérales pour organiser les informations.', // Description
            [
                [
                    [
                        'name' => 'Header',
                        'colPos' => 200,
                        'colspan' => 3,
                        'allowed' => ['CType' => 'header_grade, info_bulle']
                    ]
                ],
                [
                    [
                        'name' => 'Contenu',
                        'colPos' => 201,
                        'colspan' => 3,
                        'allowed' => ['CType' => 'content_grade, content_2cols, content_3cols']
                    ]
                ],
                [
                    [
                        'name' => 'Contenu colonne gauche',
                        'colPos' => 202,
                        'colspan' => 1,
                        'allowed' => ['CType' => 'access_button']
                    ],
                    [
                        'name' => 'Contenu colonne droite',
                        'colPos' => 203,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'header_grade, info_bulle, content_grade, content_2cols, content_3cols']
                    ]
                ],
            ] // Grid configuration
        )
    )
        ->setIcon('EXT:carriere/Resources/Public/Icons/SimpleCard.svg') // Icon
);