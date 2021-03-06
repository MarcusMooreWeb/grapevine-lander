<?php
include 'functions.php';
include 'validation-and-process.php'

?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>The Grapevine App</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        
        
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        
        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    

    
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-12 ">
            <img src="img/coming-soon.png" class="img-fluid" alt="Grapevine Logo">
            
            <h2 class="text-center">Coming Soon!</h2>
            <h3 class="text-center">Leave your email and we'll let you know once we go live!</h3>
        </div>
       </div>
      <br/>
        <div class="row">
        <div class="col-md-12">
          <?php include 'error-or-sent.php'; ?>
          <div class="email-form">
            <form role="form" method="post" action="index.php" class="form-inline justify-content-center">
            <div class="form-group">
              <input type="email" id="email" class="form-control" id="smFormGroupInput" placeholder="e.g. you@email.com" value="<?php echo isset( $fields['email'] )? _e($fields['email'] ) : '' ?>"> 
              <!--<input type="text" class="form-control" name="human" id="human" placeholder="5 + 2 = ?"/>-->
              <div class="g-recaptcha" data-sitekey="6LfHGCwUAAAAAHTSRawN3KV51jrL86G5vklYu81y"></div>
              <input type="submit" name="submit" id="submit" class="btn" value="Send" />
            </div>       
          </form>
          </div>
          
        </div>
       </div>
      <br/>
       <div class="row">
        <div class="col-md-12">
          <p class="small text-center">We promise never to spam you.</p>          
        </div>
      </div>
      <footer>       
         
           <span class="social">
            <a href="https://www.facebook.com/grapevineapp/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/thegrapevineapp/"><i class="fa fa-instagram"></i></a> 
            <a href="https://www.linkedin.com/company/18052413/analytics"><i class="fa fa-linkedin"></i></a>
            <a href="https://twitter.com/thegrapevineapp"><i class="fa fa-twitter"></i></a>
          </span>
          <span class="copyright">&copy; Cgm 2017</span>
        
         
        
      </footer>
      </div><!-- /container -->        
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
