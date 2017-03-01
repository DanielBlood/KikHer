# KikHer
A simple PHP Class to get user information using Kik

# Usage
```php
Require("KikHer.php");
$KikUser = new KikHer("Lgnotus");

$FirstName = $KikUser->FirstName();
$LastName = $KikUser->LastName();
$DisplayPictureURL =  $KikUser->displayPicURL();
$LastModified = $KikUser->displayPicLastModified();
$JSON_Decoded = $KikUser->UserData;
```
