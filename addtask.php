<?php include 'dbconfig.php'?>

<?php
    $task=$_POST['task'];
    $rdate=$_POST['rdate'];
    $rtime=$_POST['rtime'];

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error());
    }
    $sql = "INSERT INTO tasks(task,remind_date,remind_time,t_status)VALUES('$task','$rdate','$rtime','Pending')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close(); 
    header('location:index.php');
?> 