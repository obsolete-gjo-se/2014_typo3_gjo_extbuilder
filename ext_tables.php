<?php
//if (!defined('TYPO3_MODE')) {
//	die ('Access denied.');
//}
//
//\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
//	$_EXTKEY,
//	'Pluginkey',
//	'FirstPlugin'
//);



//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'erweiterung');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_gjo_domain_model_mod01', 'EXT:gjo/Resources/Private/Language/locallang_csh_tx_gjo_domain_model_mod01.xlf');


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_gjo_domain_model_mod01');
$TCA['tx_gjo_domain_model_mod01'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01',
		'label' => 'string',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,

		'versioningWS' => 2,
		'versioning_followPages' => TRUE,

		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'string,text,richtext,integer_prop,gleikomma,bool,datum,datumundzeit,natives_datum,natives_datum_und_zeit,zeit,zeit_sekunden,auswahllsite,datei,bild,dateireferenz,ordner,passwort,',
		'dynamicConfigFile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Configuration/TCA/Mod01.php',
		'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_gjo_domain_model_mod01.gif'
	),
);








	

?>
