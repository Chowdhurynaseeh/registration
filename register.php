<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <section class="vh-100 bg-image"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <form name="form" action="register.php" method="post">

                    <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" name="insti" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example1cg">Institute</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" value="" name="gmail" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" value="" name="password" class="form-control form-control-lg" />
                    <label class="form-label"  for="form3Example4cg">Password</label>
                    </div>

                    <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" value="" name="gender" class="form-control form-control-lg" />
                    <label class="form-label" for="form3Example4cdg">gender</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                    </div>

                    <div class="d-flex justify-content-center">
                    <button type="submit"
                        class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                        class="fw-bold text-body"><u>Login here</u></a></p>

                </form>
                <?php

                if(isset($_POST['insti']) && !empty($_POST['insti']) && isset($_POST['gmail']) && !empty($_POST['gmail']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['gender'])  && !empty($_POST['gender'])){
                    $college =  $_POST['insti'];
                    $gmail =  $_POST['gmail'];
                    $password =  $_POST['password'];
                    $gender =  $_POST['gender'];                
                    $sql = "INSERT INTO `admin`(`email`, `password`, `gender`, `college`) VALUES ('$gmail','$password','$gender','$college')";
                    define('DB_SERVER', 'localhost');
                    define('DB_USERNAME', 'root');
                    define('DB_PASSWORD', '');
                    define('DB_NAME', 'oesm');
                    
                    /* Attempt to connect to MySQL database */
                    $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
                    if(!empty($college) && !empty($gmail) && !empty($password) && !empty($gender)){
                        if ($conn->query($sql) === TRUE) {
                            echo "<script>alert('New record created successfully')</script>";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }

                }
                ?>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>