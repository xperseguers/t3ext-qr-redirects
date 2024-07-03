<?php
defined('TYPO3') || die();

(static function ($_EXTKEY) {
    $typo3Version = (new \TYPO3\CMS\Core\Information\Typo3Version())->getMajorVersion();

    // Since TYPO3 v12, the module registration has moved to Configuration/Backend/Modules.php
    if ($typo3Version < 12) {
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
    }
})('qr_redirects');
