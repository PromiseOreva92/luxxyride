<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="../lease/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../lease/bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="../lease/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <script src="../lease/jquery-ui-1.12.1/external/jquery/jquery.js" type="text/javascript"></script>
        <link href="../lease/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
        <script src="../lease/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
        
        
        <link href="Chart.js-2.9.3/dist/Chart.css" rel="stylesheet" type="text/css"/>
        <link href="Chart.js-2.9.3/dist/Chart.min.css" rel="stylesheet" type="text/css"/>
        
        
        <script src="Chart.js-2.9.3/dist/Chart.bundle.js" type="text/javascript"></script>
        <script src="Chart.js-2.9.3/dist/Chart.bundle.min.js" type="text/javascript"></script>
        <script src="Chart.js-2.9.3/dist/Chart.js" type="text/javascript"></script>
        <script src="Chart.js-2.9.3/dist/Chart.min.js" type="text/javascript"></script>        
        <style>
            #nav{
                background: #000;
                padding: 0px;
                height:800px;
                overflow-y: auto;
            } 
            #content{
                
            }  
            #optBtn{
                border: none;
                padding: 0px;
                background: none !important;
                display: none;
                color: #337AB7;
            }
            #close{
                display: none;
            }
            @media screen and (max-width:960px){
                #nav{
                    position: absolute;
                    z-index: 10;
                    left: -50%;
                } 
                #btnCon{
                    /*border-bottom: 1px solid #ccc;*/
                    padding: 10px;
                }
                #optBtn{
                    display: block;
                } 
                #close{
                    color:#fff;
                    display: block;
                    padding: 10px;
                    text-align: right;
                    cursor: pointer;
                }
            }
        </style>
        
        <script>
            function setPage(){
                width =screen.width;
                if(width<768){
                    document.getElementById('optBtn').style.display="block";
                    document.getElementById('menu').style.display="none";
                }else{
                    document.getElementById('optBtn').style.display="none";
                    document.getElementById('menu').style.left="0%";
                }
            }
            
            function showMenu(){
                    document.getElementById('nav').style.left="0%";                
            }
            function closeMenu(){
                    document.getElementById('nav').style.left="-50%";                
            }        
        </script>
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2" id="nav">
                    <ul class="nav nav-pills nav-stacked" id="menu">
                        <span class="fa fa-times" id="close" onclick="closeMenu()"></span>
                        <h3 style="color:white;text-indent:5px;"><span class="fa fa-user-circle-o"></span> <span style="font-size:12px;"><?php// echo $_SESSION['first']; ?></span></h3>                        
                        <li class="active"><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                        <li><a href="profile.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-user-circle"></span> Profile</a></li>
                        <li><a href="logout.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-arrow-circle-o-left"></span> Logout</a></li>
                    </ul> 
                    
                </div>
                
                <div class="col-sm-10" id="content">
                    <div class="row">
                        <div class="col-sm-8" id="btnCon">
                            <button class="fa fa-bars" id="optBtn" onclick="showMenu()"></button>
                        </div>
                    </div>                    
                    <div class="row" style="background: #fff;">
                        <div class="col-sm-12">
                            <div class="row" style="padding:15px;border-bottom:1px solid #ccc;box-shadow:0px 4px 4px #ccc; ">
                                <div class="col-sm-8"><h4>Admin</h4></div>
                                <div class="col-sm-3" style="color: #0062cc;"><h4><span class="fa fa-calendar"></span> <?php echo date('jS F Y ')?></h4></div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left:5px;">
                        <div class="col-sm-3">
                            <div class="row" style="border:1px solid #ccc;border-radius:10px;margin-top: 20px;padding:10px;background:#fff;">
                                <div class="col-sm-4" style="text-align: center;padding:10px 0px;background:#28A745;border-radius:5px">
                                    <span class="fa fa-users" style="font-size:3.5em;color:#fff;"></span>
                                </div> 
                                <div class="col-sm-8">
                                    <h4>Users</h4>
                                    <h5>0</h5>
                                </div>
                            </div>
                        </div> 
                        <div class="col-sm-1"></div>
                        <div class="col-sm-3">
                            <div class="row" style="border:1px solid #ccc;border-radius:10px;margin-top: 20px;padding:10px;background:#fff;">
                                <div class="col-sm-4" style="text-align: center;padding:10px 0px;background:#DC3545;border-radius:5px">
                                    <span class="fa fa-car" style="font-size:3.5em;color:#fff;"></span>
                                </div> 
                                <div class="col-sm-8">
                                    <h5>Registered Vehicles</h5>
                                    <h5>0</h5>
                                </div>
                            </div>
                        </div>                         
                    </div>
                    
                    
                    <div class="row" style="margin-top:10px;">
                        <div class="col-sm-4">
                            <canvas id="myChart" height="200"></canvas>
                        </div>
                    </div>
                    <script>                    
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
//        labels: ['Red', 'Blue', 'Yellow'],
          labels:[1,2,3,4,5,6],
        datasets: [{
            label: '',
            data: [12000, 19000, 30000,70000,60000,80000],
            backgroundColor: [
                'rgba(255, 99, 132, 1.0)',

            ],
            borderColor: [
                'rgba(255, 99, 132, 1.0)',
                'rgba(54, 162, 235, 1.0)',
                'rgba(255, 206, 86, 1.0)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {        
        
                xAxes: [{
                    categoryPercentage: 1.0,
                    barPercentage: 1.5,                        
                    gridLines: {
                        display:false
                    },
                    ticks: {
                        beginAtZero: true,
//                        display:false
                    }                    
                }],
                yAxes: [{
                    scaleLabel: {
                      display: true,

                    },  
                    ticks: {
                        beginAtZero: true,
//                        display:false
                    },                        
                    gridLines: {
                        drawBorder: false,
                        display:false,
                        color:'transparent'
                        
                        
                    }   
                }]        
        
            
        }
    }
});
</script>                    
    


                </div>
            </div>
        </div>

    </body>
</html>
