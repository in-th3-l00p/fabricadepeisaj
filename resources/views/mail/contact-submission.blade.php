<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <h1 style="text-align: center;">Completare Formular Contact</h1>
    <p>Nume: {{ $submission->name }}</p>
    <p>Email: {{ $submission->email }}</p>
    <p>Mesaj: {{ $submission->message }}</p>
</body>
</html>
