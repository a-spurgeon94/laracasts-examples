<?php

use App\Book;
use App\Kindle;
use App\Person;
use App\eReaderAdapter;

(new Person)->read(new Book);
(new Person)->read(new eReaderAdapter(new Kindle));

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
    </head>
    <body>

    </body>
</html>