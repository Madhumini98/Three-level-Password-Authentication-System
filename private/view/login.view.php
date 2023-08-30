<?php $this->view("includes/header"); ?>

<div class="container-fluid" style="min-width: 340px; width: 450px;">

    <div class="shadow mx-auto rounded-3 text-center signup-bg-img" style="margin-top: 150px; margin-bottom: 20px">
        <form class="form-signin" method="post">
            <img class="mb-4 rounded-circle" src="assets/logo.png" alt="" width="85" height="80">

            <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>

            <?php if(count($errors)>0): ?>
            <div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
                <strong>Error!</strong> 
                <?php foreach($errors as $errors) :?>
                    <br><?= $errors ?>
                <?php endforeach ; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif;  ?>

            <label for="inputEmail" class="sr-only">Email Address</label>
            <input type="email" id="inputEmail" class="form-control rounded my-1" name="email" value="<?php if(isset($_COOKIE['email'])) { echo $_COOKIE['email']; } ?>" placeholder="Email address" required>

            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword1" class="form-control rounded my-1" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" placeholder="Password" style="margin-bottom: 0px;" required>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" name="remember" value="remember-me" <?php if(isset($_COOKIE['userlogin'])) { echo "checked"; } ?> > Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <button class="btn btn-lg btn-info btn-block" type="submit" name="sign" value="true" >Signup</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
        </form>
    </div>
</div>
<?php $this->view("includes/header"); ?>