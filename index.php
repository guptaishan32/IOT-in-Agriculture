<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <link rel="stylesheet" href="css/index.css">
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script src="js/fontawesome-all.js"></script>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/validate.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <script type="text/javascript">
        function showpasswords() {
            show = document.getElementById("spwd");
            if (show.type == "password") {
                show.type = "text";
            } else
                show.type = "password";
        }

        function showpasswordl() {
            show = document.getElementById("lpwd");
            if (show.type == "password") {
                show.type = "text";
            } else
                show.type = "password";
        }

    </script>
</head>

<body class="body" ng-app="app" ng-controller="mycontroller" ng-init="reload(true)">
    <div class="fixed-top">
     <div id="headerinfoline1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" style="padding:15px">
                           <center>
                                IOT based smart Greenhouse  Monitoring
                            </center>
                    </div>
                </div>
            </div>
        </div>
    <div id="headerinfoline">
            <nav class="navbar navbar-expand-lg navbar-light">
               <div>
                <button class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#signup">SIGNUP</button>
                <button class="btn btn-success" href="#" role="button" data-toggle="modal" data-target="#login">LOGIN</button>
               </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse"id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item" style="margin-right:0px; margin-left:800px" >
                            <div><a href="#services" class="col-sm-auto" id="headercontent">OUR SERVICES</a></div>
                        </li>
                        <li class="nav-item">
                            <div><a href="#aboutus" class="col-sm-auto" id="headercontent">ABOUT US</a></div>
                        </li>
                        <li class="nav-item">
                            <div><a href="#contact" class="col-sm-auto" id="headercontent">CONTACT US</a></div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--Carousel-->
       <div id="icarousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="pics/p1.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-lg-block">
                        <div style="font-family: Adobe Garamond Pro Bold; font-size:30px; color: white">Regularly monitor your soil moisture, temperature, ph of the soil etc. using soil moisture sensor, temperature sensor , Ph sensor </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="pics/p3.png" alt="Second slide">
                    <div class="carousel-caption d-none d-lg-block">
