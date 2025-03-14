<?php
defined('TYPO3_MODE') || die();

// Ajout de l'élément de contenu à CType
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        "Bouton d'accès", // Label
        'access_button', // CType
        'content-header', // Icon
        'Fiche carriere' // Group
    ],
    'textmedia',
    'after'
);

// Configuration des champs pour 'access_button'
$GLOBALS['TCA']['tt_content']['types']['access_button'] = [
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
    'FILE:EXT:carriere/Configuration/FlexForms/Button.xml',
    'access_button'
);
