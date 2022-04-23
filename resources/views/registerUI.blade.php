<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trenc | Register </title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }}>
</head>
<body>
    <main class="login-container">
        <a class="login-toHome" href="/home"> < home </a>
        <section class="login-form-container">
            <div class="login-header">
                <img src="logo.png"/>
                <h2> trenc </h2>
            </div>
            <form method="POST" action="/register">
                @csrf
                <div class="form-group">
                    <input type="text" placeholder="Name" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <input type="email" placeholder="Email"  class="form-control" id="email" name="email">
                </div>
                

                <div class="form-group">
                    <input type="password" placeholder="Password"  class="form-control" id="password" name="password">
                </div>
 
                <div class="loginForm-footer">
                    <button type="submit" style="margin-top: 20px;" class="btn btn-dark btn-block">Sign Up</button>
                    <a href="/loginbub">Have an Account? Login </a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>