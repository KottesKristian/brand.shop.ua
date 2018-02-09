<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="admin-wrapper">
    <div class="admin-login">
        <div class="log-in">
            <h1>Вхід в кабінет</h1>
            <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <p><input type="text" name="email" value="{{ old('email') }}" placeholder="Email"></p>
                <p><input type="password" name="password" value="" placeholder="Пароль"></p>
                <p class="remember_me">
                    <label>
                        <input type="checkbox" name="remember_me" id="remember_me">
                        Запам'ятати мене
                    </label>
                </p>
                <p class="submit"><input type="submit" name="commit" value="Войти"></p>
            </form>
        </div>
        <div class="login-help">
            <a href="index.html">Забули пароль?</a> Відновіть його!
        </div>
    </div>
</div>
</body>
</html>