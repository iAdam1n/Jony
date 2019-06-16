<?php
/**
 * Flat skin
 *
 * @file
 * @ingroup Skins
 * @author Dialexio (https://github.com/Dialexio), iAdam1n (https://github.com/iAdam1n, and others
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License 2.0
 */

 if (function_exists('wfLoadSkin')) {
	 wfLoadSkin( 'Flat' );
}

else {
	if ( !defined( 'MEDIAWIKI' ) ) {
		die( 'This is an extension to the MediaWiki package and cannot be run standalone.' );
	}

	$wgExtensionCredits['skin'][] = array(
		'path' => __FILE__,
		'name' => 'Flat', // name as shown under [[Special:Version]]
		'namemsg' => 'skinname-Flat',
		'version' => '1.0',
		'url' => 'https://github.com/iAdam1n/Flat',
		'author' => '[https://github.com/Dialexio Dialexio], [https://github.com/iAdam1n iAdam1n], and others',
		'descriptionmsg' => 'Flat-desc',
		'license-name' => 'GPL-2.0+',
	);

	$wgValidSkinNames['Flat'] = 'Flat';
	$wgAutoloadClasses['SkinFlat'] = __DIR__ . '/Flat.skin.php';
	$wgMessagesDirs['Flat'] = __DIR__ . '/i18n';

	$wgResourceModules['skins.Flat'] = array(
		'styles' => array(
			'Flat/resources/print.less' => array( 'media' => 'print' ),
			'Flat/resources/screen.less' => array( 'media' => 'screen' ),
		),
		'remoteBasePath' => &$GLOBALS['wgStylePath'],
		'localBasePath' => &$GLOBALS['wgStyleDirectory'],
	);

	/*
	//Only add a module for 'scripts' if your skin actually needs custom JavaScript
	$wgResourceModules['skins.Flat.js'] = array(
		'scripts' => array(
			'Flat/resources/cool.js',
			'Flat/resources/awesome.js',
		),
		'dependencies' => array(
			// In this example, awesome.js needs the jQuery UI dialog stuff
			'jquery.ui.dialog',
		),
		'remoteBasePath' => &$GLOBALS['wgStylePath'],
		'localBasePath' => &$GLOBALS['wgStyleDirectory'],
	);
	*/
}