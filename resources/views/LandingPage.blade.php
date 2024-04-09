<html lang="en">
<head>
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
            cursor: pointer;
        }
        .button2{
            background-color:  #964b98;
            border-width: 0;
            border-radius: 40px;
            height: auto;
            width: auto;
            padding: 10px;
            font-weight: bold;
            font-size: 13px;
            font-weight: 600;
            font-family: HeliaCoreBold, Arial, sans-serif;
            color: white;
            cursor: pointer;

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
        .header2{
            font-size: 16px;
            font-family: HeliaCoreMedium, Arial, sans-serif;
            line-height: 1.2;
            white-space: pre;
            color: black;
        }
        .content{
            border-radius: 10px;
            background-color: white;
            margin-left: 25%;
            margin-right: 25%;
            align-items: center;
            justify-content: center;
            justify-items: center;
            align-content: center;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

    </style>
    <div class="myDiv"></div>
    <div class="section2"></div>
</head>
<body class="body">

    <h1 class="header">WebLan Designer</h1>

    <div class="content">
        <h2 class="header2">Register</h2>
    <form action="/register" method="post" class="register">
    @csrf
    <input type="text" name="name" placeholder="name"  >
    <input type="email" name="email" placeholder="email"  >
    <input type="password" name="password" placeholder="password" >
    <button class="button2">Register</button>

    </form>
    </div>
    <div class="content">
        <h2 class="header2">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginName" placeholder="name">
            <input type="password" name="loginPassword" placeholder="password">
            <button class="button2">Login</button>

        </form>


        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </div>

</body>
</html>
