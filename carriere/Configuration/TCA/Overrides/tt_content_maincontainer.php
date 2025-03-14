<?php
defined('TYPO3_MODE') || die();

// Ajout de l'élément de contenu à CType
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'layout_fiche', // CType
            'Grille principale – Fiche carrière', // Label
            "Grille principale contenant un header dynamique et une section de contenu où s'affichent les différentes catégories.", // Description
            [
                [
                    [
                        'name' => 'Header',
                        'colPos' => 200,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'header']
                    ]
                ],
                [
                    [
                        'name' => 'Contenu',
                        'colPos' => 201,
                        'colspan' => 2,
                        'allowed' => ['CType' => 'cadre_section, grade_section']
                    ],
                ]
            ] // Grid configuration
        )
    )
        ->setIcon('EXT:carriere/Resources/Public/Icons/SimpleCard.svg') // Icône
);