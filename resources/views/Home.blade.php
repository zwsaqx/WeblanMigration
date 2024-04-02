<!DOCTYPE html>
<html lang="en">
<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebLan Designer</title>

    <style>
        .myDiv {
          background-color: #4f1852;
          text-align: center;
            width: 100%;
            height: 50px;
        }
        .section2 {
            background-color: #753b76;
            width: 100%;
            height: 70px;

        }
        .body {
            margin: 0;
            background-color: #964b98;
            text-align: center;
        }
        .button{
            background-color: white;
            border-width: 0;
            border-radius: 40px;
            height: 3rem;
            width: 6rem;
            font-weight: bold;
            font-size: 13px;
            font-weight: 600;
            font-family: HeliaCoreBold, Arial, sans-serif;
            line-height: 13px;
        }
        .paragraph{
            font-size: 24px;
            font-family: HeliaCoreMedium, Arial, sans-serif;
            line-height: 1.2;
            white-space: pre;
        }
        .header{
            font-size: 24px;
            font-family: HeliaCoreMedium, Arial, sans-serif;
            line-height: 1.2;
            white-space: pre;
            color: white;
        }

    </style>
    <div class="myDiv"></div>
    <div class="section2"></div>
</head>
<body class="body">


    <h1 class="header">WebLan Designer</h1>
    <form action="/logout" method="post">
      @csrf
    <button class="button">Logout</button>
    </form>



</body>
</html>
