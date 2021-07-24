<?php

if (!session_id()) {

              session_start();

	$_SESSION['entry'];

  	$_SESSION['first_name'];
	$_SESSION['last_name'];
	$_SESSION['biography'];
	$_SESSION['publisher_author'];
	$_SESSION['author_name'];
	
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
	$_SESSION['list_flag'];
	$_SESSION['search_flag'];


	

              if (!isset($_SESSION['errors'])) $_SESSION['errors'] = false;

}

$entry = $_SESSION['entry'];

$ISBN = $_SESSION['ISBN'];
$book_name = $_SESSION['book_name'];
$description =	$_SESSION['description'];
$price = $_SESSION['price'];
$author = $_SESSION['author'];
$publisher_book = $_SESSION['publisher_book'];
$year = $_SESSION['year'];
$genre = $_SESSION['genre'];
$copies_sold = $_SESSION['copies_sold'];
$search_flag = $_SESSION['search_flag'];
$list_flag = $_SESSION['list_flag'];

 

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

                                    <p style="margin: 0;">Search tool</p>

                                </td>

                            </tr>
                            <tr>

 


                            <tr>

                                <td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 22px; color: #555555; text-align: left; font-weight:normal;">

                                                                                                                                 <form action="search.php" method="post" name="search" id="search">

                                                                                                                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">


                                                                                                                                                                            <td style="text-align: left; padding: 25px 25px 25px; font-size: medium;" width="65%">How do you want to search?</td>

                                                                                                                                                                             <td style="font-size: small; padding-top: 22px;" valign="top"><input name="list_flag" type="radio" value="1" id="list_flag" checked><label for="list_flag"> Author</label></td>

                                                                                                                                                                             <td style="font-size: small; padding-top: 22px;" valign="top"><input name="list_flag" type="radio" value="2" id="list_flag"><label for="list_flag"> ISBN</label></td><td>&nbsp;</td>

                                                                                                                                                               </tr>

                                                                                                                                                               <tr>

                                                                                                                                                                             <td style="text-align: right; padding: 5px 10px 5px 0;" width="45%"><label for="entry"><?php if ($entry) echo '<span style="color: red">'; ?>Entry <?php if ($entry) echo '</span>'; ?></label></td>

                                                                                                                                                                             <td><input name="entry" type="text" id="entry" value="<?php echo $entry; ?>"></td>

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
