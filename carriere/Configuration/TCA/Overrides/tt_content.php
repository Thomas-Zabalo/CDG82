<?php
defined('TYPO3_MODE') || die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Cadre Content',
        'content_cadre',
        'EXT:carriere/Resources/Public/Icons/SimpleCard.svg'
    ],
    'textmedia',
    'after'
);


/***************
 * Add flexForms for content element configuration
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:carriere/Configuration/FlexForms/Cadre.xml',
    'content_cadre'
);

$GLOBALS['TCA']['tt_content']['types']['content_cadre'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
      --palette--;;general,
      --palette--;;headers,
      --palette--;' . $languageFilePrefix . 'tt_content.palette.mediaAdjustments;mediaAdjustments,
      pi_flexform,
      '
];



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Test Content',
        'content_test',
        'EXT:carriere/Resources/Public/Icons/SimpleCard.svg'
    ],
    'textmedia',
    'after'
);


/***************
 * Add flexForms for content element configuration
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:carriere/Configuration/FlexForms/TestCadre.xml',
    'content_test'
);

$GLOBALS['TCA']['tt_content']['types']['content_test'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
      --palette--;;general,
      --palette--;;headers,
      --palette--;' . $languageFilePrefix . 'tt_content.palette.mediaAdjustments;mediaAdjustments,
      pi_flexform,
      '
];



\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Grade Content',
        'content_grade',
        'content-panel'
    ],
    'textmedia',
    'after'
);


/***************
 * Add flexForms for content element configuration
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:carriere/Configuration/FlexForms/Grade.xml',
    'content_grade'
);

$GLOBALS['TCA']['tt_content']['types']['content_grade'] = [
    'showitem' => '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
      --palette--;;general,
      --palette--;;headers,
      --palette--;' . $languageFilePrefix . 'tt_content.palette.mediaAdjustments;mediaAdjustments,
      pi_flexform,
      '
];
