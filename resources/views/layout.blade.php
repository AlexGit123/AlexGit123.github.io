<!DOCTYPE html>
<!--This file contains the elements of the webpage that are consistent-->
<html lang="en">

<link rel="stylesheet" href="/../css/style.css" />


<body>
<header>
    <div class="container">
        <img
            style="max-width: 50px"
            class="logo"
            src="https://i.pinimg.com/originals/0f/8b/28/0f8b2870896edcde8f6149fe2733faaf.jpg"
            alt="logo"
        />

        <nav>
            <ul>
                <li class="{{ Request::path() === '/' ? 'current_item' : '' }}"><a href="/">Home</a></li>

                <li class="{{ Request::path() === 'about' ? 'current_item' : '' }}"><a href="/about">About me</a></li>

                <li class="{{ Request::path() === 'HBO' ? 'current_item' : '' }}"><a href="/HBO">hbo</a></li>

                <li class="{{ Request::path() === 'dashboard' ? 'current_item' : '' }}"><a href="/dashboard">Dashboard</a></li>

                <li class="{{ Request::path() === 'FAQ' ? 'current_item' : '' }}"><a href="/faqs">FAQs</a></li>

                <li class="{{ Request::path() === 'profession' ? 'current_item' : '' }}"><a href="/profession">profession</a></li>

                <li class="{{ Request::path() === 'articles' ? 'current_item' : '' }}"><a href="/articles">Articles</a></li>
            </ul>
        </nav>

    </div>
</header>

@yield('content')


<div
    style="
        font-size: 50px;
        background-color: darkgrey;
        height: 200px;
        text-align: center;
      ">

    <header
        style="padding: 20px; color: white; font-size: 30px"
        class="header"
    >
        Contact me
    </header>

    <script
        src="https://kit.fontawesome.com/3e2ede3525.js"
        crossorigin="anonymous"
    ></script>

    <a href="https://reddit.com"
    ><i style="color: lightskyblue" class="fab fa-reddit"></i
        ></a>

    <a href="https://instragram.com"
    ><i style="color: lightskyblue" class="fab fa-instagram-square"></i
        ></a>

    <a href="https://google.com"
    ><i style="color: lightskyblue" class="fab fa-google"></i
        ></a>

    <a href="https://linkedin.com"
    ><i style="color: lightskyblue" class="fab fa-linkedin"></i
        ></a>
</div>

</body>
</html>

