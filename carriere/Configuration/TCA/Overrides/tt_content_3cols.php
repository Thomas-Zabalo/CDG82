<?php
defined('TYPO3_MODE') || die();

// Configuration du conteneur 3 colonnes avec 3 élements de contenu
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'content_3cols', // CType
            'Grille 3 Colonnes – Multi-éléments', // Label
            'Affiche trois éléments de contenu sur une seule ligne', // Description
            [
                [
                    [
                        'name' => 'Élement n°1',
                        'colPos' => 200,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'content_cadre, content_grade']
                    ],
                    [
                        'name' => 'Élement n°2',
                        'colPos' => 201,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'content_cadre, content_grade']
                    ],
                    [
                        'name' => 'Élement n°3',
                        'colPos' => 202,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'content_cadre, content_grade']
                    ]
                ],
            ] // Grid configuration
        )
    )
        ->setIcon('EXT:carriere/Resources/Public/Icons/3Cols.svg') // Icon
);
