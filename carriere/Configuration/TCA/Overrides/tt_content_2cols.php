<?php
defined('TYPO3_MODE') || die();

// Configuration du conteneur 2 colonnes avec un séparateur
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'content_2cols', // CType
            'Grille 2 Colonnes – Comparaison & Séparateurs', // Label
            'Affiche deux éléments de contenu séparés par un séparateur (flèche ou élément "OU").', // Description
            [
                [
                    [
                        'name' => 'Élement n°1',
                        'colPos' => 200,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'content_cadre, content_grade, access_button']
                    ],
                    [
                        'name' => 'Séparateur',
                        'colPos' => 201,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'promotion, textmedia']
                    ],
                    [
                        'name' => 'Élement n°2',
                        'colPos' => 202,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'content_cadre, content_grade, access_button']
                    ]
                ],
            ] // Grid configuration
        )
    )
        ->setIcon('EXT:carriere/Resources/Public/Icons/2Cols.svg') // Icon
);