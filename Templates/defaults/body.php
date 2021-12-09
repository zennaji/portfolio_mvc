
<body class="body-light">
  <div class="container-fluid" id="container">
    <!--============================= Navbar ==========================-->
    <?php include_once "menu.php";  ?>
    <!-- Hero section -->
    <div class="hero_section">
      <div class="hero_text">
        <p class="hello">Hello, i'm</p>
        <h1 class="za_text">ZAKARIA ENNAJI</h1>
        <p class="hello">SOFTWARE DEVOLOPEMENT STUDENT</p>
        <!-- <p class="hello">FRONT-END DEVOLOPMENT</p> -->

        <div class="socialmedia">
          <a href=whatsapp:contact=31685686808@s.whatsapp.com&message="I'd like to chat with you"><img src="IMGS/social_media/whatsapp.png" width="25px" alt="whatsapp"></a>
          <a href="https://www.instagram.com/zakaria_ennaji_/"><img src="IMGS/social_media/instagram.png" width="25px" alt="instagram"></a>
          <a href="https://twitter.com/Zakaria_ennaji"><img src="IMGS/social_media/twitter.png" width="25px" alt="twitter"></a>
          <a href="https://www.facebook.com/zakaria.ennaji2"><img src="IMGS/social_media/facebook.png" width="25px" alt="facebook"></a>
        </div>
      </div>
      <div class="hero_foto">
        <img src="IMGS/me.png" width="350px">
      </div>
    </div>

    <!-- About me -->
    <h1 class="title" id="about-me">About me</h1>
    <div class="about_container">
      <div class="text_foto_container">
        <div class="about_text">
          <p>My name is Zakaria and I am 20 years old.
              Since I started my studies at the University of Information Technology in my country, the story of my passion for programming and computer science began.
              I enjoyed when I could fix small mistakes, it taught me a lot of patience. <br>
              Honestly, I didn't like being like everyone else in college,
              Go get French lessons, same routine every day,
              I wanted to be creative, I wondered, 'What if I left this country?
              After that I lived a new experience, I traveled to Holland to complete my studies there,
              I learned the Dutch language and immersed myself in the culture there, <br>
              This is me guys! Nothing can stop me from achieving my goals!
          </p>
        </div>
        <div class="about_foto">
          <img src="IMGS/zakaria.jpg">
        </div>
      </div>
      <div class="quotes_container">
        <div class="quote">
          <p>"Nooit terugvallen van het word, en nooit de hoop verliezen"</p>
          <p>-zakaria ennaji</p>
        </div>
        <div class="quote">
          <p>"Wees geïnteresseerd om belangrijk te zijn."</p>
          <p>-zakaria ennaji</p>
        </div>
        <div class="quote">
          <p>"Werk gewoon, en laat de anderen spreken."</p>
          <p>-zakaria ennaji</p>
        </div>
      </div>
    </div>

    <!-- Kennis en vaardigheden -->
    <h1 class="title">KENNIS EN VAARDIGHEDEN</h1>
    <div class="kennis_container">
      <div class="kennis">
        <h3>KENNIS</h3>
        <div class="kennis_text">
          <p>Web design</p>
          <p>Responsive web design</p>
          <p>OOP</p>
          <p>Mobile applications</p>
          <p>UI/UX</p>
        </div>
      </div>

      <div class="vaardigheden">
        <h3>VAARDIGHEDEN</h3>
        <div class="vaard_imgs">
          <img src="./IMGS/logos/html.png">
          <img src="./IMGS/logos/css.png">
          <img src="./IMGS/logos/js.png">
          <img src="./IMGS/logos/php.png">
          <img src="./IMGS/logos/flutter.png">
          <img src="./IMGS/logos/dart.png">
          <img src="./IMGS/logos/csharp.png">
          <img src="./IMGS/logos/mysq1l.png">
        </div>
      </div>

      <div class="tools">
        <h3>TOOLS </h3>
        <div class=" tools_imgs">
          <img src="./IMGS/logos/git.png">
          <img src="./IMGS/logos/vs.png">
          <img src="./IMGS/logos/vsc.png">
          <img src="./IMGS/logos/android_studio.png">
          <img src="./IMGS/logos/ps.png">
          <img src="./IMGS/logos/ai.png">
          <img src="./IMGS/logos/xd.png">
          <img src="./IMGS/logos/ae.png">
        </div>
      </div>
    </div>
    <!-- Projects -->
    <h1 class="title">Projects</h1>
    <p class="mini_title">here are a few projects i've worked on recently</p>
    <?php


    $r = getProject1();
    // var_dump($r);

    foreach ($r as $data) {

      ///////////////////////
      echo "<div class='projects_section'>";
      echo "<div class='all_projects'>";
      echo "<div class='project'>";
      echo "<img src=" . $data->image . " width='300px'>";
      echo "<div class='project_01_presentation'>";
      echo "<h3>" . $data->name . "</h3>";
      echo "<p>" . $data->discription . "</p>";
      echo "<a href=" . $data->link . "> <input id='btn'  type='button' value='See'> </a>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }



    ?>

    <p class="mini_title2">Want to see <a href="./projects" style="text-decoration: none;"> <span style="color: #d82955;">more?</span> </a> </p>