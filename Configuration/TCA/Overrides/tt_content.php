<?php

defined('TYPO3') or die();

// Dodavanje novog content elementa za plugin
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'HelloMe Plugin', // Naziv koji će biti prikazan u backendu
        'hellome_hello',  // Unikatni ključ za plugin (extension_key + plugin_name)
        'EXT:hellome/Resources/Public/Icons/user_plugin_hellome.svg' // Ikonica plugin-a (opciono)
    ],
    'list_type',
    'hellome' // Ključ ekstenzije
);

// Konfiguracija prikaza plugina u backendu
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['hellome_hello'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['hellome_hello'] = 'pi_flexform';

// Ako želiš da koristiš Flexform, možeš ga registrovati ovako (opciono):
// \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
//     'hellome_hello',
//     'FILE:EXT:hellome/Configuration/FlexForms/flexform_hellome.xml'
// );
