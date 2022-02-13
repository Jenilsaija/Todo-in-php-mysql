<?php include 'dbconfig.php'?>
<?php
    $id=$_GET['id'];
    $sql='DELETE FROM tasks WHERE t_id='.$id;
    if ($conn->query($sql) === TRUE) {
        echo "Task Sucesfully Deleted";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
    header('location:index.php');
?>