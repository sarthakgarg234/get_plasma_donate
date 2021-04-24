<?php 
    if(isset($_POST['search']) && !empty($_POST['cityName']))
    {   
        $cityName = filter_var($_POST['cityName'] , FILTER_SANITIZE_STRING);
        $servicesName = implode($_POST['services'] , ' OR ');
        $queryString = urlencode('verified '. $cityName. ' ('.filter_var($servicesName , FILTER_SANITIZE_STRING).' )');
        header('Location: https://twitter.com/search?q='.$queryString.'&f=live');
        
    } else{ 
        header("Location: index.php");
    }
 
?>