<?php
if(!empty($_POST))
{
    extract($_POST);

$to      = 'enquiries@pickwicksguesthouse.co.uk';
$subject = 'Contact Us!';
$message = 'Hey! You received a message from Contact Form as follows <br> <br> Name: <b>'.$name.' </b> <br> Phone number: <b>'.$phone.' </b> <br> Email: <b>'.$email.' </b> <br>  Message: <b>'.$message.' </b> ';
$headers =
"MIME-Version: 1.0" . "\r\n".
 "Content-type:text/html;charset=UTF-8" . "\r\n".
    'Reply-To: '.$email . "\r\n" ;


 mail($to, $subject, $message, $headers);

        $successmsg= "Message Sent!";

   }
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pickwick's Guest House</title>
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-default menu-custom navbar-fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse menu-details" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-links">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="about.html">About</a>
                            </li>
                            <li>
                                <a href="find-us.html">Find Us</a>
                            </li>
                            <li>
                                <a class="active-link" href="contact.php">Contact</a>
                            </li>
                            <li>
                                <a href="rates.html">Rates</a>
                            </li>
                            <li>
                                <a href="breakfast-menu.html">Breakfast Menu</a>
                            </li>
                            <li>
                                <a href="gallery.html">Gallery</a>
                            </li>
                            <li>
                                <a href="useful-links.html">Useful Links</a>
                            </li>
                            <li>
                                <a href="access-statement.html">Access Statement</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="clear_div"></div>
    <div class="bg-cover">
        <div class="bg-cover-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clear_div"></div>


    <section class="contact-section">
        <div class="overlay">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6">

                        <p class="contact-small-head"><i class="fa fa-envelope"></i> Email</p>
                        <p class="c-details">

                            <a href="mailto:enquiries@pickwicksguesthouse.co.uk" class="link2">
                                enquiries@pickwicksguesthouse.co.uk
                            </a>

                        </p>

                        <p class="contact-small-head  mt-40"><i class="fa fa-phone"></i> Phone</p>
                        <p class="c-details" style="margin-bottom:0px !important">

                            In the UK -
                            <a href="tel:01865 750487" class="link2">
                                01865 750487
                            </a>
                        </p>

                        <p class="c-details">
                            Outside the UK -
                            <a href="tel:+44 1865 750487" class="link2">
                                +44 1865 750487
                            </a>

                        </p>



                        <p class="contact-small-head mt-40"><i class="fa fa-fax"></i> Fax</p>
                        <p class="c-details" style="margin-bottom:0px !important">

                            In the UK - 01865 742208

                        </p>
                        <p class="c-details">

                            Outside the UK - +44 1865 742208

                        </p>

                    </div>

                    <div class="col-md-6 col-sm-6">
                        <form class="contact-form" method="post">

                            <div class="" style="font-size:18px;margin-bottom: 10px;">
                                <?php
                                if (isset($successmsg)  &&  $successmsg !="")
                                {
                                echo '<b style=color:#63829A>'.$successmsg.'</b>';
                                }

                                ?>
                            </div>

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" name="name" class="form-control custom-input" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" id="email" name="email" class="form-control custom-input" />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control custom-input" />
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea id="message" name="message" class="form-control custom-textarea" rows="6"></textarea>
                            </div>
                            <div class="text-center">
                                <input type="submit" value="SUBMIT" class="btn btn-primary btn-page btn-page-width" />
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clear_div"></div>
    <!-- Footer -->
    <div class="footer_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p class="text-center">
                        Copyright ©2020 Pickwick's Guest House. All Rights Reserved.
                    </p>
                </div>

            </div>
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
