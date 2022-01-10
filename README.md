# urlshortener_php
URL Shortener just using php, the user enters a URL and the code stores the url in the database and returns a localhost shortened URL.

Files live on master branch, not main.

*No styling is present, there is another repo with react styling.*


Code uses a MySQL database
PHP version: 8.0.1

Database is structured to have a name of "url_short" and a table name of "urls".
There are 2 rows in my build "ID" and "long_url"

$user = 'root';

$password = 'root';

$db = 'inventory';

$host = 'localhost';

$port = 3306;

