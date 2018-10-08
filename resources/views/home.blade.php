<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid">
    <div class="row wrapper">
        <div class="col-8 left-side">
            @if(count($dreams) > 0)
                @foreach($dreams as $dream)
                    <p class="dream-id">Álom {{sprintf("%03d", $dream->id)}}</p>
                    <p class="dream-body">{{$dream->dream}}</p>
                @endforeach
            @endif
            <p class="last">asd</p>
        </div>
        <div class="col-4 right-side position-relative">
            <div class="d-flex justify-content-between">
                <span></span>
                <a href="/dreamApp/public/about" class="about-button">?</a>
                <a href="/upload" class="add-button">+</a>
            </div>
            <p class="blue-text float-right position-absolute rotate position-vertical-text">Termeloeszkozok</p>
            <p class="position-absolute position-percentage blue-text">23%</p>
        </div>
    </div>
</div>

<script data-cfasync="false" src="js/app.js"></script>

</body>
</html>
