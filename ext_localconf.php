<?php

defined('TYPO3') or die();

// Registracija plugina u TYPO3
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'hellome',  // Ključ ekstenzije mora biti u malim slovima
    'Hello',
    [
        \Zole\Hellome\Controller\HelloWorldController::class => 'show'
    ],
    // Non-cacheable actions
    [
        \Zole\Hellome\Controller\HelloWorldController::class => 'show'
    ]
);