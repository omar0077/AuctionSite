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
    <h1 style="color: #5bc0de"></h1>
    <h3>Customer Report</h3>
    <h4>Dear Admin {{$reported_user_email}} is reported by {{$user_email}}</h4>
    <p>{{$report_msg}}</p>
</div>
</body>
</html>
