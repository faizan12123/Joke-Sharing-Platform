<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trenc | Log In </title>
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
            <form method="POST" action="/home">
                @csrf
                <div class=""> 
                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
 
                <div class="">
                   <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>
 
                <div class="">
                   <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember Me
                        </label>
                    </div>
                </div>
 
                <div class="loginForm-footer">
                    <button type="submit" class="btn btn-dark btn-block">Log In</button>
                    <a href="/registerbub">No Account? Register </a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>