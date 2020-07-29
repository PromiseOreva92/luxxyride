<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:../index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">         
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="../jquery-ui-1.12.1/jquery-ui.min.css" />
        <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>         
        <title></title>
        <style>
            #nav{
                background: #000;
                padding: 0px;
                height:650px;
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
            
            
.title-line {
	/*color: #ffd000;*/
	position: relative;
}

.title-line::after {
	background-color: #333;
	content: "";
	height: 2px;
	left: -60px;
	position: absolute;
	top: 10px;
	width: 50px;
}

.title-line::before {
	background-color: #333;
	content: "";
	height: 2px;
	position: absolute;
	right: -60px;
	top: 10px;
	width: 50px;
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
                        <!--<img src="users.png" alt="" style="width:70%;margin:20px 12%;"/>-->
                        <span class="fa fa-times" id="close" onclick="closeMenu()"></span>                        
                        <h3 style="color:white;text-indent:5px;"><span class="fa fa-user-circle-o"></span> <span style="font-size:12px;"><?php echo $_SESSION['firstname']; ?></span></h3>                                                
                        <li><a href="dashboard.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                        <li><a href="profile.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-user-circle"></span> Profile</a></li>
                        <li class="active"><a href="vehicles.php" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-car"></span> Add Vehicle</a></li>
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
                                <div class="col-sm-8"><h4>LuxxyRide</h4></div>
                                <!--<div class="col-sm-1"><h4><span class="fa fa-envelope"></span></h4></div>-->
                                <div class="col-sm-3" style="color: #0062cc;"><h4><span class="fa fa-calendar"></span> <?php echo date('jS F Y ')?></h4></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-8">
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8" style="text-align:center;color: #006acc;">
                                        <h3>REGISTER <span class="fa fa-edit"></span></h3>
                                        <span>Enter the registration details of your vehicle <span class="fa fa-car"></span></span>
                                    </div>
                                </div>
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8" id="status">
                                       
                                    </div>
                                </div>                                
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8">
                                        <select name="type" class="form-control" id="vehicle">
                                            <option disabled selected>----SELECT VEHICLE TYPE----</option>
                                            <option>Car</option>
                                            <option>Bus</option>
                                            <option>Heavy Duty</option>
                                        </select>
                                    </div>
                                </div>                             
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="BRAND" id="brand">
                                    </div>
                                </div>                    
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="CAR MODEL" id="model">
                                    </div>
                                </div>

                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="LICENSE NUMBER" id="license">
                                    </div>
                                </div> 
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" placeholder="VEHICLE REGISTRATION NUMBER" id="reg">
                                    </div>
                                </div> 
                                <div class="row" style="margin:5px 0px;">
                                    <div class="col-sm-8">
                                        <textarea id="info" class="form-control" placeholder="EXTRA INFORMATION ABOUT VEHICLE" style="resize: none;"></textarea>
                                    </div>
                                </div>                            
<!--                                <div class="row" style="margin:5px 0px;color:#006acc">
                                    <div class="col-sm-8 alert alert-light" style="padding-bottom:0px;">
                                        <span class="fa fa-warning"></span>  Please upload the scanned copy of your vehicle documents below
                                    </div>
                                </div>                             
                                <div class="row" style="margin:10px 0px;">
                                    <div class="col-sm-8">
                                        <input type="file" class="form-control-file">
                                    </div>
                                </div>                    -->
                                <div class="row" style="margin:10px 0px;">
                                    <div class="col-sm-8">
                                        <button id="subtn" type="button" onclick="check()" class="btn btn-primary">ADD VEHICLE</button>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    
                </div>
               
               
            </div>
        </div>
    </body>
</html>
<script>
brand = document.getElementById('brand');
model = document.getElementById('model');
license = document.getElementById('license');
reg = document.getElementById('reg'); 
vehicle = document.getElementById('vehicle'); 
info = document.getElementById('info'); 
function validate(){
   
    if(brand.value==""){
        message1 = "Brand Missing!!!<br>"
    }
    else{
        message1=""
    }
    if(model.value==""){
        message2 = "Model Missing!!!<br>"
    } 
    else{
        message2=""
    }    
    if(license.value==""){
        message3 = "License Missing!!!<br>"
    } 
    else{
        message3=""
    }    
    if(reg.value==""){
        message4 = "Registration No Missing!!!<br>"
    }
    else{
        message4=""
    }    
    msg = message1 + message2 + message3 + message4;
    if(msg!=""){
       document.getElementById('status').innerHTML = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+msg+"</div>" 
    }else{
        document.getElementById('status').innerHTML="";
    }
}
function check(){
   
    if(brand.value==""){
        message1 = "Brand Missing!!!<br>"
    }
    else{
        message1=""
    }
    if(model.value==""){
        message2 = "Model Missing!!!<br>"
    } 
    else{
        message2=""
    }    
    if(license.value==""){
        message3 = "License Missing!!!<br>"
    } 
    else{
        message3=""
    }    
    if(reg.value==""){
        message4 = "Registration No Missing!!!<br>"
    }
    else{
        message4=""
    }    
    msg = message1 + message2 + message3 + message4;
    if(msg!=""){
       document.getElementById('status').innerHTML = "<div class='alert alert-danger alert-dismissible'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>"+msg+"</div>" 
    }else{
        post_data();
        }
}
brand.addEventListener('keypress',validate)
model.addEventListener('keypress',validate)
license.addEventListener('keypress',validate)
reg.addEventListener('keypress',validate)

function post_data(){
                var xmlhttp;
                if(window.XMLHttpRequest){
                                xmlhttp = new XMLHttpRequest();// object for updates

                        }
                else{
                                xmlhttp = new ActiveObject("Microsoft.XMLHTTP");
                        }
    xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                        if(xmlhttp.responseText=='success'){
                            location.href="lease/dashboard.php"
                        }
                        else{
                            document.getElementById("status").innerHTML = xmlhttp.responseText;

                        }


                    }//end if		
            }

    data="brand="+brand.value+"&model="+model.value+"&license="+license.value+"&reg="+reg.value+"&vehicle="+vehicle.value+"&info="+info.value;
    alert(data)
    xmlhttp.open('POST','reg_vehicle.php',true);// open the file
    xmlhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    xmlhttp.send(data); //send the parameters



}    

</script>
