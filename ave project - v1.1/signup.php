<?php
    $pageName = "SIGN UP";
    require_once "includes/head.php";
    echo '<link rel="stylesheet" href="css/custom.css"><!-- custom css style -->';
    require_once "includes/header.php";
?>
<section class="sign-up">
    <!-- Start Header The Brand -->
    <div class="page-header">
        <div class="page-overlay">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <span>right</span>
                            <span>way</span>
                            <span>for</span>
                            <span>your</span>
                            <span>modern</span>
                            <span>fashion</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header The Brand -->
    <!-- Start Sign UP Centent -->
    <div class="sign-up-content start-end-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="content">
                        <!-- Left Content -->
                        <div class="content-left">
                            <h3>Sign Up</h3>
                            <form action="#" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" autocomplete="new-password">
                                </div>
                                <div class="form-group form-check">
                                    <label class="form-check-label cb-checkbox" for="sign-check">
                                        <input type="checkbox" class="form-check-input" id="sign-check">remenber me
                                    </label>
                                </div>
                                <div class="sign-submit submit">
                                    <div>
                                        <button type="submit" class="btn btn-outline-primary">sign up</button>
                                    </div>
                                    <div>
                                        <a href="#">Forgot your Password
                                            <i class="fas fa-long-arrow-alt-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Start Divider -->
                        <div class="divider">
                            <hr>
                        </div>
                        <!-- End Divider -->
                        <!-- Right Content -->
                        <div class="content-right">
                            <h3>Register</h3>
                            <form action="#" method="post">

                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" autocomplete="new-password">
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password" autocomplete="new-password">
                                </div>
                                
                                <div class="form-group form-check">
                                    <label class="form-check-label cb-checkbox" for="register-check">
                                        <input type="checkbox" class="form-check-input" id="register-check">Lorem ipsum dolor consectetur adipisicing
                                    </label>
                                </div>
                                <div class="register-submit submit">
                                    <div>
                                        <button type="submit" class="btn btn-outline-dark">Create Account</button>
                                    </div>
                                    <div>
                                        <p>Lorem ipsum dolor sit</p>
                                        agree our
                                        <a href="#">privacy policy <i class="fas fa-long-arrow-alt-right"></i> </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sign UP Centent -->
</section>




<?php require_once "includes/footer.php"; ?>