<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>
Green Earth Mission : Initiative to process waste for a Cleaner Environment
    </title>
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
		<?php include("navbar.php"); ?>
<br><br>
<div class='container'>
<div class="row">
            <div class="col-md-7">
                <h2>Send us a Message</h2>
                <form name="sentMessage" id="contactForm" action="bin/contact_me.php" method="POST"novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <div class="col-md-5">
                <h3>Contact Details</h3>
                <h4>28-A, Suryalok Colony, Mau Road, Agra (India).<br>Email: rajivjn20@gmail.com</h4>
                <iframe width="500" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://my.ctrlq.org/maps/#roadmap|13|27.203092938854958|77.99953731992798"></iframe>
        </div>
    </div>
        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h2>Members</h2>
                <br>
            </div>
            <div class="col-md-6 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/rajiv.jpg" alt="Rajiv Kumar" width="200" height="250">
                    <div class="caption">
                        <h3>Rajiv Kumar<br>
                        </h3>
                        <p>Founder</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/2.jpg" alt="" width="200" height="250">
                    <div class="caption">
                        <h3>Mohan K Agarwal<br>
                        </h3>
                        <p>Vice President.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/3.jpg" alt="" width="200" height="250">
                    <div class="caption">
                        <h3>Laakhan Singh<br>
                        </h3>
                        <p>Secretary.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <div class="thumbnail">
                    <img class="img-responsive" src="img/4.jpg" alt="" width="200" height="250">
                    <div class="caption">
                        <h3>Janmjay Sharma<br>
                        </h3>
                        <p>Finance Secretary.</p>
                    </div>
                </div>
            </div>
        </div>




        </div>
    <!-- /.container -->
<div class="container-fluid">
<?php include "footer.php";?>
</div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>