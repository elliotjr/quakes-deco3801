
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
	<link href="jumbotron.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li class="active"><a href="feltForm.php">FELT Report</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">




      <!-- START THE FEATURETTES -->

      <div class="container">
        <div class="page-header">
          <h1>Felt Form Entry</h1>
        </div>

        <h3 class="text-info">Time of event</h3>
        <div class="row">
          <div class="col-xs-6">
            <label for="dateOfEvent">Date of Event</label>
            <input type="text" id="dateOfEvent" class="form-control" placeholder="Date" required autofocus>
          </div>

          <div class="col-xs-6">
            <label for="localTime">Local Time</label>
            <input type="text" id="localTime" class="form-control" placeholder="Local Time" required autofocus>
          </div>
        </div>

        <hr>
        <div class="clearfix"></div>
        <h3 class="text-info">Where were you at the above time?</h3>



        <div class="row">
          <div class="col-xs-6">
            <label for="state">State</label>
            <input type="text" id="state" class="form-control" placeholder="State" required autofocus>
          </div>

          <div class="col-xs-6">
            <label for="town">Town</label>
            <input type="text" id="town" class="form-control" placeholder="Town" required autofocus>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-xs-6">
            <label for="streetAddress">Street Address</label>
            <input type="text" id="streetAddress" class="form-control" placeholder="Street Address" required autofocus>
          </div>

          <div class="col-xs-6">
            <label for="nearestCrossStreet">Nearest Cross Street</label>
            <input type="text" id="nearestCrossStreet" class="form-control" placeholder="Nearest Cross Street" required autofocus>
          </div>
        </div>



        <br>
        <hr>

        <div class="row">
          <div class="col-xs-6">
            <h3 class="text-info">Who Felt it?</h3>
            <input type="radio" name="eventFelt" value="Yourself" checked> Yourself<br>
            <input type="radio" name="eventFelt" value="Several People"> Several People<br>
            <input type="radio" name="eventFelt" value="Many People"> Many People
          </div>

          <div class="col-xs-6">
            <h3 class="text-info">At the Time of the Event, you Were...</h3>
            <input type="radio" name="eventPlace" value="Indoors" checked> Indoors<br>
            <input type="radio" name="eventPlace" value="Outdoors"> Outdoors<br>
            <input type="radio" name="eventPlace" value="Sitting"> Sitting<br>
            <input type="radio" name="eventPlace" value="Driving"> Driving<br>
            <input type="radio" name="eventPlace" value="Sleeping"> Sleeping<br>
            <input type="radio" name="eventPlace" value="Can't Remember"> Can't Remember
          </div>
        </div>

        <br>
        <hr>

        <div class="row">
          <h3 class="text-info">If Indoors...</h3>
          <div class="col-xs-6">
            <h4 class="text-info">The building was a...</h4>
            <input type="radio" name="eventFelt" value="Home" checked> Home<br>
            <input type="radio" name="eventFelt" value="Apartment"> Apartment<br>
            <input type="radio" name="eventFelt" value="Store"> Store<br>
            <input type="radio" name="eventFelt" value="Office"> Office<br>
            <input type="radio" name="eventFelt" value="Other Large Building"> Other Large Building<br>
            <input type="radio" name="eventFelt" value="Can't Remember"> Can't Remember
          </div>

          <div class="col-xs-6">
            <h4 class="text-info">You were in the...</h4>
            <input type="radio" name="eventPlace" value="Basement" checked> Basement<br>
            <input type="radio" name="eventPlace" value="Ground Floor"> Ground Floor<br>
            <input type="radio" name="eventPlace" value="First Floor"> First Floor<br>
            <input type="radio" name="eventPlace" value="Higher Floor"> Higher Floor<br>
            <input type="radio" name="eventPlace" value="Can't Remember"> Can't Remember
          </div>
        </div>



        <br>

      <label for="inputTime">Time</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Time" required autofocus>
      </br>

      <label for="inputDate">Date</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Date" required autofocus>
      </br>

      <label for="inputEmail">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </br>

      <label for="inputFname">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </br>

      <label for="inputLname">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      </br>
    </div>



      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
