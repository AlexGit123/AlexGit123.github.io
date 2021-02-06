<html>
  <head>
    <link rel="stylesheet" href="/../css/style.css" />
  </head>

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
          <li><a href="/">Home</a></li>

          <li><a href="/HBO">hbo</a></li>

          <li><a href="/dashboard">Dashboard</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <body>
    <div style="text-align: center; background-color: white; height: 550px">
      <h1>Frequently Asked Questions</h1>

      <ol>
       @foreach($faqs as $faq)
              <details style="padding-bottom: 10px">

          <summary>
              {{ $faq->question}}
          </summary>

          <p>
              {{ $faq->answer}}
          </p>

          <p>
                {{ $faq->link}}
          </p>

        </details>

       @endforeach
      </ol>
    </div>

    <div
      style="
        font-size: 50px;
        background-color: darkgrey;
        height: 200px;
        text-align: center;
      "
    >
      <header
        style="padding: 20px; color: white; font-size: 30px"
        class="header"
      >
        Contact me!
      </header>

      <script>
        src = "https://kit.fontawesome.com/3e2ede3525.js";
        crossorigin = "anonymous";
      </script>

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
