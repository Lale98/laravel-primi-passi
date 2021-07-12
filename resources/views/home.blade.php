<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/views/css/style.css">
    <title>Laravel</title>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        div {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        ul {
            list-style: none;
            text-align: center;
        }
        li {
            text-decoration: none;
        }

        h1{
            text-align: center;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <div>
        <h1>Hello World!</h1>
        <ul>
            @foreach ($Utente as $key => $info)
            <li>
                {{$key}}
                {{$info}}
            </li>
            @endforeach
        </ul>
    </div>
</body>
</html>