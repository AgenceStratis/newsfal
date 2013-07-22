<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array(
	'tx_newsfal_image' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:newsfal/locallang_db.xml:tx_news_domain_model_news.tx_newsfal_image',
		'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
			'file',
			array(
				'appearance' => array(
					'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:media.addFileReference',
					'collapseAll' => FALSE,
				),
				'maxitems' => 10,
				'minitems' => 0
			),
			'jpg,png,jpeg'
		)
	),
);


t3lib_div::loadTCA('tx_news_domain_model_news');
t3lib_extMgm::addTCAcolumns('tx_news_domain_model_news',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tx_news_domain_model_news','tx_newsfal_image');
?>