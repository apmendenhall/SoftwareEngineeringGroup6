<?php


	
$sql = "";
$i = 0; //counter
$numberFound = 0; //number of matches found
$list_flag = 0;
$search_flag = 0;
$mode = 0;


if($argc > 0 )
{

//author variables
$first_name = "";
$last_name = "";
$biography = "";
$publisher_author = "";
$author_flag = 0;
$author_name = "";

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
//$foundISBN = "";
$bookID = 0;


}
else
{
$ISBN = $_REQUEST['ISBN'];
$book_name = $_REQUEST['book_name'];
$description = $_REQUEST['description'];
$price =  $_REQUEST['price'];
$author =  $_REQUEST['author'];
$publisher_book =  $_REQUEST['publisher_book'];
$year =  $_REQUEST['year'];
$genre =  $_REQUEST['genre'];
$copies_sold =  $_REQUEST['copies_sold'];
$ratings =  $_REQUEST['ratings'];
$book_flag =  $_REQUEST['book_flag'];

$search_flag = $_REQUEST['search_flag'];
$list_flag = $_REQUEST['list_flag'];
$entry = $_REQUEST['entry'];
$mode =  $_REQUEST['mode'];


$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$biography = $_REQUEST['biography'];
$publisher_author = $_REQUEST['publisher_author'];
$author_flag =  $_REQUEST['author_flag'];
$author_name = $first_name . " " . $last_name;
}

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
  elseif ($argv[1] == 'ISBN' && $argc == 3) {
    
      	$sql_statement = "SELECT * FROM angel1_CENTeamProject.Books ";
	$ISBN = $argv[2];
	$search_flag = 1;
	}
 elseif ($argv[1] == 'list' && $argc == 3) {
    
      	$sql_statement = "SELECT * FROM angel1_CENTeamProject.Books ";
	$author_name = $argv[2];
	$list_flag = 1;
	}
else {
 echo "please enter the correct number of parameters. 9 for adding a book and 4 for adding an author. \n";
 echo "if you would like to search by ISBN, type ISBN and then use the isbn as a parameter.\n";
 echo "if you would like to list books by an author, type list and then put the author name in quotes.\n";
 echo "if your enter has a space, please put the entry in quotes.\n\n";
 echo "this is argc: " . $argc . "\n";

  echo "\nplease enter either books or author as your first argument, followed by details.\n";
  echo "for books, please enter ISBN, book name, description, price, author, publisher, year published, genre, and copies sold.\n";
  echo "for author, please enter first name, last name, biography, and publisher.\n\n\n";

exit(1);
}

} elseif ($argc > 0) {
  echo "\nplease enter either books or author as your first argument, followed by details.\n";
  echo "for books, please enter ISBN, book name, description, price, author, publisher, year published, genre, and copies sold.\n";
  echo "for author, please enter first name, last name, biography, and publisher.\n\n\n";
	exit(1);
}

//echo "entry: " . $entry . "\n search: " . $search_flag . "\n list: " . $list_flag;

$sql_statement = "SELECT * FROM angel1_CENTeamProject.Books ";

//echo "\n\r description before SQL " . $description . "\r\n";
//insert randon delay to from 1 to 13m

// $dblink = mysqli_connect('localhost', 'root', 'password', 'p@ssw0rd');
$dblink = mysqli_connect('angelinne.com:3306', 'angel1_admin', '9@;]*a*8XZrf');
if (!$dblink) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
//echo "Success: A proper connection to MySQL was made!\n";
//echo "Host information: " . mysqli_get_host_info($dblink) . PHP_EOL;

if($search_flag || $list_flag == 2 || $mode == 2){
	if($argc == 0 ){
		$ISBN = $entry;
	}
	$qry = "SELECT * FROM angel1_CENTeamProject.Books WHERE `ISBN` LIKE '" . $ISBN . "'";
}
elseif($mode == 0){
	echo "\n\nNo search mode entered. Enter 1 for author and 2 for ISBN\n";
	exit(1);
}
else{
	if($argc == 0){
		$author_name = $entry;
	}
	$qry = "SELECT * FROM angel1_CENTeamProject.Books WHERE `Author` LIKE '" . $author_name . "'";
}