<!--                        <div style="font-family: Adobe Garamond Pro Bold; font-size:30px; color: darkslategrey">Never miss any appointment with your doctor. </div>-->
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    <br>
    <!--Services-->
    <div id=services>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <center>
                        <div id="infolines">Our services</div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!--Card row 1-->
    <!--Cards-->
    <div class="container">
        <div class="card-deck">
           <!--Highcharts-->
            <div class="card" id="card">
                <center><img class="card-img-top" src="pics/6914195-fig-1-source-small.gif" alt="Card image cap" id="highcharts"></center>
                <div class="card-img-overlay" id="cardbody">
                    <div class="card-text" id="cardpara">Overview Of System Architecture</div>
                </div>
            </div>
            <div class="card" id="card">
                <center><img class="card-img-top" src="pics/1.jfif" alt="Soil Moisture" id="cardimg1"></center>
                <img class="card-img-top" src="pics/1.1.jpg" alt="Soil moisture sensor" id="cardimg2">
                <div class="card-body" id="cardbody">
                    <center>
                        <div class="card-text" id="cardtitle">Monitoring Soil Moisture</div>
                    </center>
                    <div class="card-text" id="cardpara">Measures volumetric content of water with the help of two probes.</div>
                </div>
            </div>
            <!--bp-->
            <div class="card" id="card">
                <center><img class="card-img-top" src="pics/dht11.jfif" alt="Card image cap" id="cardimg1"></center>
                <img class="card-img-top" src="pics/temperature_sensor.png" alt="Card image cap" id="cardimg2">
                <div class="card-body" id="cardbody">
                    <center>
                        <div class="card-text" id="cardtitle">DHT11 Temp. Sensor</div>
                    </center>
                    <div class="card-text" id="cardpara">Connection of temperature sensor with aurdino</div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="card-deck">
            <div class="card" id="card">
                <center><img class="card-img-top" src="pics/vue_highchart.png" alt="Card image cap" id="cardimg1"></center>
                <img class="card-img-top" src="pics/graph.png" alt="Card image cap" id="cardimg2">
                <div class="card-body" id="cardbody">
                    <center>
                        <div class="card-text" id="cardtitle">Highcharts representation</div>
                    </center>
                    <div class="card-text" id="cardpara">Regularly monitor your soil moisture, temperature, ph of the soil etc.</div>
                </div>
            </div>
            <div class="card" id="card">
                <center><img class="card-img-top" src="pics/pir%20sensor...jfif" alt="Card image cap" id="cardimg1"></center>
                <img class="card-img-top" src="pics/pir%20sensor%20with%20ardunio.png" alt="Card image cap" id="cardimg2">
                <div class="card-body" id="cardbody">
                    <center>
                        <div class="card-text" id="cardtitle">PIR Sensor</div>
                    </center>
                    <div class="card-text" id="cardpara">Connection of PIR sensor with aurdino</div>
                </div>
            </div>
            <div class="card" id="card">
                <center><img class="card-img-top" src="pics/ph%20sensor%20kit.jfif" alt="Card image cap" id="cardimg1"></center>
                <img class="card-img-top" src="pics/ph%20sensor.png" alt="Card image cap" id="cardimg2">
                <div class="card-body" id="cardbody">
                    <center>
                        <div class="card-text" id="cardtitle">PH Sensor Kit</div>
                    </center>
                    <div class="card-text" id="cardpara">Connection of PH sensor with aurdino</div>
                </div>
            </div>
        </div>
    </div>
   
    <br>
 
    <!-- Signup Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="modalbodyy">
                <div class="modal-header" style="background-color: aliceblue;">
                    <div class="modal-title" id="signupTitle">
                        <center>
                            <div>
                                <h5>Signup</h5>
                            </div>
                        </center>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form id="sfrm" action="index-submitpage.php" method="post">
                    <div class="modal-body">
                        <!--user id-->
                        <div class="form-group">
                            <label class="font-weight-bold">Id: </label><span class="text-info font-weight-bold" id="res"><img src="pics/loading-ttcredesign.gif" id="waitt" width="20px" height="20px"></span>
                            <input type="email" required class="form-control" autofocus name="suid" id="suid" autocomplete="off" placeholder="xyz@gmail.com">
                        </div>
                        <!--<button type="button" class="btn btn-primary" id="checkuid" name="checkuid">SUBMIT</button>-->
                        <div>
                            <!--Name-->
                            <div class="form-group">
                                <label class="font-weight-bold">Name: </label>
                                <input type="text" required class="form-control" name="sname" id="sname" autocomplete="off" placeholder="Your Name">
                            </div>

                            <!--password-->
                            <div class="form-group form-check-password ">
                                <label class="font-weight-bold">Password:</label>
                                <span> <small id="messagepwd"></small></span>
                                <input type="password" class="form-control" placeholder="Atleast 8 characters:" pattern="(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*" name="spwd" id="spwd" required>
                                <input type="checkbox" onclick="showpasswords();" id="showpassword">Show password<br>
                            </div>
                            <!--mobile-->
                            <div class="form-group">
                                <label class="font-weight-bold">Mobile:</label><span><small id="messagemobile"></small></span>
                                <input type="tel" class="form-control" name="smobile" id="smobile" type="smobile" placeholder="78xxxxxxxx" required pattern="[6-9]{1}[0-9]{9}" maxlength="10" autocomplete="off">
                            </div>
                            <!--buttons-->
                            <br>
                            <!--<small class="text-muted">We will send you a text to verify your phone. <br>Message and Data rates may apply.</small>-->
                            <center>
                                <h4 class="text-success" id="signupmessage"></h4>
                            </center>
                        </div>
                    </div>
                    <div class="modal-footer" style="background-color: aliceblue;">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary" name="submit">SIGNUP</button>
                    </div>
                </form>
                <div style="background-color: aliceblue;">
                    <center>
                        <h6>Already have an account? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal" class="text-info">Login Here</a></h6>
                    </center>
                </div>

            </div>
        </div>
    </div>

    <!--Login-Model-->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="modalbodyy">
                <div class="modal-header" style="background-color: aliceblue;">
                    <div class="modal-title" id="signupTitle">
                        <h5>Login</h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="lfrm">
                        <!--login id-->
                        <div class="form-group">
                            <label class="font-weight-bold">Id:</label>
                            <input type="email" required class="form-control" autofocus id="luid" name="luid" placeholder="xyz@gmail.com">
                        </div>
                        <!--password-->
                        <div class="form-group">
                            <label class="font-weight-bold">Password:</label><span class="float-right">
                                <!--<a href="#" class="text-info" style="text-decoration:none" id="fetchpwd" name="fetchpwd">Forgot Password</a>-->
                                <a href="#" class="text-info" id="pwdsms" name="pwdsms">Forgot Password</a>

                            </span>
                            <input type="password" required class="form-control" id="lpwd" name="lpwd" placeholder="Atleast 8 characters" >
                            <input type="checkbox" onclick="showpasswordl();">Show password<br>
                        </div>
                        <!--Hidden name-->
                        <input type="hidden" id="hdnname" name="hdnname">
                        <!--<small id="smsmsg" name="smsmsg" class="text-warning" style="font-size:10px">Password will be sent on your mobile no between 9:00 to 21:00 hrs.</small>-->

                        <center>
                            <div class="text-info" id="loginresponse" name="loginresponse"></div>
                        </center>

                    </form>
                </div>
                <div class="modal-footer" style="background-color: aliceblue;">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
                    <button type="button" class="btn btn-primary" id="loginsave" name="loginsave">LOGIN</button>
                    <br>
                </div>
                <div style="background-color: aliceblue;">
                    <center>
                        <h6>Don't have an account? <a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal" class="text-info">Signup Here</a></h6>
                    </center>
                </div>
            </div>
        </div>
    </div>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
