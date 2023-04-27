<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h3>oop</h3>

<?php
class Books {
    // Properties
    public $name;
    public $author;
    public $genre;
    public $year_of_publication;

    function __construct($name, $author, $genre, $year_of_publication) {
        $this->name = $name;
        $this->author = $author;
        $this->genre = $genre;
        $this->year_of_publication = $year_of_publication;
    }
    function showBook() {
        echo $this->name . ' is book ' . $this->genre . ' - genre ' . $this->year_of_publication . ' year of publication';
    }


}

$shine = new Books('Shine', 'Stiven King', 'scary', 1972);

$shine->showBook();

?>

<h3>just some write</h3>
</body>
</html>
