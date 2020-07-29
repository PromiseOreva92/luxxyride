<?php
require 'inc/includes.php';
	 if($link=mysqli_connect($host,$user,$password,$database)){
		$name = mysqli_real_escape_string($link,$_POST['username']);
                $name=  str_replace("^", "&", $name);
		$email = mysqli_real_escape_string($link,$_POST['email']);
                $email=  str_replace("^", "&", $email);
		$pwd = mysqli_real_escape_string($link,$_POST['psw']);
                $pwd=  str_replace("^", "&", $pwd);
                $status=0;
                
                $query="insert into owners values(NULL,'','','$name','$pwd','$email','','$status')";
                
                if(mysqli_query($link, $query)){
                    ?>
<div class="alert alert-success alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Registration Successful!!!</strong>
</div>
<?php
                }
                else{
                    ?>
<div class="alert alert-danger alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Registration Failed!!!</strong>
</div>
<?php
                }
                
                
         }


