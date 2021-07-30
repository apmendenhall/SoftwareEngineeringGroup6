<?php

if (!session_id()) {

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
	$_SESSION['author_flag'];
	$_SESSION['book_flag'];


	

              if (!isset($_SESSION['errors'])) $_SESSION['errors'] = false;

}

$ISBN = $_SESSION['ISBN'];
$book_name = $_SESSION['book_name'];
$description =	$_SESSION['description'];
$price = $_SESSION['price'];
$author = $_SESSION['author'];
$publisher_book = $_SESSION['publisher_book'];
$year = $_SESSION['year'];
$genre = $_SESSION['genre'];
$copies_sold = $_SESSION['copies_sold'];
$book_flag = 1;

 

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

 

 

                <!-- HEADER : BEGIN -->

                <tr>

                    <td>

                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                            <tr>

                                

                            </tr>

                        </table>

                    </td>

                </tr>

                <!-- HEADER : END -->

 

                <!-- INTRO : BEGIN -->

                <tr>

                    <td bgcolor="#f7fafc"><a name="register"></a>

                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                            <tr>

                                <td style="padding: 40px 40px 0px 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; text-align: left; font-weight:bold;">

                                    <p style="margin: 0;">Please enter the details of the book you would like to add to the database. Press submit when completed.</p>

                                </td>

                            </tr>

                            <tr>

                                <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 22px; color: #555555; text-align: left; font-weight:normal;">

                                                                                                                                 <form action="test.php" method="post" name="registration" id="registration">

                                                                                                                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                                                                                                                                                               <tr>

                                                                                                                                                                             <td style="text-align: right; padding: 5px 10px 5px 0;" width="45%"><label for="name1"><?php if ($ISBN) echo '<span style="color: red">'; ?>* ISBN<?php if ($ISBN) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="ISBN" type="text" id="ISBN" value="<?php echo $ISBN; ?>"></td>

                                                                                                                                                               </tr>

                                                                                                                                                               <tr>

                                                                                                                                                                             <td style="text-align: right; padding: 5px 10px 5px 0;"><label for="book_name"><?php if ($book_name) echo '<span style="color: red">'; ?>* Book Name<?php if ($book_name) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="book_name" type="text" id="book_name" value="<?php echo $book_name; ?>"></td>

                                                                                                                                                               </tr><tr>

<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="description"><?php if ($description) echo '<span style="color: red">'; ?>* Description<?php if ($description) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="description" type="text" id="description" value="<?php echo $description; ?>"></td>

                                                                                                                                                               </tr><tr>
    
<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="price"><?php if ($price) echo '<span style="color: red">'; ?>* Price<?php if ($price) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="price" type="float" id="price" value="<?php echo $price; ?>"></td>

                                                                                                                                                               </tr><tr>    
      
<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="author"><?php if ($author) echo '<span style="color: red">'; ?>* Author<?php if ($author) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="author" type="text" id="author" value="<?php echo $author; ?>"></td>

                                                                                                                                                               </tr><tr>      
                                                                                                                                                               
<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="publisher_book"><?php if ($publisher_book) echo '<span style="color: red">'; ?>* Publisher<?php if ($publisher_book) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="publisher_book" type="text" id="publisher_book" value="<?php echo $publisher_book; ?>"></td>

                                                                                                                                                               </tr><tr>

<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="year"><?php if ($year) echo '<span style="color: red">'; ?>* Year<?php if ($year) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="year" type="int" id="year" value="<?php echo $year; ?>"></td>

                                                                                                                                                               </tr><tr>

<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="genre"><?php if ($genre) echo '<span style="color: red">'; ?>* Genre<?php if ($genre) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="genre" type="text" id="genre" value="<?php echo $genre; ?>"></td>

                                                                                                                                                               </tr><tr>

<td style="text-align: right; padding: 5px 10px 5px 0;"><label for="copies_sold"><?php if ($copies_sold) echo '<span style="color: red">'; ?>* Copies Sold<?php if ($copies_sold) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="copies_sold" type="int" id="copies_sold" value="<?php echo $copies_sold; ?>"></td>

<p>
                        <input name="book_flag" type="hidden" id="book_flag" value="1" >
                      </p>
                                                                                                                                                               </tr>

                                                                                                                                                     
                                                                                                                                                </table><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                                                                                                                                                                                                                                                                                                                                                                                                                                                       

                                                                                                                                                </table><table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" class="center-on-narrow">

                                                                                                                                                               <tr>

                                                                                                                                                                             <td width="40%"></td>

                                                                                                                                                                             <td style="background: #26a4d3; text-align: center;" class="button-td">

                                                                                                                                                                                            <button type="submit" style="background: #26a4d3; border: 10px solid #26a4d3; font-family: 'Montserrat', sans-serif; font-size: 16px; line-height: 1.1; text-align: center; text-decoration: none; display: block; font-weight: bold; cursor: pointer;" class="button-a">

                                                                                                                                                                                                          <span style="color:#ffffff;" class="button-link">&nbsp;&nbsp;&nbsp;SUBMIT&nbsp;&nbsp;&nbsp;</span>

                                                                                                                                                                                            </button>

                                                                                                                                                                             </td>

                                                                                                                                                                             <td width="40%"></td>

                                                                                                                                                               </tr>

                                                                                                                                                </table>

                                                                                                                                 </form>

                                </td>

                            </tr>

                        </table>

                    </td>

                </tr>

                <!-- INTRO : END -->

 

                <!-- AGENDA : BEGIN -->
                <!-- AGENDA : END -->

 

                <!-- CTA : BEGIN -->
                <!-- CTA : END -->

 

                <!-- SOCIAL : BEGIN -->

               
                <!-- SOCIAL : END -->

 

                <!-- FOOTER : BEGIN -->

                <tr>

                    <td bgcolor="#ffffff">

                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">

                            <tr>

                                <td style="padding: 40px 40px 40px 40px; font-family: sans-serif; font-size: 12px; line-height: 18px; color: #666666; text-align: center; font-weight:normal;">

                                <p style="margin: 0;">&nbsp;</p></td>

                            </tr>

 

                        </table>

                    </td>

                </tr>

                <!-- FOOTER : END -->

 

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
