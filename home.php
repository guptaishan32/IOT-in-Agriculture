<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">
    <style>
        body {
            background-image: url(pics/green_house.jfif);
            background-size: cover;
            font-family: Times New Roman;
        }

        #signLoginBtn {
            position: absolute;
            top:50%;
            left: 40%;
        }

        #header {
            background-color: black;
            opacity: 0.6;
        }

        #htext {
            font-size: 4rem;
            padding: 10px;
            color: whitesmoke;
        }
        
        .modelhf{
            background-color:darkgreen; 
            opacity:0.5
        }

    </style>

    <script type="text/javascript">
        function showpasswords() {
            show = document.getElementById("spwd");
            if (show.type == "password")
                show.type = "text";
            else
                show.type = "password";
        }

        function showpasswordl() {
            show = document.getElementById("lpwd");
            if (show.type == "password")
                show.type = "text";
            else
                show.type = "password";
        }

    </script>
</head>

<body>
    <div class="container-fluid" id="header">
        <center id="htext">
            Greenhouse Monitoring
        </center>
    </div>

    <div id="signLoginBtn">
        <button class="btn btn-lg btn-outline-dark text-white" href="#" role="button" data-toggle="modal" data-target="#signup">SIGNUP</button>
        <button class="btn btn-lg btn-outline-dark text-white" href="#" role="button" data-toggle="modal" data-target="#login">LOGIN</button>
    </div>

    <br>

    <!-- Signup Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="signupTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="modalbodyy">
                <div class="modal-header modelhf">
                    <div class="modal-title" id="signupTitle" style="color:whitesmoke;">
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
                        <div id="signupshow" name="signupshow">
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
                            <br>
                            <center>
                                <h4 class="text-success" id="signupmessage"></h4>
                            </center>
                        </div>
                    </div>
                    <div class="modal-footer modelhf">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">CLOSE</button>
                        <button type="submit" class="btn btn-primary" id="signupsubmit" name="submit">SIGNUP</button>
                    </div>
                </form>
                <div class="modelhf">
                    <center>
                        <h6 style="color:whitesmoke;">Already have an account? <a href="#" data-toggle="modal" data-target="#login" data-dismiss="modal" class="text-warning">Login Here</a></h6>
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
                            <input type="email" required class="form-control" autofocus id="luid" name="luid" placeholder="xyz@gmail.com" autocomplete="off">
                        </div>
                        <!--password-->
                        <div class="form-group">
                            <label class="font-weight-bold">Password:</label><span class="float-right">
                                <!--<a href="#" class="text-info" style="text-decoration:none" id="fetchpwd" name="fetchpwd">Forgot Password</a>-->
                                <a href="#" class="text-info" id="pwdsms" name="pwdsms">Forgot Password</a>

                            </span>
                            <input type="password" required class="form-control" id="lpwd" name="lpwd" placeholder="Atleast 8 characters">
                            <input type="checkbox" onclick="showpasswordl();">Show password<br>
                        </div>
                        <!--Hidden name-->
                        <input type="hidden" id="hdnname" name="hdnname">

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

    <script src="js/jquery-1.9.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
