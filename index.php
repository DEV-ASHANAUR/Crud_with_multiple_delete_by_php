<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Insert page</title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>      
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-6 m-auto">
                <h2 class="text-center text-primary mb-3">Student Information</h2>
                <h2 class="text-center text-primary mb-3"><a class="btn" href="login.php" target="_blank">Login</a></h2>
                    <?php
                        if(isset($_GET['sus']) && $_GET['sus']==1){
                            ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Data Successfully Inserted!</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            <?php
                        }
                    ?>
                    <form action="insert.php" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Student Name">
                        </div>
                        <div class="form-group">
                            <input type="number" name="roll" class="form-control" min="100000" max="999999" placeholder="Student Roll">
                        </div>
                        <div class="form-group">
                            <input type="number" name="reg" class="form-control" min="100000" max="999999" placeholder="Student Reg">
                        </div>
                        <div class="form-group">
                            <label for="dept">Department</label>
                            <select class="form-control" name="dept" id="">
                                <option value="">Select Your Department</option>
                                <option value="Computer">Computer</option>
                                <option value="RAC">RAC</option>
                                <option value="Power">Power</option>
                                <option value="Civil">Civil</option>
                                <option value="Electrical">Electrical</option>
                                <option value="Mechanical">Mechanical</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="dept">Shift</label>
                            <select class="form-control" name="shift" id="">
                                <option value="">Select Your shift</option>
                                <option value="Computer">1st</option>
                                <option value="RAC">2nd</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="mobile" class="form-control" placeholder="Student Mobile">
                        </div>
                        <input type="submit" name="submit" class="btn" value="submit">
                    </form>
                </div>
            </div>
        </div>

        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap4.min.js"></script>
        
    </body>
</html>