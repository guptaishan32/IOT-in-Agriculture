<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>High charts</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body>
     <!--Header image-->
        <!--Desktop Version-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 d-sm-none d-none d-lg-block">
                        <center><div id="infolines">Moisture Level</div></center>
                </div>
            </div>
        </div>

    <br>
   <!-- <div class="form-group form-inline justify-content-center" style="font-family:Adobe Garamond Pro Bold">
          <label class="col-sm-auto"><h4>Patient Id: </h4></label><input type="text" class="form-control col-sm-3" name="pid" id="pid" required value="<?php echo $_SESSION["uid"]; ?> "  readonly> 
    </div>-->
    <br>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <div id="container" style="font-family:Adobe Garamond Pro Bold;"><h5>LOADING:</h5></div>
               </div>

           </div>
       </div>
    <br><br>

    <!--<div id="container" style="width:100%; height:400px;"></div>-->

    <script type="text/javascript">
        $(document).ready(function(){
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'line'
                },
				title:{text:'Moisture graph'},
				//subtitle:{text:'@Medicare'},
                xAxis: {
					 title: { text: ''},
                      categories: []
						
                }, 
                yAxis: {
					   	title: {text: '' },
                        categories: []
                	   },
                tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                            ; return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
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
					borderRadius:5,
					enabled:true,
					itemHoverStyle: 
					{
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
                
                options.xAxis.title.text='TimeStamp';
				
				options.yAxis.title.text="Moisture Level";//json[1]['count'];
                
                options.series[0].name="Moisture Graph";
                
                var chart = new Highcharts.Chart(options);
                // $("#container").highcharts(options);
            });
        });

    </script>
</body>
<script src="js/jquery-1.9.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>

</html>
