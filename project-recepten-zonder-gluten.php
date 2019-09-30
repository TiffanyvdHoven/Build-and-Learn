<?php include '_header.php'; ?>
<!-- pagina sepecifieke gegevens header SEO -->
<meta name="description" content="Bekijk de case studie van een website die wij hebben gemaakt voor een klant in regio Tilburg.">
<meta name="keywords" content="website laten bouwen, professionele website laten maken, website laten ontwerpen, webdesign, webdevelopment, website optimalisatie, zoekmachine optimalisatie, website check, website speed, website laten maken tilburg">
<title> Tiffany van den hoven | Project recepten zonder gluten </title>
</head>

  <body>

    <?php include '_nav.php'; ?>

    <main>

      <?php
      $projectNaam = "Receptenzondergluten.nl";
      $projectURL = "https://receptenzondergluten.nl";
      $projectTitle = "Glutenvrije recepten website";
      $projectText = "Recepten zonder gluten is het platform voor iedereen die glutenvrij moet eten. Voor dit platform ontwikkelde ik een huisstijl en website met het content management system processwire zodat makkelijk zelf recepten en blogpost toegevoegd kunnen worden. De volledig responsive website is daarnaast voorzien van een recepten zoek functie waarbij op type recept en/of ingredient of gerecht gezocht kan worden.";
      $img1 = "img/recepten-website-mobile.jpg";
      $img2 = "img/recepten-website-laptop.jpg";
      $img3 = "img/recepten-website-tablet.jpg";
      $img1_alttag = "text";
      $img2_alttag = "hallo";
      $img3_alttag = "welcome 30";
      ?>

      <section class="intro ">
        <div class="wrapper project-page-wrapper ">
          <h1 class="intro-h1 project-page-h1"> <?php echo $projectNaam ?> </h1>
          <a href="<?php echo $projectURL?>" target="_blank"> <button class="button project-page-button">  Bezoek de website </button> </a>
          <div class="flexbox clear-both">

          <div class="project-page-text">
            <h2 class="black-text align-left"> <?php echo $projectTitle ?> </h2>
            <p class="align-left"> <?php echo $projectText ?> </p>
            <img class="project-img-grid" src="<?php echo $img1 ?>" alt="<?php echo $img1_alttag ?>">
            <img class="project-img-grid" src="<?php echo $img2 ?>" alt="<?php echo $img2_alttag ?>">
            <img class="project-img-grid" src="<?php echo $img3 ?>" alt="<?php echo $img3_alttag ?>">
          </div>
        </div>
      </div>
    </section>


    <section class="contact" id="contact">
      <div class="wrapper">
        <!-- contact sectie -->
      </div>
    </section>

    </main>

    <?php include '_footer.php'; ?>

  </body>
</html>
