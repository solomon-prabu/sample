<?php

include '../config/config.php';


if(isset($_POST['new_record'])){

    $d_name = $_POST['department_name'];
    $m_id = $_POST['manager_id'];
    $l_id = $_POST['location_id'];

    $sql = "INSERT INTO departments (department_name,manager_id,location_id) VALUES ('$d_name','$m_id', '$l_id')";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location:../index.php');
    }else{
        echo "error";
    }

}



if(isset($_POST['update_record'])){

    $d_id = $_POST['department_id'];
    $d_name = $_POST['department_name'];
    $m_id = $_POST['manager_id'];
    $l_id = $_POST['location_id'];

    $sql = "UPDATE departments SET department_name = '$d_name', manager_id = '$m_id', location_id = '$l_id' WHERE department_id = $d_id"; 
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location:../index.php');
    }else{
        echo "error";
    }
}



if(isset($_GET['ID'])){

    $d_id = $_GET['ID'];

    $sql = "DELETE FROM departments WHERE department_id = $d_id";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        header('location:../index.php');
    }else{
        echo "error";
    }
}

?>