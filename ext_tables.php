<?php

defined('TYPO3_MODE') || defined('TYPO3') ||die('Access denied.');

(static function ($EXT_KEY) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'QrRedirects',
        'site',
        'Short Urls Manager',
        'bottom',
        [
            \Causal\QrRedirects\Controller\ModuleController::class => 'overview,create,update,delete'
        ],
        [
            'access' => 'user,group',
            'icon' => 'EXT:qr_redirects/Resources/Public/Icons/module-qr-redirects.png',
            'labels' => 'LLL:EXT:qr_redirects/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
})('qr_redirects');
