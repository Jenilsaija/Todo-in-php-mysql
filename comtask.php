<?php include 'dbconfig.php'?>
<?php
    $id=$_GET['id'];
    $sql='UPDATE tasks SET t_status="Completed" WHERE t_id='.$id;
    if ($conn->query($sql) === TRUE) {
        echo "Status updated";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
    header('location:index.php');
?>