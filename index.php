<!doctype html>

<?php

require_once "php/dynamic-content.php"

?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
<head>
    <meta charset="utf-8">

    <title>Dominic Wild Portfolio</title>
    <meta name="description" content="Portfolio">
    <meta name="author" content="Dominic Wild">
    <meta property="og:image" content="/portfolioImages/portfolio-site.png" />

    <!--Needing for responsive media queries-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" href="portfolioImages/PortfolioFavi.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="js/jquery-3.3.1.slim.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/svg-injector.min.js"></script>

    <script src="js/index.js"></script>

</head>

<body>

<div class="dim-overlay">

</div>

<div class="background-texture">

</div>

<div class="container-fluid text-white text-center pb-3" id="header">
    <h1>
        Dominic Wild
    </h1>

    <div class="headline">
        <div>— Lancaster University Graduate —</div>
        <div>Looking to advance career as a Software Developer</div>
    </div>

    <div class="links">
        <?php

        foreach ($links as $link) {
            include("php/templates/quick-links.php");
        }

        ?>
    </div>

    <div class="key-details text-left">
        <h2>
            Experience in:
        </h2>
        <div class="row d-flex justify-content-center languages">
            <?php

            foreach ($languages as $language) {
                include("php/templates/language.php");
            }

            ?>
        </div>
        <div class="row justify-content-center languages">
            <?php

            foreach ($empty_languages as $language) {
                include("php/templates/empty-language.php");
            }

            ?>
        </div>
    </div>
</div>

<div class="container-fluid main-content text-white mt-3 px-5">

    <div class="about-me">
        <h1>About Me</h1>
        <p>
            I am a Lancaster University graduate completing a 4 years masters in computer science achieving a first class
            honours. Throughout my degree I studied many areas of computer science: Machine learning, natural language
            processing, media coding and processing, languages and compilation, human computer interaction, web
            applications, networking, distributed systems, software design etc.
        </p>
        <p>
            My interests are rooted in solving interesting problems. I have an interest mathematics, which I took as my
            minor in university. I would like to explore the area of data mining and machine learning at greater length due
            to its mathematical and predictive nature.
        </p>
        <p>
            A large part of my motivation in this profession is helping people, creating technological solutions which
            enrich or make peoples lives better. This motivation spans to my free time, I have voluntarily lead the
            moderator team of an anonymous chatroom where people seek help on their personal problems (anxiety, depression,
            relationships etc.).
        </p>
    </div>
    <div class="projects-info fade-in ">
        <h1>Projects</h1>
        <p>
            This portfolio website is one project I undertook. This portfolio is hosted on Amazon AWS and made mostly from
            scratch with Bootstrap. PHP is used to template some repetitive elements for easier modification and addition of
            new items. The main purpose of this site is to be a central hub for all my projects and important links.
        </p>
        <p>
            Listed below is some of the projects I have worked on. (The list isn't extensive and more projects may be added later)
        </p>
    </div>
    <div class="row projects speed-in">


        <?php

        foreach ($projects as $project) {
            include("php/templates/project.php");
        }

        ?>


    </div>

    <footer id="footer">

    </footer>

</body>
</html>