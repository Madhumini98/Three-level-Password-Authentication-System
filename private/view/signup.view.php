<?php $this->view('includes/header') ?>


<div class="container-fluid row ">
    <div class=" container-fluid  col-md-6">
        <center>
            <p class="quote"><i class="fa-solid fa-quote-left"></i> The computer was born to solve problems that did not exist before. <i class="fa-solid fa-quote-right"></i></p>
            <form method="post">
                <button class=" btn btn-lg btn-warning" name="acc-status" value="true">Already Have An Account</button>
            </form>
        </center>
    </div>
    <div class=" container-fluid  col-md-6">
        <div class="shadow mx-auto w-75 rounded-3 text-center signup-bg-img" style="margin-top: 120px; margin-bottom: 20px">
            <form class="form-signin" method="post">
                <img class="mb-4 rounded-circle" src="assets/logo.png" alt="" width="85" height="80">

                <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>

                <?php if (count($errors) > 0) : ?>
                    <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                        <strong>Error!</strong>
                        <?php foreach ($errors as $errors) : ?>
                            <br><?= $errors ?>
                        <?php endforeach; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif;  ?>

                <label for="firstName" class=" sr-only">First Name</label>
                <input type="text" id="firstName" class=" form-control rounded my-1" name="firstname" placeholder="First Name" required>

                <label for="lastName" class=" sr-only">Last Name</label>
                <input type="text" id="lastName" class=" form-control rounded my-1" name="lastname" placeholder="Last Name" required>

                <label for="inputEmail" class="sr-only">Email Address</label>
                <input type="email" id="inputEmail" class="form-control rounded my-1" name="email" placeholder="Email address" required>

                <select name="gender" class=" form-select form-control rounded">
                    <option value="" selected>--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="inputPassword1" class="sr-only">Password</label>
                <input type="password" id="inputPassword1" class="form-control rounded my-1" placeholder="Password" name="password" style="margin-bottom: 0px;" required>

                <label for="inputPassword2" class="sr-only">Password</label>
                <input type="password" id="inputPassword2" class="form-control rounded my-1" name="password2" placeholder="Re-Type Password" required>

                <button class="btn btn-lg btn-primary btn-block" type="submit" style="margin-top: 20px;">Sign in</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
            </form>
        </div>
    </div>
</div>

<?php $this->view('includes/footer') ?>