print_r($qry);


 $stmt = mysqli_stmt_init($dblink);


 $stmt = mysqli_prepare($dblink, $qry);


//mysqli_stmt_bind_param($stmt, "i", $price);

	mysqli_stmt_execute($stmt);

	mysqli_stmt_bind_result($stmt, $ISBN, $book_name, $description, $price, $author, $publisher_book, $year, $genre, $copies_sold, $ratings, $bookID);

		while (mysqli_stmt_fetch($stmt)) {
			$foundISBN[$i] = $ISBN;
			$foundBook_name[$i] = $book_name;
			$foundDescription[$i] = $description;
			$foundPrice[$i] = $price;
			$foundAuthor[$i] = $author;
			$foundPublisher_book[$i] = $publisher_book;
			$foundYear[$i] = $year;
			$foundGenre[$i] = $genre;
			$foundCopies_sold[$i] = $copies_sold;
			$foundRatings[$i] = $ratings;
			$i++;
		}


$numberFound = $i;

$i = 0;

if($numberFound == 0){
echo "No matches found.\n";
}

if($argc > 0){
while($i < $numberFound){
	echo "\n\n\r Entry Found: \n";
	echo " ISBN: " . $foundISBN[$i];
	echo "\n\r Book Name: " . $foundBook_name[$i];
	echo "\n\r Description: " . $foundDescription[$i];
	echo "\n\r Price: " . $foundPrice[$i];
	echo "\n Author: " . $foundAuthor[$i];
	echo "\n Publisher: " . $foundPublisher_book[$i];
	echo "\n Genre: " . $foundGenre[$i];
	echo "\n Copies Sold: " . $foundCopies_sold[$i];
	echo "\n Rating : " . $foundRatings[$i];
	$i++;
	}
}
else{

?>

<head>
 
</head>

<body width="100%" bgcolor="#F1F1F1" style="margin: 0; mso-line-height-rule: exactly;">

    <center style="width: 100%; background: #F1F1F1; text-align: left;">

 

        <!-- Visually Hidden Preheader Text : BEGIN -->

        <div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">

                                           Bookstore

        </div>

        <!-- Visually Hidden Preheader Text : END -->

 

   

        <div style="max-width: 680px; margin: auto;" class="email-container">

            <!--[if mso]>
            <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="680" align="center">
            <tr>
            <td>
            <![endif]-->

 

            <!-- Email Body : BEGIN -->

            <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 680px;" class="email-container">

 

 

 

                <!-- INTRO : BEGIN -->

                <tr>



                            </tr>

                        </table>

                    </td>

                </tr>

                <!-- INTRO : END -->
 <br> Number Found: <?php echo $numberFound ?></br>               
 <?php while($i < $numberFound){ ?>
 <br> Entry Number: <?php echo $i+1; ?>
 <br> ISBN: <?php echo $foundISBN[$i] ?>
 <br> Book Name: <?php echo $foundBook_name[$i] ?>
 <br> Description: <?php echo $foundDescription[$i] ?>
 <br> Price: <?php echo $foundPrice[$i] ?>
<br> Author: <?php echo $foundAuthor[$i] ?>
<br> Publisher: <?php echo $foundPublisher_book[$i] ?>
<br> Year: <?php echo $foundYear[$i] ?>
<br> Genre: <?php echo $foundGenre[$i] ?>
<br> Copies Sold: <?php echo $foundCopies_sold[$i] ?>
<br> Ratings: <?php echo $foundRatings[$i] ?>
<br><br>
<?php $i++; } ?>
                <!-- AGENDA : BEGIN -->
                <!-- AGENDA : END -->

 

                <!-- CTA : BEGIN -->
                <!-- CTA : END -->

 

                <!-- SOCIAL : BEGIN -->

               
                <!-- SOCIAL : END -->

 

           

 

            </table>

            <!-- Email Body : END -->

 

            <!--[if mso]>
            </td>
            </tr>
            </table>
            <![endif]-->

        </div>

 

    </center>

</body>

</html>

<?php
}

echo $sql . "\n\r";

//if ($dblink->query($sql) === TRUE) {

?>
