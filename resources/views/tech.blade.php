<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trenc | Find all your favorite memes in one place! </title>
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link rel="stylesheet" type="text/css" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/35e6bdb001.js" crossorigin="anonymous"></script>
</head>
<body>

    <x-navigationBar/>
    <x-leftSideBar/>
    <div class="container homeFeed-container">
        <div class="row">
            
            @foreach ($tech as $tech)
                <div class="card" style="width: 100%;">
                <div class="card-body">
                <h5 class="card-title">Name: {{$tech->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Genre: {{$tech->genre}}</h6>
                <p class="card-text">Joke: {{$tech->joke}}</p>
                
  </div>
</div>
            @endforeach
        </div>
    </div>
   
    
    
</body>
</html>