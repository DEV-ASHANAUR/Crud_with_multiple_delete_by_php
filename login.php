<?php
    session_start();
    if(isset($_SESSION['ok'])){
        header("location:dashboard.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>      
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
        <!-- <link rel="stylesheet" href="css/main.css"> -->
    </head>
    <body>
        <div class="container mt-4">
            <a href="index.php" class="btn btn-primary">Back TO Home</a>
            <div class="row">
                <div class="col-md-6 m-auto">
                <h2 class="text-center text-primary mb-3">Login Here</h2>
                    <?php
                        if(isset($_GET['pass']) && $_GET['pass']==3){
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Username Or Password Is Incorrect!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <?php
                        }
                    ?>
                    <form action="auth.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" min="100000" max="999999" placeholder="Password">
                        </div>
                        <input type="submit" name="submit" class="btn btn-success" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>
        <!-- <script>
            function daTaTable() {
                $('#result-list').DataTable();
            };
            daTaTable();
        </script> -->
    </body>
</html>