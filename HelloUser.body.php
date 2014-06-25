<?php
class SpecialHelloUser extends SpecialPage  {
	function __construct() {
		parent::__construct( 'HelloUser' ); //This names your special page
	}
 
	function execute( $par ) { //If some migrates to special:extension/blah, $par will contain blah

		$out = $this->getOutput(); //Returns the output page object
		$title = wfMessage('example-hello'); //extract message from the i18n file
		$out->setPageTitle( $title );  //set the special page's title
	}
}
