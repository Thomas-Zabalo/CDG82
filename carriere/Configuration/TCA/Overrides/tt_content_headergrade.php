<?php
defined('TYPO3_MODE') || die();

// Ajout de l'élément de contenu à CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'En-tête - Grade', // Label
        'header_grade', // CType
        'content-header',// Icon
        'Fiche carriere' // Group
    ],
    'header',
    'after'
);

// Configuration des champs pour 'header_grade'
$GLOBALS['TCA']['tt_content']['types']['header_grade'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
      --palette--;;general,
      --palette--;;headers,
      --palette--;' . $languageFilePrefix . 'tt_content.palette.mediaAdjustments;mediaAdjustments,
      pi_flexform,
      '
];

// Ajout du FlexForm au CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:carriere/Configuration/FlexForms/HeaderGrade.xml',
    'header_grade'
);