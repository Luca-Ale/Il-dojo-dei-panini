<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
        <title>Il Dojo dei Panini - Login</title>
        <link id="theme-style-login" rel="stylesheet" type="text/css" href="../css/login_style.css" />

        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

        <script src="../js/login/login_theme.js"></script> 
    </head>
    <body>
        <div class="page-content d-flex align-items-center">
            <div class="container d-flex justify-content-center">
                <div class="col-9 col-sm-8 col-md-7 col-lg-6 col-xl-5 col-xxl-5"> 
                    <div class="login">
                        <div class="logo-section">
                            <img class="logo" src="../imgs/logo.png" alt="" />
                        </div>
                        <h3 class="login-title">Login</h3>
                        <form action="../php/login.php" method="POST">
                            <?php if(isset($templateParams["errorelogin"])): ?>
                                <p class="text-danger"><?php echo $templateParams["errorelogin"]; ?></p>
                            <?php endif; ?>
                            <div class="mb-2 mt-5">
                                <input type="text" class="form-control email-username-input" placeholder="Username | Email" name="username"/>
                                <img src="../icons/envelope-open-solid.svg" alt="" class="img-email" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control password-input" id="password" placeholder="Password" name="password"/>
                                <img src="../icons/key-solid.svg" alt="" class="img-password" />
                                <i class="fas fa-eye password-visibility" id="password-visibility" onclick="toggleVisibility()"></i>
                            </div>
                            <input class="btn btn-login" type="submit" value="Login" />
                        </form>
                        <hr class="hr-separator" />

                        <a href="signup.php" class="link signup-link mb-1">Non hai un account? Registrati ora!</a>
                        <br>
                        <a href="forgot-password.php" class="link forgot-password-link mb-2">Hai dimenticato la password?</a>
                    </div>
                </div>
            </div>
        </div>
        <input type="image" src="../icons/theme/lightbulb-regular.svg" class="btn img-theme" id="icon_theme" alt="Theme" onclick="swapTheme()" />

        <script src="../js/password_visibility.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>