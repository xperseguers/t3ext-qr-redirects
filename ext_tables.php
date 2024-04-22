<?php
defined('TYPO3') || die();

(static function ($_EXTKEY) {
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
            'icon' => 'EXT:' . $_EXTKEY . '/Resources/Public/Icons/Extension.png',
            'labels' => 'LLL:EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_mod.xlf',
        ]
    );
})('qr_redirects');
