<?PHP
	class KikHer{
		/*
			KikHer class written by Daniel Blood
			This is not supported nor endorsed officially by Kik INTERACTIVE
			Pls don't sue me thanks, if you don't like this class then fix your shitty services.

			What does this class do?
			This uses Kik to get simple User data

			Example:
			require("KikHer.php");
			$KikUser = new KikHer("Lgnotus");
			
			First Name: $KikUser->FirstName()
			Last Name: $KikUser->LastName()
			Display Picture: $KikUser->displayPicURL()
			Display Picture last changed date: $KikUser->displayPicLastModified()
			Decoded JSON Data: $KikUser->UserData
		*/
		public $UserData;
		public $EndPoint;
		function __construct($Username)
		{
			/* The "API" Endpoint */
			$this->EndPoint = "http://ws2.kik.com/user/";
			$this->UserData = json_decode(file_get_contents($this->EndPoint . $Username));
		}
		/* Returns the First Name */
		function FirstName()
		{
			return $this->UserData->firstName;
		}

		/* Returns the Last Name */
		function LastName()
		{
			return $this->UserData->lastName;
		}

		/* Returns the date when the profile picture was changed */
		function displayPicLastModified()
		{
			return $this->UserData->displayPicLastModified;
		}

		/* Returns the URL for the profile picture */
		function displayPicURL()
		{
			return $this->UserData->displayPic;
		}

	}

?>