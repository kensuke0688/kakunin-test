<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">logout</button>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Admin</h2>
            </div>
            <form action="detail.html" method="get">
                <input type="search" />
            </form>
            <form action="detail.html" method="get">
                <select name="性別">
                    男性 女性 その他
                </select>
            </form>
            <form action="detail.html" method="get">
                <select name="お問い合わせの種類">
                    商品のお届けについて 商品の交換について 商品トラブル ショップへのお問い合わせ その他
                </select>
            </form>
            <form action="detail.html" method="get">
                <input type="date" />
            </form>

</body>
</html>