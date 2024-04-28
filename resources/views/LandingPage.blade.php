<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WebLan Designer</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <div class="logo_centered">
        <img src="{{asset('Images/AUT_Logo.jpg')}}" alt="AUT_Logo" class="logo"></div>
     <div class="DarkPurpleBar"></div>
    <div class="PurpleBar"></div>

</head>
<body class="body">
    <br/>
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
