<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    Contact from enquery from: {{ $details['name'] }}
<p> Name: {{ $details['name'] }} </p>
<p> Email: {{ $details['email'] }} </p>
<p> Message: {{ $details['comment'] }} </p>

    <p>Thank you</p>
</body>
</html>
