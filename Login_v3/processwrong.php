<?php
    include "connection.php";

    $sql = "select * from trialprof";
    $result = mysqli_query($conn, $sql); 
?> 

<?php
    $flag = 1;
    while($row = mysqli_fetch_object($result)) {
    if($_POST["username"] == $row->user && $_POST["pass"] == $row->pass) { 
    
    header("Location: home.html");
       
 
    $flag = 0;
    
    exit;
    }

    } 
    
    if($flag == 1)
    {
    header("Location: indexwrong.html");
    exit;
    }   
    ?>