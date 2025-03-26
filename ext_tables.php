<?php

defined('TYPO3') or die();

// Dodavanje TypoScript konfiguracije kroz Static Include
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'hellome',
    'Configuration/TypoScript',
    'HelloMe Plugin Configuration'
);