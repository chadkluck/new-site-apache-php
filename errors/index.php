<?php 
/*
This will be a 200 OK page, which the error.php page can handle by displaying a picture of Snow White.
This is here as a placeholder page and can be copied to any directory you wish to have a plain index page
for example empty directories. If you copy this page out of the error directory, be sure to update the 
include path.

For example, if you place this in the base directory for the main page of a site use "errors/error.php"

We do an include rather than a redirect as a redirect would change the status code and we don't want to
redirect visitors to a different URL anyway.
*/
include "error.php"; 
?>