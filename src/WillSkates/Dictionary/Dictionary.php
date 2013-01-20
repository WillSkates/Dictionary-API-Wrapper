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

namespace WillSkates\Dictionary;

/**
 * A class designed to provide a simple api for getting definitions of words.
 * 
 * @package     WillSkates's Components
 * @subpackage  Dictionary
 * @author      Will Skates <will.skates@ntlworld.com>
 * @copyright   2012 William Skates.
 * @license     Can be seen in "LISCENCE" file, located in the root directory of this repo.
 * @link        http://github.com/WillSkates/Dictionary
 * @version     0.0.1 alpha
 */
class Dictionary {


	/**
	 * An object that helps establish the link between
	 * this object and the dictionary API itself.
	 * 
	 * @var API
	 */
	protected $api;

	/**
	 * Create an instance of the Dictionary component.
	 * 
	 * @throws WillSkates\Dictionary\FetchException In the event that there was no information
	 *         										available.
	 *         										
	 * @param string $apiUrl The base url to the dictionary 
	 *                       api (default: http://dictionary.thisbe.ws).
	 */
	public function __construct( $apiUrl = 'http://dictionary.thisbe.ws/' )
	{

		$this->api = new API($apiUrl);

	}

	/**
	 * Retrieve an object that represents the chosen word.
	 *
	 * @throws WillSkates\Dictionary\FetchException In the event that there was no information
	 *         										available.
	 * 
	 * @param  String  $word      The word to be defined.
	 * @param  Mixed   $translate Either a 2 letter iso code ('fr', 'de', etc.)
	 *                            or false if no translation is required.
	 * 
	 * @return WillSkates\Dictionary\Word An object representing a word.
	 */
	public function word($word, $translation = false)
	{

	}

	/**
	 * Retrieve an object that represents a random word.
	 *
	 * @throws WillSkates\Dictionary\FetchException In the event that there was no information
	 *         										available.
	 * 
	 * @return WillSkates\Dictionary\Word An object representing a word.
	 */
	public function random()
	{

	}

}