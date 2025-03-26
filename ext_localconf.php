<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    // Register the plugin
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Zole.hellome',
        'Hellome',
        [
            \Zole\Hellome\Controller\HelloWorldController::class => 'index'
        ],
        // non-cacheable actions
        [
            \Zole\Hellome\Controller\HelloWorldController::class => 'index'
        ]
    );

    // Include TypoScript
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup('@import "EXT:hellome/Configuration/TypoScript/setup.typoscript"');
});