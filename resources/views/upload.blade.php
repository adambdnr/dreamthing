<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DREAM</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-between">
            <a href="/" class="about-plus outline">+</a>
            <div>
                <a href="/about" class="about-questionmark">?</a>
                <a href="/" class="about-arrow medium-margin-left">&uarr;</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="/upload/submit" method="post">
                {{ csrf_field() }}
                <textarea name="dream"></textarea>
                <button type="submit">SUBMIT</button>
            </form>
        </div>
    </div>
</div>

<script data-cfasync="false" src="js/app.js"></script>

</body>
</html>
