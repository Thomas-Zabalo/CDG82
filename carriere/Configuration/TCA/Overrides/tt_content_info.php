<?php
defined('TYPO3_MODE') || die();

// Ajout de l'élément de contenu à CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Aide promotionnelle', // Label
        'info_bulle', // CType
        'content-header', // Icon
        'Fiche carriere' // Group
    ],
    'textmedia',
    'after'
);

// Configuration des champs pour 'info_bulle'
$GLOBALS['TCA']['tt_content']['types']['info_bulle'] = [
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
    'FILE:EXT:carriere/Configuration/FlexForms/InfoBulle.xml',
    'info_bulle'
);
