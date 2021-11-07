<?php include ("user_login.php"); ?>
<?php
print'
        <div class="h-100">
            <div class="container">
                <div class="row justify-content-center pt-5">
                    <div class="col text-center">
                        <h2 class="display-3">Login</h2>
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
                                        <input autocomplete="username" class="form-control email" name="username"
                                            placeholder="username" required type="username">
                                    </div>
                                    <div class="form-label-group">
                                        <input autocomplete="current-password" class="form-control pwd" name="password"
                                            placeholder="password" required type="password">
                                    </div>
                                    <div class="alert alert-danger mt-2" *ngIf="loginFailed" style="display: none;">
                                        Pogrešno ime ili lozinka
                                    </div>
                                    <button class="btn btn-lg btn-primary btn-block mt-3 signin"
                                        type="submit" name="submit" value="Submit">login
                                        <span class="spinner-border spinner-border-sm" role="status"
                                            aria-hidden="true"></span>
                                    </button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center" style="text-align: center;position: relative;bottom: 180px;">
                <a class="register" href="index.php?menu=7" style="font-size: 11px; text-decoration: none;"><h2 class="display-3" >Register</h2></a>
            </div>
        </div>';
?>
    