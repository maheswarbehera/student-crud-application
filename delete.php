<?php
    include "db_connect.php";

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE from `student` WHERE id = $id";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            header('location: dashboard.php');
            //echo "Deleted successfully";
        }
        // else{
        //     echo "unable to delete".mysqli_connect_error();
        // }
    }
?>