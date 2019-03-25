<!DOCTYPE html>
<html lang="en">
<head>
    <title>Авторизация</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../template/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="../template/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../template/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/css-hamburgers/hamburgers.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../template/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../template/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../template/css/util.css">
    <link rel="stylesheet" type="text/css" href="../template/css/main.css">
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('/template/images/bg-01.jpg');">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
            <form method="post" class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Рефреш
					</span>
                
                <div class="wrap-input100 validate-input m-b-23" data-validate="Введите ваш логин">
                    <span class="label-input100">Логин</span>
                    <input class="input100" type="text" name="username" placeholder="Ваш логин"
                           pattern="[а-яА-Яa-zA-Z0-9_-]{3,15}" autofocus>
                    <span class="focus-input100" data-symbol="&#xf206;"></span>
                </div>
                
                <div class="wrap-input100 validate-input" data-validate="Введите пароль">
                    <span class="label-input100">Пароль</span>
                    <input class="input100" type="password" name="pass" placeholder="Пароль">
                    <span class="focus-input100" data-symbol="&#xf190;"></span>
                </div>
                
                <div class="text-right p-t-8 p-b-31">
                    <a href="#">
                        Забыли пароль?
                    </a>
                </div>
                
                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Войти
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="dropDownSelect1"></div>

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