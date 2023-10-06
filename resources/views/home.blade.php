@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/Home.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="/js/nav.js"></script>
    <title>Bean Brew</title>
</head>
<body>
    <header>
    <nav id="navbar">
    <div class="container">
        <h1>Bean Brew</h1>
        <ul>
           
            @if(auth()->check())
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Cart</a></li>
                <li class="user-dropdown">
                    <a href="#" class="user-name">{{ auth()->user()->fname }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button class = "lobtn" type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endif
        </ul>
    </div>
</nav>

    </header>
    <div class="banner">
    </div>
    <div class="content" data-aos="fade-up" data-aos-duration="1000">
        <h2>Welcome</h2>
        <h1>THE BEST COFFEE TESTING<br>EXPERIENCE</h1>
        <p>Your Daily Dose of Roasted Delight</p>
    <div data-aos="fade-up" data-aos-duration="1200">
        <button type="button" class="button1"><span class="buttonspan"></span>Order now</button>
        <button type="button" class="button1"><span class="buttonspan"></span>View description</button>
    </div>
    </div>
    <main>
        <section class="content-area">
            <div class="content-text">
                <h2 data-aos="fade-up" data-aos-duration="800">_Our <span class="Story">story_</span></h2>
                <p data-aos="fade-up" data-aos-duration="1000">. . . . Welcome to BeanBrew, where passion meets perfection in every roast. Our journey began with a simple dream: to bring the world's finest coffee beans to your cup, one carefully curated batch at a time. As dedicated coffee artisans, we meticulously select and roast only the highest quality beans to unlock their full flavor potential.</p>
                <p data-aos="fade-up" data-aos-duration="1200">Our commitment to quality extends from sourcing sustainable and ethically grown beans to employing artisanal roasting techniques that enhance the unique character of each origin. Every sip of our coffee is a sensory adventure, a testament to the artistry and dedication we pour into each batch.</p>
            </div>
            <div class="content-image">
                <img src="Images/ourstory.jpg" alt="Description of the image">
            </div>
        </section>
        <section class="image-row">
            <img src="Images/row1.jpg" alt="row 1" data-aos="fade-up" data-aos-duration="400">
            <img src="Images/row2.png" alt="row 2" data-aos="fade-up" data-aos-duration="600">
            <img src="Images/row33.png" alt="row 3" data-aos="fade-up" data-aos-duration="800">
            <img src="Images/row44.png" alt="row 4" data-aos="fade-up" data-aos-duration="1000">
            <img src="Images/row5.png" alt="row 5" data-aos="fade-up" data-aos-duration="1200">
        </section>
        <div class="cardstitle">
            <h2 data-aos="fade-up" data-aos-duration="1000">_Read about <span class="ourproducts">our products_</span></h2>
        </div>
    <div class="cards">
          <div class="card" data-aos="fade-up" data-aos-duration="600">
            <img src="Images/lightroast.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Light Roast</p>
              <p class="card-text">Delicate, bright, and lively, our light roasts shine</p>
              <button class="readmore">Read more</button>
            </div>
          </div>
          <div class="card" data-aos="fade-up" data-aos-duration="800">
            <img src="Images/mediumroast.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Medium Roast</p>
              <p class="card-text">Balanced complexity with a rich, smooth character</p>
              <button class="readmore">Read more</button>
            </div>
          </div>
          <div class="card"data-aos="fade-up" data-aos-duration="1000">
            <img src="Images/darkroast.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-title">Dark Roast</p>
              <p class="card-text">Bold, robust, and full-bodied, a deep coffee experience</p>
              <button class="readmore">Read more</button>
            </div>
          </div>
        </div>

        <div class="SERVICES">
            <div class="services" data-aos="fade-up" data-aos-duration="600">
                <img src="Images/coffee.png" alt="coffee">
                <h2>Quality coffee</h2>
            </div>
            <div class="services" data-aos="fade-up" data-aos-duration="800">
                <img src="Images/delivery.png" alt="delivery">
                <h2>Fast delivery</h2>
            </div> 
            <div class="services" data-aos="fade-up" data-aos-duration="1000">
                <img src="Images/orders-icon.png" alt="order">
                <h2>Easy to order</h2>
            </div>
        </div>
        
        
        <!--footerr-->
        <footer>
            <div class="social">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#l">About</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <p>© 2022 Praveen Sanjana. All rights reserved</p>
            <!--footer-->
            
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
        <script src="nav.js"></script>
    </main>
</body>
</html>

@endsection
