<?php
/*Extension Hooks */

class HelloUserHooks {
	public static function onBeforePageDisplay(OutputPage &$output) {
		
		/*define your function*/
		$output->addWikiText('Hello');		

	}
	
	public function sampleParserInit(Parser $parser) {
		//when the parser just sees the <hello> tag, it executes the sampleRender function described below
		$parser->setHook('hello', sampleRender);
		return true;
	}
	
	public function sampleRender($input, array $arg, Parser $parser, PPFrame $frame ) {
		//$input is the input between <hello> and </hello> tags
		//$arg is an array of the tag arguments passed with <hello arg1="" arg2="">
		//$parser is the parser object
		return htmlspecialchars($input);
	}
}
