<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div style="width: 100%;text-align: center">
    <h1 style="color: #5bc0de">Hey {{ $name }}</h1>
    <h3>Congratulations</h3>
    <h4>Yor bid was highest among the other biders on <a href="{{$link}}" style="color: #5bc0de">{{$title}}</a> ad</h4>
    <h4>To view details, Click on the Details button</h4>
    <a class="btn btn-info" role="button" href="{{$link}}">Details</a>
    <h4>To proceed to payments, Click on the Payment button</h4>
    <a class="btn btn-info" role="button" href="{{$link2}}">Payments</a>
</div>
</body>
</html>
