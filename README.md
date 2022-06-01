<p align="center">
  <img src="https://github.com/faizan12123/Movie-Blog/blob/dev/public/logo.png?raw=true"/ style="width:30vw">
</p>  

## INTRODUCTION  
This is Trenc! A social-sharing platform dedicated to sharing your favorite jokes.

## TECHNOLOGY USED
- Bootstrap  
- Docker   
- Laravel   
- MySQL   
- SASS Stylesheets    

## DEPLOY INSTRUCTIONS  
1. Clone the repository to your local machine.


3. Using an ubuntu terminal run the following command to install dependencies: 


```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
3. Using the example .env file, create your own .env file for your local machine.


4. Using your ubuntu terminal run the following commands to perform DB migrations and seeding:

```rb
./vendor/bin/sail artisan migrate:refresh --seed
```

```rb
./vendor/bin/sail artisan db:seed --class=MemesSeeder
```

## GETTING STARTED
[1] To use Trenc, you must have valid credentials. Go to the "localhost/login" route from the URL and Log in using pre-exisitng credentials or create a new account.   

[2] Once you are logged in, you can:   
- explore jokes
- explore categories of jokes  
- post a new joke   
- provide a satisfaction rating of the website
- view past ratings of the website
- log out

To navigate through the website, we have a left-side bar with all your possible options. There's also the main body of content where you can scroll through jokes. And there's also your standard top navigation bar with our logo, a home button, and a log out button. 

## SCREENSHOTS
### REGISTER FOR AN ACCOUNT
![](https://github.com/faizan12123/Movie-Blog/blob/main/public/imgs/register.jpg)
### LOG IN TO ACCOUNT
![](https://github.com/faizan12123/Movie-Blog/blob/main/public/imgs/login.jpg)
### HOME FEED
![](https://github.com/faizan12123/Movie-Blog/blob/main/public/imgs/home.jpg)
### POST A JOKE
![](https://github.com/faizan12123/Movie-Blog/blob/main/public/imgs/post.jpg)
### PROVIDE A SATISFACTION RATING
![](https://github.com/faizan12123/Movie-Blog/blob/main/public/imgs/rate.jpg)
### VIEW OUR REVIEWS
![](https://github.com/faizan12123/Movie-Blog/blob/main/public/imgs/review.jpg)


## TEAM
| Member | Role |
| :---: | :------: |
|[Faizan Hussain](https://github.com/faizan12123)| Programmer  
|[Kyle DeGuzman](https://github.com/kyledeguzmanx)| Programmer  
