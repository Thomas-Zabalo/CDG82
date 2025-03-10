<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Cdg82.carriere',
    'Pi1',
    [
    
    ],
    // non-cacheable actions
    [
       
    ]
);

call_user_func(function () {
    $extensionKey = 'carriere';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $extensionKey,
        'setup',
        "@import 'EXT:carriere/Configuration/TypoScript/setup.typoscript'"
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:carriere/Configuration/TsConfig/Page/All.tsconfig">');
});
