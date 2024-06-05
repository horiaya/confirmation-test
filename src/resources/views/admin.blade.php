<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
            <nav class="header-nav">
            <a class="header-nav__link" href="{{ route('admin') }}">logout</a>
            </nav>
        </div>
</header>

<main>
        <div class="register-form__heading">
        <h2>Admin</h2>
        </div>
    <div class="register-form__content">
    </div>

    <div class="search-form">
        <form class="search-form__content" action="/admin" method="post">
    @csrf
    <div class="search-form__item">
      <input class="search-form__item-input" type="text" name="name" placeholder="名前やメールアドレスを入力して下さい" value="{{ old('name') }}">
    </div>
    <div class="search-form__item__group">
    <select class="search-form__item-select" name="category_id">
       <option value="">性別</option>
           <option value="">
        </option>
     </select>
     <select class="search-form__item-select" name="category_id">
       <option value="">お問い合せの種類</option>
           <option value="">
        </option>
     </select>
     <input class="search-form__item-input" type="date" name="date" placeholder="年/月/日/">
    </div>
    <div class="search-form__button">
     <button class="search-form__button-submit" type="submit">検索</button>
   </div>
<div class="search-form__button">
     <button class="search-form__button-submit" type="submit">リセット</button>
   </div>
   </div>
   </form>
</div>

<div class="category-table">
    <table class="category-table__inner">
      <tr class="category-table__row">
        <th class="category-table__header">お名前</th>
        <th class="category-table__header">性別</th>
        <th class="category-table__header">メールアドレス</th>
        <th class="category-table__header">お問い合せの種類</th>
        <th class="category-table__header"></th>
      </tr>
    </table>
</div>
</main>
</body>
</html>