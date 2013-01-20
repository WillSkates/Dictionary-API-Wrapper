#Dictionary API
A set of classes that allows a developer to be able to fetch definitions for words and terms.

NOTE:
This library requires composer. You can find out more over at http://getcomposer.org. There is also a windows installer: https://github.com/johnstevenson/composer-setup or if you are using a unix system (MAC, Linux etc. ) you can find some instructions here: http://getcomposer.org/doc/00-intro.md

Clone or download the contents of this repository onto your local machine, setup your project as you normally would and add the following to the "require" section of your composer.json file:
	
	"WillSkates/Dictionary-API-Wrapper": "1.0.0"

After you have done this, run the command:

	composer install

into your command line from within the specified folder.

##From then on you may use the dictionary like this:

	$dictionary = new WillSkates\Dictionary();

	try {
		$word = 

		echo $word->getDefinition(); // A greeting ...
		echo $word->getTranslation('fr'); //Bonjour.

		echo $dictionary->word('hello'); // A greeting ... (uses __toString()).

	} catch ( WillSkates\Dictionary\Exceptions\FetchException $e ) {
		echo "Oh no, we couldnt get any information for 'hello'";
	} catch ( WillSkates\Dictionary\Exceptions\ConnectionProblemException $e ) {
		echo "oh no the api is not available.";
	}

###Next
The plan is to release the ability to define and translate words first. After that's complete
I will also work towards releasing methods which allow you to view all of the words that begin with a given letter.
Those lists will also be paginated.

####Note:
	
	This functionality is already in the api but not planned for this phase of the wrapper, You can achieve that by using http://dictionary.thisbe.ws/letter/a for example.
	Enjoy!