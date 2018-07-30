<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barrieing - Coming Soon</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/flipclock.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="logo">
        <img src="img/logo.png" alt="barrieing logo" width="100%">
    </div>
    <?php 
        if (isset($_GET['submit']) && $_GET['submit'] == 'success'){?>
            <div class="alert alert-dismissible alert-success text-center" role="alert">
            Form Submitted Successfully!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php } ?>
        <?php
        if (isset($_GET['submit']) && $_GET['submit'] == 'error'){?>
            <div class="alert alert-dismissible alert-danger text-center" role="alert">
            Submission Unsuccessful. Please check that you filled out the form correctly!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <?php } ?>
    <div class="background-top">
        <header class="header">
            <div class="header-social d-none d-md-flex col-sm-12 col-md-3 mx-auto ml-md-4 justify-content-around align-items-center">
                <a href="javascript:void(0);" target="_blank"><span class="fab fa-youtube fa-2x"></span></a>
                <a href="https://twitter.com/barrieing" target="_blank"><span class="fab fa-twitter fa-2x"></span></a>
                <a href="https://facebook.com/Barrieing-272908523473077" target="_blank"><span class="fab fa-facebook fa-2x"></span></a>
                <a href="https://pinterest.ca/barrieing" target="_blank"><span class="fab fa-pinterest fa-2x"></span></a>
                <a href="https://instagram.com/barrieing" target="_blank"><span class="fab fa-instagram fa-2x"></span></a>
            </div>
        </header>
        
        <div class="col-11 col-md-4 countdown">
            <h1 class="countdown-heading text-center text-uppercase">Coming Soon!</h1>
            <p class="lead px-3 mb-0 mb-md-3 text-center">Connecting you to all that Barrie has to offer</p>
            <div class="countdown-clock"></div>
        </div>
    </div>
    <div class="contest jumbotron-fluid d-flex flex-column justify-content-center">
        <div class="contest-content col-12 col-md-4 offset-md-7 ">
            <div class="contest-heading text-center d-flex flex-column justify-content-around h-100">
                <h2 class="display-4 text-uppercase">Take your shot at</h2>
                <h3 class="contest-capturing mb-4"><span class="sun-valley">Capturing</span>
                    <div class="barrie">BARRIE</div></h3>
                <h3 class="text-uppercase">Join our contest for a chance to have your photo featured on our website</h3>
                <a href="javascript:void(0);" class="btn btn-outline-light rounded-0 text-uppercase mx-auto mt-4">Enter Now!</a>
            </div>
        </div>
    </div>
    <div class="contact">
        <h3 class="contact-heading text-uppercase text-center text-white">Getting In Touch</h3>
        <div class="contact-form container">
            <form class="my-5" action="includes/process-form.php" method="POST">
                <div class="row my-5 mx-auto container p-0 pb-md-5">
                    <div class="bubble bubble-left col-12 col-md-4 offset-md-1">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Your Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone">
                        </div>
                    </div>
                    <div class="bubble bubble-right col-12 col-md-4 offset-md-2">
                        <div class="form-group">
                            <label for="message">Question or Comment</label>
                            <textarea name="message" id="message" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="terms" id="terms" value="yes">
                                <label class="custom-control-label" for="terms">
                                    I agree to receive BarrieING’s communications regarding BarrieING. You can withdraw your consent at any time.
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-light mx-auto text-uppercase d-block px-5 rounded-0">Send</button>
            </form>
        </div>
    </div>
    <footer class="footer p-3 p-md-5">
        <div class="container d-flex flex-column justify-content-center">
            <img width="329" height="109" class="img-fluid mx-auto" src="img/footer_logo.png" alt="barrie footer logo">
            <div class="footer-social text-center container col-12 col-md-6 offset-md-3 justify-content-around mt-4">
                <a href="javascript:void(0);" target="_blank"><span class="fab fa-youtube fa-2x"></span></a>
                <a href="https://twitter.com/barrieing" target="_blank"><span class="fab fa-twitter fa-2x"></span></a>
                <a href="https://facebook.com/Barrieing-272908523473077" target="_blank"><span class="fab fa-facebook fa-2x"></span></a>
                <a href="https://pinterest.ca/barrieing" target="_blank"><span class="fab fa-pinterest fa-2x"></span></a>
                <a href="https://instagram.com/barrieing" target="_blank"><span class="fab fa-instagram fa-2x"></span></a>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="js/flipclock.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.4.2/cleave.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cleave.js/1.4.2/addons/cleave-phone.ca.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
</body>

</html>