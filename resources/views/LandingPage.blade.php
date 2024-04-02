<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    
    <h1>Welcome to WebLan </h1>
    <div style="border: 3px solid rgb(0, 0, 0);">
        <h2>Register</h2>
    <form action="/register" method="post" >
    @csrf
    <input type="text" name="name" placeholder="name"  >
    <input type="email" name="email" placeholder="email"  >
    <input type="password" name="password" placeholder="password" >
    <button>Register</button>

    </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginName" placeholder="name">
            <input type="password" name="loginPassword" placeholder="password">
            <button>Login</button>

        </form>


        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    </div>
    
</body>
</html>