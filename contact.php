<!doctype html>
<html lang="en">
    <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.standalone.css"> -->
            <!-- <link rel="stylesheet" href="bootstrap.css"> -->


            <link href="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />

            <link rel="stylesheet" href="css/styles.css">

            <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
            <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
            <title>Thersa Burden Makeup Artistry</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link rel="icon" type="image/png" href="img/Icons/favicon.png" />
            <meta name="description" content="Theresa Burden Makeup Artistry" />
            <meta name="keywords" content="theresa burden, makeup artist, art, artist, wedding, drawing, bridal, raleigh, cary, north carolina, nc, apex, durham, triangle" />
            <meta name="robots" content="index,follow" />
            <meta name="author" content="Theresa Burden, Joseph Jarriel" />
            <meta property="og:image" content="img/about/makeupartist-1.jpg" />
            <meta property="og:description" content="Theresa Burden Makeup Artistry" />
            <meta property="og:url"content="http://www.theresaburden.com/index.html" />
            <meta property="og:title" content="Theresa Burden Makeup Artistry" />

    </head>
    <body>

    <div class="mb-5">
        </div>

        <div class="container text-center border border-periwinkle border-top-0 border-right-0 border-left-0 mb-5" id="siteHeader">
            <!-- Different sized headers for mobile -->
            <h1 class="display-4 d-none d-sm-block font-weight-bold"><a href="./">THERESA BURDEN</a></h1>
            <h1 class="display-5 d-sm-none font-weight-bold"><a href="./">THERESA BURDEN</a></h1>
            <h4 class="display-5 d-none d-sm-block mb-5"><a href="./">makeup artistry</a></h4>
            <h4 class="display-5 d-sm-none mb-5"><a href="./">makeup artistry</a></h4>

            <!--TODO: https://stackoverflow.com/questions/21465618/is-it-possible-to-use-twitter-bootstraps-navbar-fix-to-top-only-on-mobile-devic -->
            <nav class="navbar navbar-expand-md bg-white navbar-light" id="siteNav">
                <!-- <a class="navbar-brand d-md-none" href="#">Home</a> -->
                <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#collapsibleNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNav">
                    <ul class="navbar-nav container justify-content-between">
                        <li class="nav-item">
                            <a class="nav-link" href="./gallery.html">GALLERY</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./critiques.html">CRITIQUES</a>
                        </li>
                        <li class="navr-item">
                            <a class="nav-link" href="./contact.php">CONTACT</a>
                        </li>
                        <li class="navr-item">
                            <a class="nav-link" href="./faq.html">FAQ</a>
                        </li>
                        <li class="navr-item">
                            <a class="nav-link" href="./about.html">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./community.html">COMMUNITY</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container mb-5 text-center pageHeader">
            <h2>CONTACT</h2>
        </div>

        <?PHP
        $displayForm =True;
        if($_POST)
        {
            // anti-spammer stuff
            if (empty($_GET))
            {  // prevents spammers who are trying to send data through a GET
                // checks for characters that shouldn't be part of an email address
                $valid_email = preg_match("/[\\000-\\037]/",stripslashes($_POST["email"]));
                $valid_email=eregi('^([0-9a-z]+[-._+&])*[0-9a-z]+@([-0-9a-z]+[.])+[a-z]{2,6}$',$valid_email);

                // checks for anything in any form field that contains common spammer crap
                $crack = preg_match( "/bcc:|to:|cc:|mime-version|multipart|<a|\[url|Content-Type:/i", implode( $_POST ));


                //grab form variables
                $firstName = stripslashes($_POST['firstName']);
                $lastName = stripslashes($_POST['lastName']);
                $email = stripslashes($_POST['email']);
                $date = stripslashes($_POST['date']);
                $time = stripslashes($_POST['time']);
                $phone = stripslashes($_POST['phone']);
                $event = stripslashes($_POST['event']);
                $count = stripslashes($_POST['count']);
                $hair = stripslashes($_POST['hair']);
                $refer = stripslashes($_POST['refer']);
                $message = stripslashes($_POST['message']);

                //grab visitor information

                $datetime = date("F j, Y, g:i a : e");


                $crackMessage = " Your message contained e-mail headers within the message body.<br/>This seems to be a cracking attempt and the message has not been sent.";


                $smessage = "
                    \tEmail sent from theresaburden.com contact page Form\n
                    ********************************************************************************************\n\n\t\t
                    Time Sent: {$datetime}\n\t\t
                    First Name: {$firstName}\n\t\t
                    Last Name: {$lastName}\n\t\t
                    Email: {$email}\n\t\t
                    Phone number: {$phone}\n\t\t

                    How they found you: {$refer}\n\t\t
                    Event date: {$date}\n\t\t
                    Event time: {$time}\n\t\t
                    Event type: {$event}\n\t\t

                    Message: {$message}\n\n\t
                    ********************************************************************************************\n\n
                    ";


                if(!$crack)
                {
                        $mainsent = mail("theresa@theresaburden.com", "Email via theresaburden.com Website", $smessage, "From: no-reply@theresaburden.com\r\nBounce-to:no-reply@theresaburden.com\r\nReply-To:".$email);
                        if($mainsent)
                        {
                            $displayForm = False;
                            $message = "Your message was successfully sent. <br/><Br/>I will get back to you soon.";
                        } else {
                            $message = " Something went wrong when the server tried to send your message.<br/>This is usually due to a server error, and is probably not your fault.<br/>We apologise for any inconvenience caused.";
                        }
                } else {

                    echo $crackMessage;
                }
            } else {
                echo $valid_email;
                echo $crackMmessage;
            }
        }
        ?>

        <div class="container">
            <form class="customForm mb-5" method="post" action="contact.php">
            <?php
            if(isset($message))
            {
                echo "<p class=\"lab text-center\">".$message."</p>";
            } else {
                if($displayForm)
                { ?>
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input required type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="<?= isset($firstName) ? htmlspecialchars($firstName):""; ?>">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input required type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="<?= isset($lastname) ? htmlspecialchars($lastName):""; ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="" value="<?= isset($email) ? htmlspecialchars($email):""; ?>">
                </div>
                <div class="form-group">
                    <label for="confirmEmail">Confirm Email Address</label>
                    <input oninput="checkEmail(this)" type="confirmEmail" required class="form-control" id="confirmEmail" aria-describedby="confirmEmailHelp" placeholder="">
                    <small id="confirmEmailHelp" class="form-text text-muted">Please confirm your email address.</small>
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="" value="<?= isset($phone) ? htmlspecialchars($phone):""; ?>">
                </div>

                <div class="form-group">
                    <label for="eventType">Event Type</label>
                    <input required type="text" class="form-control" id="eventType" name="event" placeholder="" value="<?= isset($event) ? htmlspecialchars($event):""; ?>">
                </div>
                <!--
                <div class="form-group">
                    <label for="eventType">Event Type</label>
                    <select required class="form-control" name="eventType" name="event" id="eventType" value="<?= isset($event) ? htmlspecialchars($event):""; ?>">
                        <option>Wedding</option>
                        <option>Photoshoot</option>
                        <option>Headshot</option>
                        <option>Prom</option>
                        <option>Makeup Lesson</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="eventother">If other, what is your event?</label>
                    <input type="text" class="form-control" id="evnetother" name="eventother" placeholder="Other" value="<?= isset($eventother) ? htmlspecialchars($eventother):""; ?>">
                </div>
                -->

                <div class="form-group">
                    <label for="date">Event Date</label>
                    <input required type="text" class="form-control" id="datepicker" name="date" placeholder="" value="<?= isset($date) ? htmlspecialchars($date):""; ?>">
                </div>

                <div class="form-group">
                    <label for="startTime">Event Start Time</label>
                    <input type="text" class="form-control" id="startTime" name="time" placeholder="" value="<?= isset($time) ? htmlspecialchars($time):""; ?>">
                </div>

                <div class="form-group">
                    <label for="serviceCount">How many people need makeup services?</label>
                    <input type="text" class="form-control" id="serviceCount" name="count" placeholder="" value="<?= isset($count) ? htmlspecialchars($count):""; ?>">
                </div>

                <div class="form-group">
                    <label for="hair">Do you need hair services?</label>
                    <select class="form-control" name="hair" id="hair" name="hair" value="<?= isset($hair) ? htmlspecialchars($hair):""; ?>">
                        <option>No</option>
                        <option>Yes</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="referredBy">How did you hear about me?</label>
                    <input type="text" class="form-control" id="referredBy" name="refer" placeholder="" value="<?= isset($refer) ? htmlspecialchars($refer):""; ?>">
                </div>
                <!--
                <div class="form-group">
                    <label for="referredBy">How did you hear about me?</label>
                    <select required class="form-control" id="referredBy" name="refer" value="<?= isset($refer) ? htmlspecialchars($refer):""; ?>">
                        <option>Google</option>
                        <option>Facebook</option>
                        <option>Instagram</option>
                        <option>Friend</option>
                        <option>Vendor</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="other">If from a friend, vendor, or other, let me know who so I can thank them</label>
                    <input type="text" class="form-control" id="other" name="other" placeholder="Name" value="<?= isset($other) ? htmlspecialchars($other):""; ?>">
                </div>
                -->

                <!-- 
                <div class="form-group">
                    <label for="referredBy">How did you hear about me?</label>
                    <input type="text" class="form-control" name="refer" id="referredBy" list="referrals"  value="<?= isset($refer) ? htmlspecialchars($refer):""; ?>"/>
                    <datalist id="referrals">
                        <option>Google</option>
                        <option>Facebook</option>
                        <option>Instagram</option>
                        <option>Friend</option>
                        <option>Vendor</option>
                        <option>Other: Please be specific so I can thank them.</option>
                    </datalist>
                </div>
                -->

                <div class="form-group">
                        <label for="comment">Message</label>
                        <textarea class="form-control" id="comment" name="message" rows="3" placeholder="" value="<?= isset($message) ? htmlspecialchars($message):""; ?>"></textarea>
                </div>


                <button type="submit" class="btn btn-primary" id="contactButton">Submit</button>

            </form>
            <?php
                }
            }?>
        </div>

        <div class="container-fluid" id="seaFoamFooter">
            <!--social media badges-->
            <div class="container">
                <div class="row pt-5 pb-5 justify-content-center">
                    <div class="col-md-2 col-3">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <a target="blank" href="https://instagram.com/theresaburdenbeauty/">
                                    <img class="img-fluid socialMediaImage" src="img/Icons/instagram-cropped.png" alt="facebook">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-3">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <a target="blank" href="http://www.facebook.com/theresaburdenbeauty">
                                    <img class="img-fluid socialMediaImage" src="img/Icons/facebook-cropped.png" alt="instagram">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-3">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <a target="blank" href="https://plus.google.com/u/0/113612275164670243486">
                                    <img class="img-fluid socialMediaImage" src="img/Icons/gplus-cropped.png" alt="pinterest">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-3">
                        <div class="row justify-content-center">
                            <div class="col-10">
                                <a target="blank" href="https://www.pinterest.com/theresaburdenbeauty/">
                                    <img class="img-fluid socialMediaImage" src="img/Icons/pinterest-cropped.png" alt="pinterest">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!--copyright -->
        <div id="copyright" class="container">
            <div class="mt-5 container text-center">
                <p>© Theresa Burden 2018</p>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/gh/atatanasov/gijgo@1.7.3/dist/combined/js/gijgo.min.js" type="text/javascript"></script>

        <!-- Custom js -->
        <script src="js/contact.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>