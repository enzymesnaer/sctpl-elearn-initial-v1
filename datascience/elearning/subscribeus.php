<?php
include('dbconnect.php');
if($_POST["action_mail"] == "subscribeme"){
    
    $emailtosave = $_POST["subscribe_email"];
    $nametosave = $_POST["subscribe_name"];
    $contacttosave = $_POST["subscribe_contact"];
    $checkin = "SELECT * FROM enquiry_table WHERE email = '$emailtosave'";
    $res_checkin = mysqli_query($conn, $checkin);
    $totalresin = mysqli_fetch_array($res_checkin);
    if($totalresin > 0)
    {
        echo "<h3>You are already in our Subscription Box :)</h3>";
        echo "<script
        src='https://code.jquery.com/jquery-1.12.4.js'
        integrity='sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU='
        crossorigin='anonymous'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js'>
        </script> 
        <script>    
            $.cookie('subscribe', 1, { expires : 90 });
        </script>";    
       
    }else{

        $savein = "INSERT INTO enquiry_table (id,name,email,contact) values ('','$nametosave','$emailtosave', '$contacttosave')";
        
        $res_savein = mysqli_query($conn,$savein);
        if($res_savein > 0){
            echo "<h3>Thank you for subscribing us</h3>";
            echo "<script
            src='https://code.jquery.com/jquery-1.12.4.js'
            integrity='sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU='
            crossorigin='anonymous'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js'>
            </script> 
            <script>    
                $.cookie('subscribe', 1, { expires : 90 });
            </script>";    
        }else{
            echo "Error while saving".mysqli_error($conn);
        }
    }

}else{
    echo $_POST["action_mail"];
}
?> 