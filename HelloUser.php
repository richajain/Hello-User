<?php

$dir = dirname( __FILE__ ) . '/';

//Resource Modules
$wgHelloUserResourcePaths = array(
	'localBasePath' => __DIR__
	);

$wgExtensionMessagesFiles['HelloUser'] = $dir . 'HelloUser.i18n.php';
$wgSpecialPages['HelloUser'] = 'SpecialHelloUser'; //Tells mediawiki about the new special page and its classname

$wgAutoloadClasses['SpecialHelloUser'] = $dir . 'HelloUser.body.php';
$wgAutoloadClasses['HelloUserHooks'] = $dir. 'HelloUser.hooks.php';


$wgResourceModules['ext.HelloUser'] = array(
	'messages' => array(
		'Example-hello',
		'Example-helloworld-intro'
		)
	) + $wgHelloUserResourcePaths;

$wgHooks['BeforePageDisplay'][] = 'HelloUserHooks::onBeforePageDisplay';
