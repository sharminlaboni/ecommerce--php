<?php include 'header.php';?>

    
    <main>
        <div class="card bg-light" style="margin: 5% 32%; border-radius: 1rem;">
            <div class="text-center my-4">
                <h5 style="font-size: 30px;">REGISTRATION</h5>
            </div>
            <form action="registration_process.php" class="mx-4 mb-3" method="POST">

                <div class="row">                       
                    <div class="col-md-12">                        
                        <div class="mb-3">
                            <label for="firstName" class="form-label">Name</label>
                            <input name="name" type="text" class="form-control" id="firstName"required>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                       
                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input name="address" type="text" class="form-control" id="address"required>
                </div>

                <div class="row">                       
                    <div class="col-md-12">                        
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone number</label>
                            <input name="phone" type="number" class="form-control" id="phoneNumber" required>
                        </div>
                    </div>
                </div>
                    
                <div class="row">                       
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm password</label>
                            <input name="password_confirm" type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                    </div>
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                </div>

                <div class="text-center">
                    <!-- <a class="btn btn-info btn-outline-light border-info" href="login.html" style="padding: 6px 190px;";>Sign Up</a> -->
                    <input class="btn btn-info btn-outline-light border-info" style="padding: 6px 190px;" type="submit" value="Sign Up">
                </div>
            </form>

            <div class="mb-1">
                <p style="margin-left: 25px;">By clicking Register, I agree that I have read and accepted <br><a class="btn text-primary" href="#">Terms of Use and</a>
                    <a class="btn text-primary" href="#">Privacy Policy</a> </p>
                <p style="margin-left: 25px;">Already have account please login?<a class="btn text-primary" href="login.html">Sign in</a></p>
            </div>
        </div>
    </main>

    <?php include 'footer.php';?>
