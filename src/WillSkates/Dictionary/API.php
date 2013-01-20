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
 * A class designed to interact between the dictionary api and the dictionary web
 * service.
 * 
 * @package     WillSkates's Components
 * @subpackage  Dictionary
 * @author      Will Skates <will.skates@ntlworld.com>
 * @copyright   2012 William Skates.
 * @license     Can be seen in "LISCENCE" file, located in the root directory of this repo.
 * @link        http://github.com/WillSkates/Dictionary
 * @version     0.0.1 alpha
 */
class API 
{

	/**
	 * The base url for all requests to the web service.
	 * 
	 * @var String
	 */
	protected $url;

	/**
	 * Create an object that will connect the dictionary to the API.
	 * 
	 * @param String $url The base url of the api.
	 */
	public function __construct( $url )
	{
		$this->url = $url;
	}

	/**
	 * Retrieve and decode information from the data service.
	 * 
	 * @throws WillSkates\Dictionary\FetchException In the event that there was no information
	 *         										available.
	 * 
	 * @return Mixed Either an array containing all of the information requested or false
	 *               to indicate that an error has occurred.
	 */
	protected function get($url)
	{

	}

	/**
	 * Get the information for a word.
	 *
	 * @todo Implement this.
	 * 
	 * @param  String  $word      The word to be defined.
	 * @param  Mixed   $translate Either a 2 letter iso code ('fr', 'de', etc.)
	 *                            or false if no translation is required.
	 *
	 * @throws WillSkates\Dictionary\FetchException In the event that there was no information
	 *         										for a given word.
	 * 
	 * @return Mixed Either an array containing all of the information regarding
	 *               the word in question or false to signify that an error occured.
	 *
	 */
	public function word($word, $translate = false)
	{

	}

	/**
	 * Get the information regarding a random word.
	 * 
	 * @throws WillSkates\Dictionary\FetchException In the event that there was no information
	 *         										for a given word.
	 * 
	 * @return Mixed Either an array containing all of the information regarding
	 *               the word in question or false to signify that an error occured.
	 */
	public function random()
	{

	}

}