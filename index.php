<?php 
include "layouts/head.php"; 
include "./db/db.php";
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
$error_message = null;
$legend_class ="mt-5";
$legend_text = "Log In"
?>
    <div class="game-screen">
        <?php include "layouts/nav.php"; ?>
        <div class="small-container">
            <?php include "layouts/legend.php"; ?>
            <div class="light-transparent-background p-5">
                <form class="form-group mb-0 pl-4 pr-4" method="post">
                    <label for="username">Enter Username</label>
                    <input type="text" name="username" class="form-control" required>
                    <label for="password" class="mt-3">Enter Password</label>
                    <input type="password" name="pass" class="form-control" required>
                    <div class="text-center">
                        <button type="submit" class="btn custom-bg-color-1 mt-3">Log in</button>
                    </div>
                    <span class="text-danger"><?= $error_message ?></span>
                </form>
            </div>
        </div>
    </div>
<?php include "layouts/footer.php"; ?>