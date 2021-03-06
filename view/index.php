<!DOCTYPE html>
<html lang="en">
<head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../template/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../template/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../template/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../template/css/util.css">
    <link rel="stylesheet" type="text/css" href="../template/css/main.css">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Account Login
					</span>
                
                <?=$errors ?>
                
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                
                <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>
                
                <div class="container-login100-form-btn m-t-20">
                    <button class="login100-form-btn">
                        Войти
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../template/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../template/vendor/animsition/js/animsition.min.js"></script>
<script src="../template/vendor/bootstrap/js/popper.js"></script>
<script src="../template/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../template/vendor/select2/select2.min.js"></script>
<script src="../template/vendor/daterangepicker/moment.min.js"></script>
<script src="../template/vendor/daterangepicker/daterangepicker.js"></script>
<script src="../template/vendor/countdowntime/countdowntime.js"></script>
<script src="../template/js/main.js"></script>

</body>
</html>