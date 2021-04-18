<?php
    include("connection.php");
    if(isset($_POST['donate']))
    { 
        $checkCovid= $_POST['checkCovid'];
        $fname= trim($_POST['fname']);
        $emailAddress= trim($_POST['emailAddress']);
        $contactNumber= trim($_POST['contactNumber']);
        $bloodGroup= $_POST['bloodGroup'];
        $gender= $_POST['gender'];
        $state= $_POST['state'];
        $district= $_POST['district'];

        $ret=mysqli_query($con,"select * from donor_information where contactNumber='$contactNumber'");
        $count=mysqli_num_rows($ret);
        if ($count>0) {
            header("Location: index.php");
        } else {
            $sql= "insert into donor_information(checkCovid,fname,emailAddress,contactNumber,bloodGroup,gender,state,district) value('$checkCovid','$fname','$emailAddress', '$contactNumber', '$bloodGroup', '$gender', '$state','$district')";
            $query=mysqli_query($con, $sql);
            header("Location: index.php");
        }
    } else{ 
        header("Location: index.php");
    }
 
?>