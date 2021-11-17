<?php include ("user_register.php"); 

    print'
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
                                <form class="form-signin" name="authenticationForm" method="POST">
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
                                    <select id="country" name="country">';
                                            $query = "SELECT * FROM country";
                                            $result = @mysqli_query($MySQL, $query);
                                            while($row = @mysqli_fetch_array($result)) {
                                                print '<option value="' . $row['country_id'] . '">' . $row['name'] . '</option>';
                                            }
                                    print '
                                    </select>
                                    </div>
                                    <div class="form-label-group">
                                    <select id="user" name="user">';
                                            $query = "SELECT * FROM user_type";
                                            $result = @mysqli_query($MySQL, $query);
                                            while($row = @mysqli_fetch_array($result)) {
                                                print '<option value="' . $row['user_type_id'] . '">' . $row['user_type_name'] . '</option>';
                                            }
                                    print '
                                    </select>
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
        </div>';
        ?>
  