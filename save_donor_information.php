<?php
    include("connection.php");
    if(isset($_POST['donate']) && !empty($_POST['contactNumber']) && !empty($_POST['fname']))
    { 
        $checkCovid= $_POST['checkCovid'];
        $recoveredon= $_POST['recoveredon'];
        $fname= trim($_POST['fname']);
        $age= trim($_POST['age']);
        $emailAddress= trim($_POST['emailAddress']);
        $contactNumber= trim($_POST['contactNumber']);
        $bloodGroup= $_POST['bloodGroup'];
        $gender= $_POST['gender'];
        $state= $_POST['state'];
        $district= $_POST['district'];

        $ret=mysqli_query($con,"select * from donor_information where contactNumber='$contactNumber'");
        $count=mysqli_num_rows($ret);
        if ($count>0) {
            $_SESSION['donor_success_message'] = "You have already provided your details.";
            header("Location: index.php#find_a_donor");
        } else {
            $sql= "insert into donor_information(checkCovid,recoveredon,fname,age,emailAddress,contactNumber,bloodGroup,gender,state,district) value('$checkCovid', '$recoveredon', '$fname','$age','$emailAddress', '$contactNumber', '$bloodGroup', '$gender', '$state','$district')";
            $query=mysqli_query($con, $sql);
            $_SESSION['donor_success_message'] = "<strong>Thank you Donor !</strong> Patient now can call you directly if they require a covid plasma. Your contribution may help save a life.";
            header("Location: index.php#find_a_donor");
        }
    } else{ 
        header("Location: index.php");
    }
 
?>