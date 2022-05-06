<?php
use App\Http\Controllers\LoginController;

$logout = [loginController::class, 'logout'];
?>
<nav>
    <div class="nav-left">
        <img class="nav-logo" src="logo.png"/>
        <p> Trenc </p>
    </div>
    <div class="nav-right">
    <a href="{{ url('/home') }}"> Home </a>
    </div>
    <div class="nav-right">
    <a href="{{ url('/logout') }}"> Logout </a>
    </div>
    
</nav>