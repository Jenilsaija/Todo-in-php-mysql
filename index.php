<?php include 'dbconfig.php'?>

<?php
    session_start();
     if (!isset($_SESSION['data'])) {
        header('location:Login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script>function logout() {alert("Logout sucesfull");}</script>
</head>
<body>

<div class="container py-5 h-100">
  <div class="row d-flex justify-content-left h-100">
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="addtask.php" method="POST">
          <div class="form-outline mb-4">
              <h1 class="form-header" for="form1Example13">Todo</h1>
          </div><hr/>
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Enter task</label>
            <input type="textarea" id="form1Example13" name="task"class="form-control form-control-sm" placeholder="Enter task" />
          </div>
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Remind date</label>
            <input type="date" id="form1Example14" name="rdate"class="form-control form-control-sm"  />
           </div>
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Remind time</label>
            <input type="time" id="form1Example15" name="rtime"class="form-control form-control-sm"  />
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-sm btn-block">Add</button><br/><br/>
        </form>
      </div>
      <div class="col-md-4 col-lg-3 col-xl-3 offset-xl-1">
        <div class="form-outline mb-4">
              <h1 class="form-header" for="form1Example13">Log out</h1>
          </div><hr/>
        <a href="logout.php"><button type="button" onclick="logout()"class="btn btn-primary btn-lg">Logout</button></a>
      </div>
  </div>
</div>

<div class="container">
  <div class="row d-flex justify-content-center">
    <div class="col-12 md-6">
      <table class="table table-striped">
          <thade class="thead-dark">
          <th scop="col">Task No.</th><th scop="col">Task</th><th scop="col">Remind_date</th><th scop="col">Remind_time</th><th scop="col">Status</th><th scop="col">Action</th>
          </thade>
          <tbody>
          <?php 
            $sql="SELECT * FROM tasks";
            $result=$conn->query($sql);
            if ($result->num_rows>0) {
              while ($row=$result->fetch_assoc()) {
                echo "<tr scop='row'><td>".$row["t_id"]."</td><td>".$row["task"]."</td><td>".$row["remind_date"]."</td><td>".$row["remind_time"]."</td><td>".$row["t_status"]."</td><td><a href='comtask.php?id=".$row['t_id']."'><buton class='btn btn-success btn-sm btn-block'type='button'>Complete</button></a>&nbsp<a href='deltask.php?id=".$row['t_id']."'><button type='button' class='btn btn-sm  btn-danger'>Delete</button></a></td></tr>";
              }
            }
            $conn->close(); 
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
</body>
</html>