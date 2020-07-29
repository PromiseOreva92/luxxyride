<?php
session_start();
ob_start();
if($_SESSION['email']==""){
    header("location:../index.php");
}
$id = $_SESSION['ownerid'];
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
                background: rgba(0,0,0,0.9);
                padding: 0px;
                height:650px;
                overflow-y: auto;
                
            }
/*            #con{
               height:650px;
               background: url('../assets/img/funfact-bg1.jpg');
               background-size: cover;
               background-position-x: 30%;
            }*/
            #content{
                background: #F4F6F9;
                height:650px;
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
                        <h3 style="color:white;text-indent:5px;margin-bottom: 40px"><span class="fa fa-user-circle-o"></span> <span style="font-size:12px;"><?php// echo $_SESSION['first']; ?></span></h3>                                                
                        <li class="active"><a href="#" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-dashboard"></span> Dashboard</a></li>
                        <li><a href="#" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-user-circle"></span> Profile</a></li>
                        <li><a href="#" style="font-weight:bold;font-family:sans-serif"><span class="fa fa-car"></span> Add Vehicle</a></li>
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
                                <div class="col-sm-3" style="color: #0062cc;"><h4><span class="fa fa-calendar"></span> <?php echo date('jS F Y')?></h4></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <form method="post" class="col-sm-5" style="margin-left:10px;margin-top:20px; background: #fff;">
                            <div class="row">
                                <div class="alert alert-danger">
                                    <!--<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>-->
                                    <strong>Please Complete Your Registration to access Dashboard!!!</strong>
                                </div>
                            </div>
                            <div class="row" style="border-radius:10px;margin-top: 10px;padding:10px;">
                                <input type="text" class="form-control" placeholder="Your First Name Here" name="firstname">
                            </div>
                            
                            <div class="row" style="border-radius:10px;margin-top: 10px;padding:10px;">
                                <input type="text" class="form-control" placeholder="Your Last Name Here" name="lastname">
                            </div>
                            <div class="row" style="border-radius:10px;margin-top: 10px;padding:10px;">
                                <input type="text" class="form-control" placeholder="Your Phone Number Here" name="phone">
                            </div>                            
                            <div class="row" style="border-radius:10px;margin-top: 10px;padding:10px;">
                                <input type="text" class="form-control" placeholder="Your Address Here" name="address">
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-4">
                                    <button name="complete" type="submit" class="btn btn-success">Complete Registration</button>
                                </div>
                            </div>

                        </form>
                        
                        <?php
                            if(isset($_POST['complete'])){
                                require '../inc/includes.php';
                               $firstname =  mysqli_real_escape_string($link,$_POST['firstname']); 
                               $lastname =  mysqli_real_escape_string($link,$_POST['lastname']); 
                               $phone =  mysqli_real_escape_string($link,$_POST['phone']);
                               $address =  mysqli_real_escape_string($link,$_POST['address']); 
                               $login=  time();
                               $query = "update owners set firstname='$firstname',lastname = '$lastname',phone='$phone', address='$address', status = '1',last_login='$login' where owner_id ='$id'";
                               if(mysqli_query($link, $query)){
                                    $query2 = "select * from owners where owner_id = '$id'";
                                    $result = mysqli_query($link, $query2);
                                    $row = mysqli_fetch_array($result);
                                    $_SESSION['username']=$row['username'];
                                    $_SESSION['lastname']=$row['lastname'];
                                    $_SESSION['firstname']=$row['firstname'];
                                    $_SESSION['email']=$row['email'];
                                    $_SESSION['phone']=$row['phone'];
                                    $_SESSION['address']=$row['address'];
                                    $_SESSION['password']=$row['password'];  
                                    $_SESSION['status']=$row['status'];   
                                    header("location:dashboard.php");
                                   
                               }
                               
                            }
                        
                        ?>
                         
                        
                    </div> 
                    
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

