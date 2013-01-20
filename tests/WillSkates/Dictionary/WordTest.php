<?php

/**
 * An api that allows developers to fetch the definitions of words on-demand.
 * 
 * @package     WillSkates's Components
 * @subpackage  Dictionary
 * @author      Will Skates <will.skates@ntlworld.com>
 * @copyright   2012 William Skates.
 * @license     Can be seen in "LISCENCE" file, located in the root directory of this repo.
 * @link        http://github.com/WillSkates/Dictionary
 * @version     0.0.1 alpha
 */

use WillSkates\Dictionary\Word;
use WillSkates\Dictionary\API;

/**
 * Test that the methods required to define words and 
 * manipulate word data work and appropriately handles all errors that occur.
 * 
 * @package     WillSkates's Components
 * @subpackage  Dictionary
 * @author      Will Skates <will.skates@ntlworld.com>
 * @copyright   2012 William Skates.
 * @license     Can be seen in "LISCENCE" file, located in the root directory of this repo.
 * @link        http://github.com/WillSkates/Dictionary
 * @version     0.0.1 alpha
 */
class WordTest extends PHPUnit_Framework_TestCase
{

	public function testCreation()
	{
		$api = new Word(array(
			'word' => 'hello'
		), new API(DICTIONARY_API_LOCATION));
	}

}