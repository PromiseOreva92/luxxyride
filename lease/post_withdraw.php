<?php       
            session_start();
            require_once '../include/incfile.php';
            $amount = mysqli_real_escape_string($link,$_POST['amount']);
            $address = mysqli_real_escape_string($link,$_POST['address']);
            $type="withdraw";
            $id= $_SESSION['id'];
            $email= $_SESSION['email'];
            $date=time();
            $status="pending";
            $query2 = "select wallet_balance from clients where email='$email'";
            $result2=$link->query($query2);
            $rw = mysqli_fetch_array($result2);
            $balance = $rw['main_balance'];
            $query="insert into transaction values(NULL,'$id','$type','$amount','$address','$date','$status')";
            

            if($balance>$amount){
                $result=$link->query($query);
?>
        <div class="alert alert-info" style="text-align:center;font-weight: bold;">
                    Request has been sent.
            <?php
                        require_once 'mail/admail.php';
                        mailClient($firstname, $lastname, $email); 
                        ?>
                    Request has been sent.
        </div>
        <?php
            }else{

          ?>
        <div class="alert alert-danger" style="text-align:center;font-weight: bold;">
                  Insufficient Funds
        </div>

            <?php    
            }


