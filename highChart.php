<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Sugar-Chart</title>

    <!--CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome-all.css">

 
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     
    
    <script src="js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="js/jquery-1.8.2.min.js"></script> 
    <script src="js/highcharts.js"></script>
    <script src="js/exporting.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    
    <!-- Optional JavaScript -->
    <script type="text/javascript">
        fetchdata();
      function fetchdata(){
	alert("index page function ");
            var options = {
                chart: {
                    
                    type: 'line',
                    marginRight: 130,
                    marginBottom: 25,
					shadow: true
                },
				title:{text:'Humidity level'},
				subtitle:{text:'@Mediassist'},
				 xAxis: {
					 title: { text: ''},
                      categories: []
						
                },  
				yAxis: {
					   	title: {text: '' }
                	   },
				tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
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
                series: [   
							{
							}
						]
            }
			
      alert(city);
	 var url = "getchart.php";
    $.getJSON(url,function(json)
          {
			  alert("ok");
			  alert(JSON.stringify(json));
				
		    options.xAxis.categories = json[0]['data'];
			 options.series[0].data = json[1]['data'];
			
			/*options.xAxis.categories = json[1]['data'];
			options.series[1].data = json[1]['data'];//to show more cols
			*/
			
			options.xAxis.title.text=json[0]['hval'];
				
				options.yAxis.title.text="Sugar Level";//json[1]['count'];
				
               
				options.series[0].name=json[1]['slevel'];
				
				/*options.series[1].name=json[1]['count'];
				*/
                
				
				//alert(json[1].data);
				
               // chart = new Highcharts.Chart(options);
			   $("#containerr").highcharts(options);
				
          }); 
			
			}

    </script>


</head>

<body style="background-color:aliceblue">
                
     
      
        
        <!--Tablet Version-->
       <!--  <div class="container-fluid">
            <div class="row">
                <div class="col-12 d-sm-block d-lg-none d-none" style="margin-top:70px">
                    <img src="pics/headermobile.jpg" id="desimg" class="img-fluid">
                </div>
                <div class="col-12 d-sm-block d-lg-none d-none">
                    <center><div id="infolines">Blood Pressure Chart</div></center>            
                </div>
            </div>
        </div>-->

    <br>
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-3">
               </div>
               <div class="col-12 col-md-6">
                   <div id="containerr" style="font-family:Adobe Garamond Pro Bold;"><h5>LOADING:</h5><br><h4>BREATH IN BREATH OUT</h4></div>
               </div>

           </div>
       </div>
    <br><br>
</body>
  
</html>
