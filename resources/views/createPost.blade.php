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
        <div class="createPost-container">
            <form method="POST" action="/createPost">
                @csrf
                <div class="">
                    <input type="text" placeholder="Name" class="" id="name" name="name" required>
                </div>

                <<div class="">
                    <select name="genre" id="genre" required>
                        <option value="Genre" disabled selected>Genre</option>
                        <option value="tech">Tech</option>
                        <option value="biology">Biology</option>
                        <option value="business">Business</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                

                <div class="">
                    <input type="text" placeholder="Joke"  class="" id="joke" name="joke" required>
                </div>
 
                <div class="">
                    <button type="submit" style="margin-top: 20px;" class="btn btn-dark btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
   
    
    
</body>
</html>