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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css%22%3E
    <script src="https://kit.fontawesome.com/35e6bdb001.js" crossorigin="anonymous"></script>
</head>
<body>

    <x-navigationBar/>
    <x-leftSideBar/>
    <div class="container homeFeed-container">
        <div class="rating-container">
            <h2>Rate Us </h2>
            <form class="rate" method="POST" action="/createRating">
                @csrf
                <input type="radio" id="star5" name="rate" value="5" />
                <label for="star5" title="text">5 stars</label>
                <input type="radio" id="star4" name="rate" value="4" />
                <label for="star4" title="text">4 stars</label>
                <input type="radio" id="star3" name="rate" value="3" />
                <label for="star3" title="text">3 stars</label>
                <input type="radio" id="star2" name="rate" value="2" />
                <label for="star2" title="text">2 stars</label>
                <input type="radio" id="star1" name="rate" value="1" />
                <label for="star1" title="text">1 star</label>
                <br/>
                <button type="submit" style="" class="">Submit</button>

            </form>
        </div>

    </div> 
</body>
</html>