<?php
    include("connection.php");
    if(isset($_POST['add']) && !empty($_POST['contactNumber']) && !empty($_POST['dealerName']))
    { 
        $dealerName= trim($_POST['dealerName']);
        $contactNumber= trim($_POST['contactNumber']);
        $state= $_POST['state'];
        $district= $_POST['district'];

        $ret=mysqli_query($con,"select * from oxygen_cylinder_details where contactNumber='$contactNumber'");
        $count=mysqli_num_rows($ret);
        if ($count>0) {
            $_SESSION['oxygen_success_message'] = "You have already provided your details.";
            header("Location: index.php#oxygen_cylinder");
        } else {
            $sql= "insert into oxygen_cylinder_details(dealerName,contactNumber,state,district) value('$dealerName', '$contactNumber','$state','$district')";
            $query=mysqli_query($con, $sql);
            $_SESSION['oxygen_success_message'] = "<strong>Thank you !</strong> Patient now can call you directly if they require for a oxygen cylinder.";
            header("Location: index.php#oxygen_cylinder");
        }
    } else{ 
        header("Location: index.php");
    }
 
?>