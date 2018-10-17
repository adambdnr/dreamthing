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
<div class="container">
    <div class="row">
        <div class="col-12 d-flex d-md-none justify-content-between narrow-div">
            <a class="about-plus black-text blue-background">+</a>
            <div>
                <a class="about-arrow black-text blue-background smaller-margin-right">?</a>
                <span></span>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 d-none d-md-flex justify-content-between">
            <a class="about-plus outline">+</a>
            <div>
                <a class="about-questionmark outline small-margin-right">?</a>
                <span></span>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-12 position-relative">
            <form action="/upload/submit" method="post">
                {{ csrf_field() }}
                <textarea name="dream"></textarea>
                <button type="submit" class="submit-up-left position-absolute"><span class="down-arrow"></span></button>
            </form>
        </div>
    </div>
</div>

<script data-cfasync="false" src="js/app.js"></script>

</body>
</html>
