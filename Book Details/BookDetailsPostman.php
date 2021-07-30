<?php


	
$sql = "";

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
$book_author = "";
$publisher_book = "";
$year = 0;
$genre = "";
$copies_sold = 0;
$ratings = 0;
$book_flag = 0;

$book = 0;
$author = 0;
}
else
{
$ISBN = $_REQUEST['ISBN'];
$book_name = $_REQUEST['book_name'];
$description = $_REQUEST['description'];
$price =  $_REQUEST['price'];
$book_author =  $_REQUEST['book_author'];
$publisher_book =  $_REQUEST['publisher_book'];
$year =  $_REQUEST['year'];
$genre =  $_REQUEST['genre'];
$copies_sold =  $_REQUEST['copies_sold'];
$ratings =  $_REQUEST['ratings'];
$book_flag =  $_REQUEST['book_flag'];
$book =  $_REQUEST['book'];
$author =  $_REQUEST['author'];



$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$biography = $_REQUEST['biography'];
$publisher_author = $_REQUEST['publisher_author'];
$author_flag =  $_REQUEST['author_flag'];
$author_name = $first_name . " " . $last_name;

}



  if($book){
	$book_flag = 1;

  }
  elseif($author) {
   
	$author_name = $first_name . " " . $last_name;
	
	$author_flag = 1;
	}
else {
 echo "Begin your entry with specifing if you will enter a new 'book' or 'author'. enter the value as 1.\n\n";
 echo "please enter the correct number of parameters. 9 for book and 4 for author.\n";

  echo "for books, please enter ISBN, book_name, description, price, book_author, publisher_book, year published ('year'), genre, and copies_sold.\n";
  echo "for author, please enter first_name, last_name, biography, and publisher_author.\n\n\n";

exit(1);
}

//} elseif ($argc > 0) {
 // echo "\nplease enter either books or author as your first argument, followed by details.\n";
 // echo "for books, please enter ISBN, book_name, description, price, book_author, publisher_book, year published (year), genre, and copies_sold.\n";
 // echo "for author, please enter first_name, last_name, biography, and publisher_author.\n\n\n";
//	exit(1);


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

$qry = mysqli_query($dblink,$sql_statement);
//print_r($qry);




//$sql = "INSERT INTO 'Author' ('First Name', 'Last Name', 'Biography', 'Publisher') VALUES ('" .  $first_name . "', '" . $last_name . "', '" . $biography . "', '" . $publisher_author . "' )";



if($author_flag){
	if($biography && $first_name && $last_name && $publisher_author){
//echo "in auth entry " . $biography . "\r\n";
$sql = "INSERT INTO angel1_CENTeamProject.Author (`First Name`, `Last Name`, `Biography`, `Publisher`, `Author`) VALUES ('" .  $first_name . "', '" . $last_name . "', '" . $biography . "', '" . $publisher_author . "', '" . $author_name . "')";
	}
	else{
		echo "error: missing parameters\n";
		exit (1);
	}
}

if($book_flag){
	if($ISBN && $book_name && $description && $price && $book_author && $publisher_book && $year && $genre && $copies_sold){
$sql = "INSERT INTO angel1_CENTeamProject.Books (`ISBN`, `Book Name`, `Description`, `Price`, `Author`, `Publisher`, `Year Published`, `Genre`, `Copies Sold`) VALUES ('" . $ISBN . "', '" . $book_name . "', '" . $description . "', '" . $price . "', '" . $book_author . "', '" . $publisher_book . "', '" . $year . "', '" . $genre . "', '" . $copies_sold . "')";
	}else{
		echo "error: missing parameters\n";
		exit (1);
	}

}

//echo $sql . "\n\r";


//if ($dblink->query($sql) === TRUE) {
if (mysqli_query($dblink,$sql) === TRUE) { 
                            echo "New record created successfully\n";
                        } else {
                        echo "Error: " . $sql . "<br>" . $dblink->error;
                        }



//if ($dblink->query($sql) === TRUE) {

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
 <?php if($book_flag){ ?>
 <br> ISBN: <?php echo $ISBN ?>
 <br> Book Name: <?php echo $book_name ?>
 <br> Description: <?php echo $description ?>
 <br> Price: <?php echo $price ?>
<br> Author: <?php echo $book_author ?>
<br> Publisher: <?php echo $publisher_book ?>
<br> Year: <?php echo $year ?>
<br> Genre: <?php echo $genre ?>
<br> Copies Sold: <?php echo $copies_sold ?>
<br> Ratings: <?php echo $ratings ?>
<br><br>
<?php } else {?>
 <br> First Name: <?php echo $first_name ?>
 <br> Last Name: <?php echo $last_name ?>
 <br> Biography: <?php echo $biography ?>
 <br> Publisher: <?php echo $publisher_author ?>
<br><br>
<?php } ?>
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



//if ($dblink->query($sql) === TRUE) {

?>

