<?php
/**
 * VectorBlue skin
 *
 * @file
 * @ingroup Skins
 * @author Sasha Ehrenstein (http://www.sturmkrieg.de/Benutzer:Inquisitor_Ehrenstein)
 */

if( !defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array (
        'path' => __FILE__,
        'name' => 'VectorBlue',
        'url' => "http://www.sturmkrieg.de/Benutzer:Inquisitor_Ehrenstein",
        'author' => '[http://www.sturmkrieg.de/Benutzer:Inquisitor_Ehrenstein Inquisitor Ehrenstein]',
        'descriptionmsg' => 'mywiki-desc',
);

$wgValidSkinNames['vectorblue'] = 'VectorBlue';
$wgAutoloadClasses['SkinVectorBlue'] = dirname(__FILE__).'/VectorBlue.skin.php';
$wgExtensionMessagesFiles['VectorBlue'] = dirname(__FILE__).'/VectorBlue.i18n.php';

$wgResourceModules['skins.vectorblue'] = array(
        'styles' => array(
                'VectorBlue/screen.css' => array( 'media' => 'screen' ),
        ),
        
        'remoteBasePath' => &$GLOBALS['wgStylePath'],
        'localBasePath' => &$GLOBALS['wgStyleDirectory'],
        'dependencies' => 'skin.vector'
);
