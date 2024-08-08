<?php

require 'connection.php';
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body{
            background-color: rgb(236, 236, 236);
        }
        label {
            display: flex;
        }
    </style>
</head>

<body>
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
              background-image: url(hero3.jpg);
              height: 300px;
              "></div>
        <!-- Background image -->

        <div class="card shadow-5-strong" style="
              margin-top: -100px;           
              width: 600px;
              margin-left: 30rem;
              ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Welcome Teacher!</h2>
                        <form action="loginteacher.php" method="post">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="admin-userid">User ID</label>
                                <input name="username" type="text" id="admin-userid" class="form-control" />

                            </div>

                            <div class="form-outline mb-4">
                                <label class="form-label" for="admin-pass">Password</label>
                                <input name="password" type="password" id="admin-pass" class="form-control" />

                            </div>

                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Login
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>



<?php

// By default the variables for login and error are false that means the user is not logged in and there is no error
$login = false;
$showError = false;

// Check if the request method of the form is post
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Includes the db connect file that contains the connectivity for the database.
    

    // Taking input and assigning variables to it
    $username = $_POST["username"];
    $password = $_POST["password"];

    // This is done to remove any unanted charachter that might break the code in the future. It removes all the special chars.
    $username = mysqli_real_escape_string($conn, $username);

    // The query that is to be executed.
    $sql = "SELECT * FROM teacher where username='$username'";

    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    // Only if there is one entry with the given username only then check the password. This reduces the chance of sql injections. 
    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($password == $row['pass']) {
                $login = true;

                // Starting the session and storing the required variables in the associative array
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                
                

                // Once logged in the user is redirected to the page given below
                header("location: teachers/");
            }

            // Show error if the password is incorrect.
            else {
                $showError = "Invalid Credentils";
            }
        }
    } else {
        $showError = "Invalid Credentils";
    }
}

?>