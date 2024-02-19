<?php
include('./connections/dbconnect.php');

// function selectTabel($table) {
// 	global $con;
    
//     $query = "select * from $tabel";

//     $report = mysqli_query($conn, $query);
//     $result = array();
//     while($queryreturn = mysqli_fetch_assoc($report)){
//         $result[] = $queryreturn;
//     }
//     return $result;
// }

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