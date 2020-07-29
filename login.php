<?php
require 'inc/includes.php';
	 if($link=mysqli_connect($host,$user,$password,$database)){
		$email = mysqli_real_escape_string($link,$_POST['email']);
                $email=  str_replace("^", "&", $email);
		$pwd = mysqli_real_escape_string($link,$_POST['psw']);
                $pwd=  str_replace("^", "&", $pwd);
                
                $query="select * from owners where email = '$email' and password='$pwd'";
                $result = mysqli_query($link, $query);
                
                if(mysqli_num_rows($result) > 0){
                    $row = mysqli_fetch_array($result);
                    session_start();
                    $_SESSION['ownerid']=$row['owner_id'];
                    $_SESSION['username']=$row['username'];
                    $_SESSION['lastname']=$row['lastname'];
                    $_SESSION['firstname']=$row['firstname'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['phone']=$row['phone'];
                    $_SESSION['address']=$row['address'];
                    $_SESSION['password']=$row['password'];  
                    $_SESSION['status']=$row['status']; 
                    $login=  time();
                    $query2 = "update owners set last_login='$login' where owner_id ='".$_SESSION['ownerid']."'";
                    mysqli_query($link, $query2);
                    echo 'success';
                    
                }  
                else {
                    ?>
        <div class="alert alert-dark alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User not found!!!</strong>
        </div>
<?php
                }
         }

