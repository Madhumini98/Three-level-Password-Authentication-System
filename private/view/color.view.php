<?php
$arr = getRandomNumberForColor();
?>

<?php $this->view("includes/header"); ?>

<div class=" container-fluid" style="min-width: 645; max-width: 650px; margin-top: 150px;">

        <div class=" shadow mx-auto rounded-3 text-center signup-bg-img" style="padding-top: 30px;">
                <?php if ($_SESSION['cnt'] > 1) : ?>
                        <h1 style="padding-bottom: 15px; font-family: 'Ubuntu Mono', monospace !important; font-weight:bold">Wrong Selection.</h1>
                        <form method="post">
                                <button class=" rounded-3 btn btn-warning" type="submit" name='try' value="try" style="margin-bottom: 30px;">Try Again!</button>
                        </form>
                        <?php $_SESSION['cnt'] = 1; ?>
                <?php else : ?>
                        <h1 style="padding-bottom: 15px; font-family: 'Ubuntu Mono', monospace !important; font-weight:bold">Select Colours Of The Icons</h1>
                        <form class="form-signin" method="post" style=" max-width: 600px;">
                                <button name="btn1" value="<?= $arr[0] ?>" class="btn btn-outline-secondary rounded-3 mx-1">
                                        <img src="assets/colour<?= $arr[0] ?>.png" alt="Color Icon" style="width: 120px">
                                </button>
                                <button name="btn2" value="<?= $arr[1] ?>" class="btn btn-outline-secondary rounded-3 mx-1">
                                        <img src="assets/colour<?= $arr[1] ?>.png" alt="Color Icon" style="width: 120px">
                                </button>
                                <button name="btn3" value="<?= $arr[2] ?>" class="btn btn-outline-secondary rounded-3 mx-1">
                                        <img src="assets/colour<?= $arr[2] ?>.png" alt="Color Icon" style="width: 120px">
                                </button>

                                <div class="row" style="padding-left: 64px; padding-top:30px;">
                                        <select name="choice1" class=" form-select rounded form-control mx-1" name="choice1" style="max-width: 140px">
                                                <option selected value="">--Select Color--</option>
                                                <option value="4">Red</option>
                                                <option value="5">Blue</option>
                                                <option value="1">Grey</option>
                                                <option value="3">Green</option>
                                                <option value="2">Yellow</option>
                                                <option value="7">Pink</option>
                                                <option value="6">Purple</option>
                                        </select>
                                        <select name="choice2" class=" form-select  rounded form-control" name="choice1" style="max-width: 140px; margin-left: 15px;">
                                                <option selected value="">--Select Color--</option>
                                                <option value="4">Red</option>
                                                <option value="5">Blue</option>
                                                <option value="1">Grey</option>
                                                <option value="3">Green</option>
                                                <option value="2">Yellow</option>
                                                <option value="7">Pink</option>
                                                <option value="6">Purple</option>
                                        </select>
                                        <select name="choice3" class=" form-select  rounded form-control" name="choice1" style="max-width: 140px; margin-left: 17px; ">
                                                <option selected value="">--Select Color--</option>
                                                <option value="4">Red</option>
                                                <option value="5">Blue</option>
                                                <option value="1">Grey</option>
                                                <option value="3">Green</option>
                                                <option value="2">Yellow</option>
                                                <option value="7">Pink</option>
                                                <option value="6">Purple</option>
                                        </select>
                                </div>
                                <input type="hidden" name="arr1" value="<?= $arr[0] ?>">
                                <input type="hidden" name="arr2" value="<?= $arr[1] ?>">
                                <input type="hidden" name="arr3" value="<?= $arr[2] ?>">
                                <button class=" btn-lg btn-primary type=" submit" style="margin: 20px;">Submit</button>

                        </form>
                <?php endif; ?>
        </div>

</div>

<?php $this->view("includes/footer"); ?>