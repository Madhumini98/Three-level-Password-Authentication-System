<?php
$arr = getRandomNumber();

$captcha = new Captcha();
$check_choice = $captcha->check_choice();

?>

<?php $this->view('includes/header'); ?>

<div class=" rounded shadow container-fluid text-center signup-bg-img" style="width: 550px; min-width: 340px; padding-top:40px; padding-bottom:40px; margin-top: 100px;">

    <?php if ($_SESSION['count'] > 1) :?>
        <h1 style="padding-bottom: 15px; font-family: 'Ubuntu Mono', monospace !important; font-weight:bold">Wrong Selection.</h1>
        <form method="post">
            <button class=" rounded-3 btn btn-warning" type="submit" name='try' value="try">Try Again!</button>
        </form>
    <?php else : ?>
        <h1 style="padding-bottom: 15px; font-family: 'Ubuntu Mono', monospace !important; font-weight:bold">Please Select Human Image</p>
        </h1>
        <form method="post">
            <button class=" rounded-3 btn btn-outline-secondary" type="submit" name="choice" value="choice<?= $arr[0] ?>">
                <img src="assets/choice<?= $arr[0] ?>.png" alt="Human" style="width: 150px;">
            </button>
            <button class=" rounded-3 btn btn-outline-secondary" type="submit" name="choice" value="choice<?= $arr[1] ?>">
                <img src="assets/choice<?= $arr[1] ?>.png" alt="Tree" style="width: 150px;">
            </button>
            <button class=" my-1 rounded-3 btn btn-outline-secondary" type="submit" name="choice" value="choice<?= $arr[2] ?>">
                <img src="assets/choice<?= $arr[2] ?>.png" alt="Ball" style="width: 150px;">
            </button>
            <button class=" my-1 rounded-3 btn btn-outline-secondary" type="submit" name="choice" value="choice<?= $arr[3] ?>">
                <img src="assets/choice<?= $arr[3] ?>.png" alt="Smart phone" style="width: 150px;">
            </button>
        </form>
    <?php endif; ?>
</div>
<?php $this->view('includes/footer'); ?>