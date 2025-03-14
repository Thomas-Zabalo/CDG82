<?php
defined('TYPO3_MODE') || die();

// Configuration du conteneur pour la gestion des cadres
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'cadre_section', // CType
            'Section Cadre – Catégories & Promotions', // Label
            "Affiche les différentes cadres d'une catégories de carrière avec une flèche de promotion entre les catégories", // Description
            [
                [
                    [
                        'name' => 'Promotion',
                        'colPos' => 200,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'promotion_cat']
                    ]
                ],
                [
                    [
                        'name' => 'Nom de la catégorie',
                        'colPos' => 201,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'header']
                    ]
                ],
                [
                    [
                        'name' => 'Contenu',
                        'colPos' => 202,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'content_cadre, content_2cols, content_3cols']
                    ]
                ],
            ] // Grid configuration
        )
    )
        ->setIcon('EXT:carriere/Resources/Public/Icons/SimpleCard.svg') // Icon
);