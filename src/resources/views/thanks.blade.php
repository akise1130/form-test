<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
    <main>
        <div class="thanks">
            <div class="thanks__background">Thank you</div>
            <div class="thanks__content">
                <p class="thanks__message">お問い合わせありがとうございました</p>
                <a href="{{ route('index') }}" class="thanks__home-button">HOME</a>
            </div>
        </div>
    </main>
</body>

</html>