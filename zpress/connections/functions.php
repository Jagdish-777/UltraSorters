<?php
include('dbconnect.php');

// include('./includes/connect.php');
function selectProduct($table,$name){
    global $con;

    $query = "select * from $table where product_name='$name'";
    $report = mysqli_query($con, $query);
    $result = array();
    while($queryreturn = mysqli_fetch_assoc($report)){
        $result[] = $queryreturn;
    }
    return $result;

}
?>