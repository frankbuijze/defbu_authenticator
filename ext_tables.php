<?php
/**
 * Copyright notice
 *
 * (c) 2020 FraJa WeB - DEFBU - Frank Buijze
 *
 * All rights reserved
 */
defined('TYPO3_MODE') || die();


$relativePath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('FraJaWeB.FwAuthenticator');
echo $relativePath;
$GLOBALS['TBE_STYLES']['stylesheet2'] = 'EXT:fw_authenticator/Resources/Public/Css/fw_authenticator.css';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
    'FraJaWeB.FwAuthenticator',
    'system',
    'tx_fwauthenticator',
    'bottom',
    [
        Authenticator::class => 'index, activate, deactivate'
    ],
    [
        'access' => 'user',
        'icon' => 'EXT:fw_authenticator/Resources/Public/Icons/icon.svg',
        'labels' => 'LLL:EXT:fw_authenticator/Resources/Private/Language/locallang_mod.xlf:Authenticator',
    ]
);