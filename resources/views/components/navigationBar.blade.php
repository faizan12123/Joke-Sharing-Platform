<?php
use App\Http\Controllers\LoginController;

$logout = [loginController::class, 'logout'];
?>
<nav>
    <div class="nav-left">
        <img class="nav-logo" src="logo.png"/>
        <p> Trunc </p>
    </div>
    <div class="nav-right">
    <a href="{{ url('/logout') }}"> logout </a>
    </div>
</nav>