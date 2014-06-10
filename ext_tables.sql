#
# Table structure for table 'tx_gjo_domain_model_mod01'
#
CREATE TABLE tx_gjo_domain_model_mod01 (

	uid int(11) NOT NULL auto_increment,
	pid int(11) DEFAULT '0' NOT NULL,


	string varchar(255) DEFAULT '' NOT NULL,
	text text NOT NULL,
	richtext text NOT NULL,
	integer_prop int(11) DEFAULT '0' NOT NULL,
	gleikomma double(11,2) DEFAULT '0.00' NOT NULL,
	bool tinyint(1) unsigned DEFAULT '0' NOT NULL,
	datum int(11) DEFAULT '0' NOT NULL,
	datumundzeit int(11) DEFAULT '0' NOT NULL,
	natives_datum date DEFAULT '0000-00-00',
	natives_datum_und_zeit datetime DEFAULT '0000-00-00 00:00:00',
	zeit int(11) DEFAULT '0' NOT NULL,
	zeit_sekunden varchar(255) DEFAULT '' NOT NULL,
	auswahllsite int(11) DEFAULT '0' NOT NULL,
	datei text NOT NULL,
	bild text NOT NULL,
	dateireferenz text NOT NULL,
	ordner text NOT NULL,
	passwort varchar(255) DEFAULT '' NOT NULL,


	tstamp int(11) unsigned DEFAULT '0' NOT NULL,
	crdate int(11) unsigned DEFAULT '0' NOT NULL,
	cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
	deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
	hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
	starttime int(11) unsigned DEFAULT '0' NOT NULL,
	endtime int(11) unsigned DEFAULT '0' NOT NULL,

	t3ver_oid int(11) DEFAULT '0' NOT NULL,
	t3ver_id int(11) DEFAULT '0' NOT NULL,
	t3ver_wsid int(11) DEFAULT '0' NOT NULL,
	t3ver_label varchar(255) DEFAULT '' NOT NULL,
	t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
	t3ver_stage int(11) DEFAULT '0' NOT NULL,
	t3ver_count int(11) DEFAULT '0' NOT NULL,
	t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
	t3ver_move_id int(11) DEFAULT '0' NOT NULL,


	t3_origuid int(11) DEFAULT '0' NOT NULL,
	sys_language_uid int(11) DEFAULT '0' NOT NULL,
	l10n_parent int(11) DEFAULT '0' NOT NULL,
	l10n_diffsource mediumblob,

	PRIMARY KEY (uid),
	KEY parent (pid),
	KEY t3ver_oid (t3ver_oid,t3ver_wsid),
 KEY language (l10n_parent,sys_language_uid)

);
