<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_gjo_domain_model_mod01'] = array(
	'ctrl' => $TCA['tx_gjo_domain_model_mod01']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, string, text, richtext, tx_gjo_integer, gleikomma, bool, datum, datumundzeit, natives_datum, natives_datum_und_zeit, zeit, zeit_sekunden, auswahllsite, datei, bild, dateireferenz, ordner, passwort, namer',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, string, text, richtext;;;richtext:rte_transform[mode=ts_links], tx_gjo_integer, gleikomma, bool, datum, datumundzeit, natives_datum, natives_datum_und_zeit, zeit, zeit_sekunden, auswahllsite, datei, bild, dateireferenz, ordner, passwort, namer, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_gjo_domain_model_mod01',
				'foreign_table_where' => 'AND tx_gjo_domain_model_mod01.pid=###CURRENT_PID### AND tx_gjo_domain_model_mod01.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		
		
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		
	
		'string' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.string',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			),
		),
		'text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim'
			),
		),
		'richtext' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.richtext',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords'=> 1,
						'RTEonly' => 1,
						'script' => 'wizard_rte.php',
						'title' => 'LLL:EXT:cms/locallang_ttc.:bodytext.W.RTE',
						'type' => 'script'
					)
				)
			),
		),
		'tx_gjo_integer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.tx_gjo_integer',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'int'
			),
		),
		'gleikomma' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.gleikomma',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'double2'
			),
		),
		'bool' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.bool',
			'config' => array(
				'type' => 'check',
				'default' => 0
			),
		),
		'datum' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.datum',
			'config' => array(
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'datumundzeit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.datumundzeit',
			'config' => array(
				'type' => 'input',
				'size' => 10,
				'eval' => 'datetime',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'natives_datum' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.natives_datum',
			'config' => array(
				'dbType' => 'date',
				'type' => 'input',
				'size' => 7,
				'eval' => 'date',
				'checkbox' => 0,
				'default' => '0000-00-00'
			),
		),
		'natives_datum_und_zeit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.natives_datum_und_zeit',
			'config' => array(
				'dbType' => 'datetime',
				'type' => 'input',
				'size' => 12,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => '0000-00-00 00:00:00'
			),
		),
		'zeit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.zeit',
			'config' => array(
				'type' => 'input',
				'size' => 4,
				'eval' => 'time',
				'checkbox' => 1,
				'default' => time()
			),
		),
		'zeit_sekunden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.zeit_sekunden',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'auswahllsite' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.auswahllsite',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('-- Label --', 0),
				),
				'size' => 1,
				'maxitems' => 1,
				'eval' => ''
			),
		),
		'datei' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.datei',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_gjo',
				'allowed' => '*',
				'disallowed' => 'php',
				'size' => 5,
			),
		),
		'bild' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.bild',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file',
				'uploadfolder' => 'uploads/tx_gjo',
				'show_thumbs' => 1,
				'size' => 5,
				'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
				'disallowed' => '',
			),
		),
		'dateireferenz' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.dateireferenz',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'file_reference',
				'uploadfolder' => 'uploads/tx_gjo',
				'allowed' => '*',
				'disallowed' => 'php',
				'size' => 5,
			),
		),
		'ordner' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.ordner',
			'config' => array(
				'type' => 'group',
				'internal_type' => 'folder',
				'size' => 5,
			),
		),
		'passwort' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.passwort',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'nospace,password'
			),
		),
		'namer' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:gjo/Resources/Private/Language/locallang_db.xlf:tx_gjo_domain_model_mod01.namer',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => '',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
	),
);


?>
