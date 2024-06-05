<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <nav class="header-nav">
            <a class="header-nav__link" href="/">register</a>
            </nav>
        </div>
</header>
<main>
        <div class="login-form__heading">
        <h2>Login</h2>
        </div>
    <div class="login-form__content">
    </div>
<form class="form" action="/login" method="get">
    @csrf

    <div class="form__group">
        <p class="form__group-title">メールアドレス</p>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="email" name="email" placeholder="例）test@example.com">
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__group">
        <p class="form__group-title">パスワード</p>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="password" name="password" placeholder="例）coachtech1106">
            </div>
            <div class="form__error">
                <!--バリデーション機能を実装したら記述します。-->
            </div>
        </div>
    </div>
    <div class="form__button">
        <button class="form__button-submit" type="submit">ログイン</button>
    </div>
</form>

</main>
</body>
</html>