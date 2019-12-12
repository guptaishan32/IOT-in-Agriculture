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
    <title>Data Representation</title>
    <!--<meta http-equiv="refresh" content="5">-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="js/highcharts.js"></script>
</head>

<body>
    <!--Header image-->
    <!--Desktop Version-->
    <!--Desktop Header-->
    <div id="headerinfoline1" class="fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 d-sm-none d-none d-lg-block" style="margin-top:20px" id="headername">
                    <center>
                        IOT based Greenhouse Monitoring
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
                            <h4>IOT based Greenhouse Monitoring</h4>
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
                            <div><a href="showData.php" class="text-dark" value="home">Home</a></div>
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
                            <h1>IOT based Greenhouse Monitoring</h1>
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
                                <div><a href="showData.php" class="text-dark" value="home">
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


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 d-sm-none d-none d-lg-block">
                <center>
                    <div id="infolines">Dashboard</div>
                </center>
            </div>
        </div>
    </div>


    <br>
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
                    <div id="infolines">Soil Moisture Graph</div>
                </center>
            </div>
        </div>
    </div>
    <br>

    <!--Soil moisture graph-->
    <div class="container-fluid" style="font-family:Adobe Garamond Pro Bold" ;>
        <div class="row">
            <div class="col-12 col-md-6">
                <div id="container">
                    <h5>LOADING:</h5>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div style="font-size:20px">
                    <br>
                    <h5><b>Summary</b></h5>
                    <br>
                    <ul>
                        <li>
                            Soil Moisture sensor measures volumetric content of water with the help of two probes which determines dielectrical permissiveness.
                        </li>
                        <li>
                            Current is passed through the soil from the probes and the resistance value is used to measure the moisture value.
                        </li>
                        <li>
                            Hence a decrease in the moisture in the soil, result in increase in total and the cycle repeats.
                        </li>
                    </ul>
                </div>
                <a href="showSoilMoisture.php" class="btn btn-outline-info">Show Data</a>
        
            </div>
           
        </div>
    </div>
    <br><br>

    <!--Soil Moisture graph-->
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'line'
                },
                title: {
                    text: 'Soil Moisture graph'
                },
                //subtitle:{text:'@Medicare'},
                xAxis: {
                    title: {
                        text: ''
                    },
                    categories: []

                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    categories: []
                },
                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.x + ': ' + this.y;;
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.x + ': ' + this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'center',
                    x: 10,
                    y: 100,
                    borderWidth: 0,
                    backgroundColor: 'yellow',
                    borderColor: '#C98657',
                    borderWidth: 3,
                    borderRadius: 5,
                    enabled: true,
                    itemHoverStyle: {
                        color: '#FF0000',
                    }
                },
                series: [{}]
            };
            $.getJSON('data.php', function(json) {
                //alert("ok");
                //alert(JSON.stringify(json));
                //alert(json[1]['data']);
                options.xAxis.categories = json[0]['data'];
                options.series[0].data = json[1]['data'];
                /*options.series[1].data = json[1]['data'];*/

                options.xAxis.title.text = 'TimeStamp';

                options.yAxis.title.text = "Moisture Level"; //json[1]['count'];

                options.series[0].name = "Soil Moisture Graph";

                var chart = new Highcharts.Chart(options);
                // $("#container").highcharts(options);
            });
        });

    </script>

       <!--Temp humidity graph-->
    <script type="text/javascript">
        $(document).ready(function() {
            var options = {
                chart: {
                    renderTo: 'container2',
                    type: 'line'
                },
                title: {
                    text: 'Temp Humidity graph'
                },
                //subtitle:{text:'@Medicare'},
                xAxis: {
                    title: {
                        text: ''
                    },
                    categories: []

                },
                yAxis: {
                    title: {
                        text: ''
                    },
                    categories: []
                },
                tooltip: {
                    formatter: function() {
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.x + ': ' + this.y;;
                        return '<b>' + this.series.name + '</b><br/>' +
                            this.x + ': ' + this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'center',
                    x: 10,
                    y: 100,
                    borderWidth: 0,
                    backgroundColor: 'yellow',
                    borderColor: '#C98657',
                    borderWidth: 3,
                    borderRadius: 5,
                    enabled: true,
                    itemHoverStyle: {
                        color: '#FF0000',
                    }
                },
                series: [{},{}]
            };
            $.getJSON('tempdata.php', function(json) {
                //alert("ok");
                //alert(JSON.stringify(json));
                //alert(json[1]['data']);
                options.xAxis.categories = json[0]['data'];
                options.series[0].data = json[1]['data'];
                options.series[1].data = json[2]['data'];

                options.xAxis.title.text = 'TimeStamp';

                options.yAxis.title.text = "Moisture Level"; //json[1]['count'];

                options.series[0].name = "Humidity Perc";
                options.series[1].name = "Temperature";

                var chart = new Highcharts.Chart(options);
                // $("#container").highcharts(options);
            });
        });

    </script>
   
   <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 d-sm-none d-none d-lg-block">
                <center>
                    <div id="infolines">Temp Humidity Graph</div>
                </center>
            </div>
        </div>
    </div>
    <br>
   
    <!--Temp humidity sensor-->
    <div class="container-fluid" style="font-family:Adobe Garamond Pro Bold" ;>
        <div class="row">
            <div class="col-12 col-md-6">
                <div style="font-size:20px">
                    <br>
                    <h5><b>Summary</b></h5>
                    <br>
                    <ul>
                        <li>
                           These are generally second standard components to quantify humidity and for checking fever that can basically be a thermistor.
                        </li>
                        <li>
                           There is an IC that assists to secure the readings prepared for the micro-controller.
                        </li>
                        <li>
                            The humidity will be managed by measuring the conductivity of a fluid bacterium that affects the shift in humidity.
                        </li>
                        <li>
                            The warmth will be calculated by using a thermostat. Thermistor is actually a factor resistor which has a resistance that changes with fever.
                        </li>
                    </ul>
                </div>
                <a href="showTempHumidityData.php" class="btn btn-outline-info">Show Data</a>
            </div>
            <div class="col-12 col-md-6">
                <div id="container2">
                    <h5>LOADING:</h5>
                </div>
            </div>
        </div>
    </div>
    <br>
</body>
<script src="js/jquery-1.9.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>

</html>
