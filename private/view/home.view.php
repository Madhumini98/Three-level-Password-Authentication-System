<?php $this->view("includes/header"); ?>

<div class="container-fluid text-center" style="padding-top: 100px;">
        <h1 style="padding-bottom: 15px; font-family: 'Ubuntu Mono', monospace !important; font-weight:bold">Home</h1>
        <form method="post">
                <button class="btn btn-warning" type="submit" name="val" value="L">Logout</button>
                <button class="btn btn-info" type="submit" name="val" value="S">Signup</button>
        </form>
</div>

<?php $this->view("includes/footer"); ?>