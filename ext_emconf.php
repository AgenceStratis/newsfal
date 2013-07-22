<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "newsfal".
 *
 * Auto generated 22-07-2013 17:51
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'News Fal',
	'description' => 'Adds a FAL image field to news for further FE usage. Supports media extension.',
	'category' => 'be',
	'author' => 'Fedir RYKHTIK',
	'author_email' => 'fedir@stratis.fr',
	'shy' => '',
	'dependencies' => 'news',
	'conflicts' => NULL,
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'author_company' => 'Stratis',
	'version' => '0.2.0',
	'constraints' => 
	array (
		'depends' => 
		array (
			'news' => '2.1.0-2.1.99',
			'typo3' => '6.1.0-6.1.99',
		),
		'conflicts' => '',
		'suggests' => 
		array (
		),
	),
	'suggests' => 
	array (
	),
);

?>