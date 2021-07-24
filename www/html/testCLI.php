<?php

//this is to integrate files into the database
if(!session_id()){
	session_start();
	$_SESSION['first_name'];
	$_SESSION['last_name'];
	$_SESSION['biography'];
	$_SESSION['publisher_author'];
	
	$_SESSION['ISBN'];
	$_SESSION['book_name'];
	$_SESSION['description'];
	$_SESSION['price'];
	$_SESSION['author'];
	$_SESSION['publisher_book'];
	$_SESSION['year'];
	$_SESSION['genre'];
	$_SESSION['copies_sold'];
	
	
	if (!isset($_SESSION['errors'])) $_SESSION['errors'] = false;
}
	
	
$sql = "";

//author variables
$first_name = "";
$last_name = "";
$biography = "";
$publisher_author = "";
$author_flag = 0;

//book variables
$ISBN = "";
$book_name = "";
$description = "";
$price = 0;
$author = "";
$publisher_book = "";
$year = 0;
$genre = "";
$copies_sold = 0;
$ratings = 0;
$book_flag = 0;

if ($argc > 1) {
  if ($argv[1] == 'books' && $argc == 11) {
    for ($i = 0; $i <= $argv[2]; $i++) {
      $sql_statement = "SELECT * FROM angel1_CENTeamProject.Books ";
	$ISBN = $argv[2];
	$book_name = $argv[3];
	$description = $argv[4];
	$price = intval($argv[5]);
	$author = $argv[6];
	$publisher_book = $argv[7];
	$year = intval($argv[8]);
	$genre = $argv[9];
	$copies_sold = intval($argv[10]);
	//$ratings = intval($argv[11]);

	$book_flag = 1;
	}
  }
  elseif($argv[1] == 'author' && $argc == 6) {
    $sql_statement = "SELECT * FROM angel1_CENTeamProject.Author ";
    $first_name = $argv[2];
	$last_name = $argv[3];
	$biography = $argv[4];
	$publisher_author = $argv[5];
	
	$author_flag = 1;
	}
else {
 echo "please enter the correct number of parameters. 9 for book and 4 for author.\n";
 echo "if your enter has a space, please put the entry in quotes.\n\n";
 echo "this is argc: " . $argc . "\n";

  echo "\nplease enter either books or author as your first argument, followed by details.\n";
  echo "for books, please enter ISBN, book name, description, price, author, publisher, year published, genre, and copies sold.\n";
  echo "for author, please enter first name, last name, biography, and publisher.\n\n\n";

exit(1);
}

} else {
  echo "\nplease enter either books or author as your first argument, followed by details.\n";
  echo "for books, please enter ISBN, book name, description, price, author, publisher, year published, genre, and copies sold.\n";
  echo "for author, please enter first name, last name, biography, and publisher.\n\n\n";
	exit(1);
}

if($price < 0 || $price > 1000000){
	echo "error: price is out of range.\n";
	echo "you entered: " . $price . "\n";
	exit(1);
}

if($year < 0 || $year > 2021){
	echo "error: year is out of range.\n";
	echo "you entered: " . $year . "\n";
	exit(1);
}

if($copies < 0){
	echo "error: copies sold is less than 0.\n";
	exit(1);
}

//insert randon delay to from 1 to 13m

// $dblink = mysqli_connect('localhost', 'root', 'password', 'p@ssw0rd');
$dblink = mysqli_connect('angelinne.com:3306', 'angel1_admin', '9@;]*a*8XZrf');
if (!$dblink) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
echo "Success: A proper connection to MySQL was made!\n";
echo "Host information: " . mysqli_get_host_info($dblink) . PHP_EOL;

$qry = mysqli_query($dblink,$sql_statement);
print_r($qry);





//$sql = "INSERT INTO 'Author' ('First Name', 'Last Name', 'Biography', 'Publisher') VALUES ('" .  $first_name . "', '" . $last_name . "', '" . $biography . "', '" . $publisher_author . "' )";
if($author_flag){
$sql = "INSERT INTO angel1_CENTeamProject.Author (`First Name`, `Last Name`, `Biography`, `Publisher`) VALUES ('" .  $first_name . "', '" . $last_name . "', '" . $biography . "', '" . $publisher_author . "')";
}

if($book_flag){
$sql = "INSERT INTO angel1_CENTeamProject.Books (`ISBN`, `Book Name`, `Description`, `Price`, `Author`, `Publisher`, `Year Published`, `Genre`, `Copies Sold`) VALUES ('" . $ISBN . "', '" . $book_name . "', '" . $description . "', '" . $price . "', '" . $author . "', '" . $publisher_book . "', '" . $year . "', '" . $genre . "', '" . $copies_sold . "')";
}

echo $sql . "\n\r";

//if ($dblink->query($sql) === TRUE) {
if (mysqli_query($dblink,$sql) === TRUE) { 
                            echo "New record created successfully";
                        } else {
                        echo "Error: " . $sql . "<br>" . $dblink->error;
                        }

?>

