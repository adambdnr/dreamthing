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
    <div class="row d-block d-md-none">
        <div class="d-flex justify-content-end narrow-div">
            <a href="/about" class="about-button black-text blue-background">?</a>
            <a href="/upload" class="add-button black-text blue-background">+</a>
        </div>
    </div>
    <div class="row wrapper">
        <div class="col-12 col-md-8 left-side">
            @if(count($data['dreams']) > 0)
                @foreach($data['dreams'] as $key=>$dream)
                    <p class="dream-id small-padding">Álom {{sprintf("%03d", $key+1)}}</p>
                    <p class="dream-body small-padding">{!!$dream->dream!!}</p>
                @endforeach
            @endif
        </div>
        <div class="d-none d-md-block col-md-4 right-side position-relative">
            <div class="d-flex justify-content-between">
                <span></span>
                <a href="/about" class="about-button">?</a>
                <a href="/upload" class="add-button">+</a>
            </div>
            <div class="position-vertical-text position-absolute d-flex justify-content-end">
                <p class="blue-text rotate">Termelőeszközök</p>
            </div>
            <p class="position-absolute position-percentage blue-text"><? $data['disco']?>%</p>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row d-block d-sm-block d-md-none">
        <div class="d-flex justify-content-around footer mt-2">
            <p class="black-text">Termelőeszközök</p>
            <p class="black-text"><? $data['disco']?>%</p>
        </div>
    </div>
</div>

<script data-cfasync="false" src="js/app.js"></script>

</body>
</html>
