<?php
  session_start();
  include 'Main.php';
  $obj = new Main();
  $data = $obj->show();
  if(!isset($_SESSION['ok'])){
    header("location:login.php");
}
    
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Dashboard</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>      
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
        <!-- <link rel="stylesheet" href="css/main.css"> -->
    </head>
    <body>
        <div class="container mt-5">
          <h2 class="text-center mb-3">Student List</h2>
          <h2 class="text-center mb-3"><span>Hi </span><span><?php echo $_SESSION['ok'];?></span></h2>
          <h2 class="text-center mb-3"><a class="btn btn-danger" href="logout.php?logout=1">Logout</a></h2>
          <?php
              if(isset($_GET['del']) && $_GET['del']==1){
                  ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong class="text-center">Deleted Successfully!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                  <?php
              }
          ?>
          <?php
              if(isset($_GET['count'])){
                  ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong class="text-center"><?php echo $_GET['count']; ?> Item Deleted Successfully!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                  <?php
              }
          ?>
          <?php
              if(isset($_GET['error'])){
                  ?>
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong class="text-center">First Select Any checkbox!</strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                  <?php
              }
          ?>
          <form action="mul_delete.php" method="post">
          <input type="submit" class="btn btn-danger mb-2" name="submit" value="Delete">
          <table class="table table-striped">
              <thead>
                <tr>
                  <th>Si No</th>
                  <th>Name</th>
                  <th>Roll</th>
                  <th>Reg</th>
                  <th>Department</th>
                  <th>Shift</th>
                  <th>Mobile</th>
                  <th>Select</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
              if($data->num_rows>0){
                  $si =1;
                while($row = $data->fetch_object()){
                  ?>
                <tr>
                  <td><?php echo $si;?></td>
                  <td><?php echo $row->name;?></td>
                  <td><?php echo $row->roll;?></td>
                  <td><?php echo $row->reg;?></td>
                  <td><?php echo $row->dept;?></td>
                  <td><?php echo $row->shift;?></td>
                  <td><?php echo $row->mobile;?></td>
                  <td>
                      <input type="checkbox" name="idd[]" value="<?php echo $row->id;?>">
                  </td>
                  <td><a href="#" class="btn btn-primary">Edit</a></td>
                  <td><a onclick="javascript:return confirm('Are You Sure!');" href="delete.php?id=<?php echo $row->id;?>" class="btn btn-danger">Delete</a></td>
                </tr>
                
                  <?php
                  $si++;
                }
                
              }
              ?>
               
              </tbody>
          </table>
              
          </form> 
        </div>
        <!-- footer -->
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>
    </body>
</html>