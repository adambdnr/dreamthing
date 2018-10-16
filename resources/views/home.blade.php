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
    <div class="row wrapper">
        <div class="col-8 left-side">
            @if(count($data['dreams']) > 0)
                @foreach($data['dreams'] as $key=>$dream)
                    <p class="dream-id">Álom {{sprintf("%03d", $key+1)}}</p>
                    <p class="dream-body">{!!$dream->dream!!}</p>
                @endforeach
            @endif
        </div>
        <div class="col-4 right-side">
            <div class="d-flex justify-content-between">
                <span></span>
                <a href="/about" class="about-button">?</a>
                <a href="/upload" class="add-button">+</a>
            </div>
            <p class="blue-text float-right position-absolute rotate position-vertical-text">Termelőeszközök</p>
            <p class="position-absolute position-percentage blue-text"><? $data['disco']?>%</p>
        </div>
    </div>
</div>

<script data-cfasync="false" src="js/app.js"></script>

</body>
</html>
