`<?php
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

use WillSkates\Dictionary\API;

/**
 * Test that the communication between the wrapper and the web service 
 * works and appropriately handles all errors that occur.
 * 
 * @package     WillSkates's Components
 * @subpackage  Dictionary
 * @author      Will Skates <will.skates@ntlworld.com>
 * @copyright   2012 William Skates.
 * @license     Can be seen in "LISCENCE" file, located in the root directory of this repo.
 * @link        http://github.com/WillSkates/Dictionary
 * @version     0.0.1 alpha
 */
class APITest extends PHPUnit_Framework_TestCase
{

	public function testCreation()
	{
		$api = new API(DICTIONARY_API_LOCATION);
	}

	protected function make()
	{
		return new API(DICTIONARY_API_LOCATION);
	}

	public function testWords()
	{

		$api = $this->make();
		$words = require __DIR__ . '/_words.php';
		$langs = array('en', 'de', 'fr', 'ar');

		foreach ( $words as $word => $details ) {

			$res = $api->get('word/' . $word);

			$this->assertFalse($res->error);

			$this->assertEquals(
				$details['def'],
				$res->result[0]['definition']
			);

			$res = $api->word($word);
			$def = $res->getDefinition();
			$def = reset($def);

			$this->assertEquals(
				$details['def'],
				$def
			);

			$details['en'] = $word;

			foreach ( $langs as $lang ) {

				$res = $api->word($word, $lang);
				$translate = $res->translate($lang);
			}

		}

	}

}