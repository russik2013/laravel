<?php
/**
 * Created by PhpStorm.
 * User: russik
 * Date: 14.05.2017
 * Time: 13:41
 */
  ?>

        <!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">


    <div class="content">

        <form action="{{url('http://lumen/data/add')}}" method="post">

            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="POST">

            <p>Enter username</p>
            <input type="text" name="username" id="username">

            <p>Enter password</p>
            <input type="password" name="password" id="password">

            <p>file</p>
            <input type="file" name="file" id="file">

            <p><input type="submit"></p>

        </form>

    </div>
</div>
</body>
</html>
