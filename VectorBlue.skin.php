<?php
/**
* Skin file for skin VectorBlue.
*
* @file
* @ingroup Skins
*/

require_once( dirname( __FILE__ ) . '/../Vector.php' );

/**
 * SkinTemplate class for Sturmkrieg skin
 * @ingroup Skins
 */
class SkinVectorBlue extends SkinVector {

	var $skinname = 'vectorblue', $stylename = 'vectorblue';

	/**
	 * @param $out OutputPage object
	 */
	function setupSkinUserCss( OutputPage $out ){
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( "skins.vectorblue" );
	}

}