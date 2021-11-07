<?php
    error_reporting(0);
    define('__APP__', TRUE);
    
    include ("dbcon.php");
    include ("user_register.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Projekt Napredne tehnike projektiranja web servisa (open source, php)">
    <meta name="keywords" content="HTML, CSS, PHP, JavaScript">
    <meta name="author" content="Valentino Ključar">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/register.css">
    <title>Home</title>
</head>

<body>
    <header>
        <img src="./img/logo.png" alt="header">
    </header>
    <?php include 'menu.php';?>
    <div class="main">
        <div class="h-100">
            <div class="container" style="margin-top:20px">
                <div class="row justify-content-center pt-5">
                    <div class="col text-center">
                        <h2 class="display-3" style="padding: 10px 10px 10px 40px">Register</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-10 col-lg-6 h-100">
                        <div class="card mt-5">
                            <div class="card-body">
                                <form #authenticationForm="ngForm" class="form-signin" name="authenticationForm" method="POST">
                                    <input type="hidden" id="_action_" name="_action_" value="TRUE">
                                    <div class="text-center mb-4">
                                    </div>
                                    <div class="form-label-group mb-3">
                                        <input autocomplete="firstname" class="form-control email" name="firstname"
                                            placeholder="firstname" required type="firstname">
                                    </div>
                                    <div class="form-label-group mb-3">
                                        <input autocomplete="lastname" class="form-control email" name="lastname"
                                            placeholder="lastname" required type="lastname">
                                    </div>
                                    <div class="form-label-group mb-3">
                                        <input autocomplete="email" class="form-control email" name="email"
                                            placeholder="email" required type="email">
                                    </div>
                                    <div class="form-label-group mb-3">
                                        <input autocomplete="username" class="form-control email" name="username"
                                            placeholder="username" required type="username">
                                    </div>
                                    <div class="form-label-group">
                                        <input autocomplete="current-password" class="form-control pwd" name="password"
                                            placeholder="password" required type="password">
                                    </div>
                                    <div class="form-label-group">
                                    <select id="country" name="country">
                                        <?php
                                            $query = "SELECT * FROM country";
                                            $result = @mysqli_query($MySQL, $query);
                                            while($row = @mysqli_fetch_array($result)) {
                                                print '<option value="' . $row['country_id'] . '">' . $row['name'] . '</option>';
                                            }
                                        ?>  
                                    </select>
                                    </div>
                                    <div class="form-label-group">
                                    <select id="user" name="user">
                                        <?php
                                            $query = "SELECT * FROM user_type";
                                            $result = @mysqli_query($MySQL, $query);
                                            while($row = @mysqli_fetch_array($result)) {
                                                print '<option value="' . $row['user_type_id'] . '">' . $row['user_type_name'] . '</option>';
                                            }
                                        ?>  
                                    </select>
                                    </div>
                                    <div class="alert alert-danger mt-2" *ngIf="loginFailed" style="display: none;">
                                        Pogrešno ime ili lozinka
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block mt-3 signin"
                                        type="submit" name="submit" value="Submit">Register
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>TVZ-2021 VKljucar <a href="https://github.com/VKljucar/ntpws-project"><i class="fa fa-github"></i></a></p>
    </div>


</body>

</html>