<?php 
include "layouts/head.php"; 
include "./db/db.php";
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$legend_class ="mt-5";
$legend_text = "Sign Up"
?>
    <div class="game-screen">
        <ul class="nav justify-content-center pt-2 pb-2 light-transparent-background">
            <li class="nav-item">
                <a href="/" class="nav-link">Have an account? Log in</a>
            </li>
        </ul>
        <div class="small-container">
            <?php include "layouts/legend.php"; ?>
            <div class="light-transparent-background p-5">
                <form class="form-group mb-0 pl-4 pr-4" method="post">
                    <label for="username">Choose a username</label>
                    <input type="text" name="username" class="form-control" required>
                    <label for="email" class="mt-3">Enter your email address</label>
                    <input type="email" name="email" class="form-control" required>
                    <label for="password" class="mt-3">Choose a password</label>
                    <input type="password" name="pass" class="form-control" required>
                    <label for="password" class="mt-3">Re-type password</label>
                    <input type="password" name="passconfirm" class="form-control" required>
                    <div class="text-center">
                        <button type="submit" class="btn custom-bg-color-1 mt-3">Sign up</button>
                    </div>
                    <span class="text-danger"><?= $error_message ?></span>
                </form>
            </div>
        </div>
    </div>
<?php include "layouts/footer.php"; ?>