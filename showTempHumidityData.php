<?php
    session_start();
    if(isset($_SESSION["uid"])==false)
    {
        header("location:index.php");
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Temp data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript">
     var myapp = angular.module("app", []);
        myapp.controller("mycontroller", function($scope, $http) {
            $scope.json;
            $scope.doFetchJson= function() {
                /*alert();*/
                
                $http.get("fetchTempData.php").then(ok, notok);
                    
                function ok(jsonArray) {
                    //alert(JSON.stringify(jsonArray.data));
                    $scope.json = jsonArray.data;
                    
                }

                function notok(jsonArray) {
                    alert(jsonArray.data);
                }
            }
            

        });
            

       </script>
</head>

<body ng-app="app" ng-controller="mycontroller" ng-init="doFetchJson()">
    <!--Header image-->
    <!--Desktop Version-->
    <!--Desktop Header-->
    <div id="headerinfoline1" class="fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 d-sm-none d-none d-lg-block" style="margin-top:20px" id="headername">
                    <center>
                        IOT based smart Greenhouse  Monitoring
                    </center>
                </div>
                <div class="col-lg-3 d-sm-none d-none d-lg-block float-right" id="headerid">
                    <div style="margin-top:10px; margin-left:150px">
                        <h6>Welcome: <?php echo $_SESSION["name"]; ?> </h6>
                    </div>
                    <div class="d-lg-inline-flex float-right" style="margin-right:20px">
                        <div><a href="showData.php" class="text-primary" value="home">
                                <h5>Home</h5>
                            </a></div>
                        &emsp;
                        <div><a href="logout.php" class="text-danger" value="logout">
                                <h5>Logout</h5>
                            </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Mobile Header-->
    <div class="fixed-top">
        <div id="headerinfolinem">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 d-block d-sm-none float-right" style="margin-top:7px">
                        <center>
                            <h4>IOT based smart Greenhouse  Monitoring</h4>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div id="headerinfoline">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 d-block d-sm-none">
                        <div style="font-size:13px; margin-top:10px">Welcome:<?php echo $_SESSION["name"]; ?></div>
                    </div>
                    <div class="col-4 d-block d-sm-none float-left">
                        <div class="d-inline-flex d-block d-sm-none" style="font-size:12px; margin-top:10px">
                            <div><a  href="showData.php" class="text-dark" value="home">Home</a></div>
                            &nbsp;&nbsp;
                            <div><a href="logout.php" class="text-danger" value="logout">Logout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Tablet Version-->
    <div class="fixed-top">
        <div id="headerinfolinem">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 d-sm-block d-lg-none d-none float-right" style="margin-top:7px">
                        <center>
                            <h1>IOT based Greenhouse  Monitoring</h1>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div id="headerinfoline">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8 d-sm-block d-lg-none d-none">
                        <div style="font-size:15px; margin-top:10px; margin-right:10px">
                            <h4>Welcome: <?php echo $_SESSION["name"]; ?></h4>
                        </div>
                    </div>
                    <div class="col-4 d-sm-block d-lg-none d-none">
                        <center>
                            <div class="d-sm-inline-flex d-sm-block d-lg-none d-none" style="font-size:15px; margin-top:10px">
                                <div><a  href="showData.php" class="text-dark" value="home">
                                        <h4>Home</h4>
                                    </a></div>
                                &nbsp;&nbsp;
                                <div><a href="logout.php" class="text-danger" value="logout">
                                        <h4>Logout</h4>
                                    </a></div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>

    <div class="form-group form-inline justify-content-center" style="font-family:Adobe Garamond Pro Bold">
        <label class="col-sm-auto">
            <h4>User Id: </h4>
        </label><input type="text" class="form-control col-sm-3" name="pid" id="pid" required value="<?php echo $_SESSION["uid"]; ?> " readonly>
    </div>
    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 d-sm-none d-none d-lg-block">
                <center>
                    <div id="infolines">Temp Humidity Data</div>
                </center>
            </div>
        </div>
    </div>
    <br>
    
     <div class="container">
      <div class="row">
         <div class="col-sm-4"></div>
          <div class="col-sm-4 d-none d-sm-block" style="font-family:Adobe Garamond Pro Bold;">
      <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Temperature</th>
      <th scope="col">Humdity perc</th>
    </tr>
  </thead>
  <tbody>
<tr style="font-size:20px" ng-repeat="record in json | filter:hint">
                <td>{{record.Time}}</td>
                <td>{{record.temp}} C</td>
                <td>{{record.humidity}} C</td>
    </tr>
  </tbody>
</table>
    </div>
          </div></div>

  
</body>
<script src="js/jquery-1.9.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

</html>
