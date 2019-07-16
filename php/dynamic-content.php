<?php
/**
 * User: Dominic
 * Date: 14/07/2019
 * Time: 00:22
 */

//Easily add or update language container
$languages = [
    "bootstrap" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/bootstrap.svg",
        "description" => "Creating a social network site and this portfolio!",
        "title" => "Bootstrap",
    ],
    "html5" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/html5.svg",
        "description" => "",
        "title" => "HTML5",
        "color" => "#e44d26",
    ],
    "css3" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/css3.svg",
        "description" => "",
        "title" => "CSS3",
        "color" => "#1b73ba",
    ],
    "cakephp" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/cakephp.svg",
        "description" => "Used in making a social network site.",
        "title" => "CakePHP Framework",
        "color" => "#d33c45",
    ],
    "php" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/php.svg",
        "description" => "",
        "title" => "PHP",
        "color" => "#4d598f",
    ],
    "javascript" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/javascript.svg",
        "description" => "",
        "title" => "JavaScript",
        "color" => "#f7e018",
    ],
    "java" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/java.svg",
        "description" => "Made distributed auction system, JFSML game etc. (4 years)",
        "title" => "Java",
        "color" => "#007396",
    ],
    "python" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/python.svg",
        "description" => "Machine learning: Data processing (PCM), k means (fuzzy) etc. ",
        "title" => "Python",
    ],
    "c++" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/cplusplus.svg",
        "description" => "Micro:bit Mesh network protocol and minor projects",
        "title" => "C++",
    ],
    "R" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/r.svg",
        "description" => "Used for statistical analysis and plots",
        "title" => "R",
    ],
    "matlab" => [
        "icon" => "portfolioImages/matlab.svg",
        "description" => "Used for statistical analysis, plots, media coding and processing",
        "title" => "R",
    ],
];

$empty_languages = [];

foreach ($languages as $language) {

    if (!isset($language["description"]) || $language["description"] === "") {
        $empty_languages[] = $language;
    }
}


$links = [
    "github" => [
        "link" => "https://github.com/dominicwild",
        "image" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/github.svg",
    ],
    "linkedin" => [
        "link" => "https://www.linkedin.com/in/dominic-wild-563576178/",
        "image" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/linkedin.svg",
    ],
    "cv" => [
        "link" => "/files/DominicWildCV.pdf",
        "image" => "/portfolioImages/cv3.svg",
    ],
];


$projects = [
    "Portfolio Site" => [
        "name" => "Portfolio Site",
        "description" => "
        I made this site completely from scratch, only using Bootstrap. I took this opportunity to make the site in a mobile first manner, making it completely responsive was a goal of this project. 
        <p> 
        With this project I also put to use some lessons I learned in my prior social network project. Some key aspects I explored in this project were: Use of PHP for templating repetitive page elements, using Google fonts, using CSS animations, responsive design and content management. 
        </p>
        <p>
        One design decision I made on this site was not to use a database. As this seemed overkill for a static website (no complex data or data relationships), at least at the scale it is now. Being much easier to manage with PHP arrays that dynamically create content, essentially a database as PHP arrays instead.
        </p>
        <p>
        This website will continue to grow over time as more projects get developed. At the moment the layout is fairly simple and I plan to evolve it into something more visually appealing in the future as a passion project. Some usability improvements are also planned.
        </p>
        ",
        "start_date" => strtotime("July 2019"),
        "image" => "portfolioImages/portfolio-site.png",
        "languages" => [
            $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
    ],
    "Social Network" => [
        "name" => "Social Network",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque enim vel mauris tempor, sed tincidunt nunc ullamcorper. Aliquam suscipit ante laoreet, viverra lorem ac, finibus nibh. Phasellus sed turpis a enim vestibulum varius. Sed a velit ut est molestie vehicula. Vestibulum imperdiet pellentesque enim at iaculis. Fusce purus erat, congue vitae egestas vel, accumsan non ex. Donec maximus elit eget turpis viverra, et dictum erat lobortis. Duis consequat suscipit eros, in sagittis nulla dictum non. Integer sed est sed ligula pellentesque varius quis non massa. Ut mollis aliquet eleifend. Suspendisse varius, metus a porttitor gravida, nulla eros fringilla ex, eu facilisis tellus urna eu odio. Maecenas vel tortor nec neque sodales hendrerit. Interdum et malesuada fames ac ante ipsum primis in faucibus. In pharetra, nibh vel consectetur sagittis, ipsum velit tempus sem, a blandit quam metus ac nibh. Sed id nunc massa.

                            Praesent in placerat purus. Maecenas fermentum lobortis ante vel sodales. Sed dolor sapien, scelerisque eget augue at, sollicitudin condimentum odio. Donec turpis felis, sagittis nec nisl sit amet, facilisis elementum nibh. Phasellus viverra, justo et auctor euismod, nulla dolor congue erat, at maximus tortor est sit amet turpis. Nulla nunc sem, tempor ac risus ut, vehicula sodales nisi. Mauris feugiat, sapien ac laoreet accumsan, eros urna gravida tellus, et posuere justo lorem id neque.

                            Suspendisse potenti. Nullam nec cursus metus, sed gravida est. Integer mattis quam quis velit vehicula, in dignissim odio feugiat. Vivamus quis nulla sagittis justo dictum rutrum ac eget urna. Phasellus ut lectus id massa laoreet fringilla. Pellentesque lobortis enim non aliquet lacinia. Morbi mattis felis sit amet bibendum imperdiet. Quisque dictum, dolor ultricies lobortis eleifend, velit mi venenatis urna, quis facilisis sem justo ut sapien. Sed eget elementum leo. Fusce sit amet augue elit. Nulla eget ullamcorper nisi.",
        "start_date" => strtotime("April 2019"),
        "image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["cakephp"], $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
        "github" => "www.google.com",
        "liveDeployment" => "wwww.dominicwild.com/social/",
    ],
    "Social Network3" => [
        "name" => "Social Network",
        "description" => "Suspendisse potenti. Nullam nec cursus metus, sed gravida est. Integer mattis quam quis velit vehicula, in dignissim odio feugiat. Vivamus quis nulla sagittis justo dictum rutrum ac eget urna. Phasellus ut lectus id massa laoreet fringilla. Pellentesque lobortis enim non aliquet lacinia. Morbi mattis felis sit amet bibendum imperdiet. Quisque dictum, dolor ultricies lobortis eleifend, velit mi venenatis urna, quis facilisis sem justo ut sapien. Sed eget elementum leo. Fusce sit amet augue elit. Nulla eget ullamcorper nisi.",
        "start_date" => strtotime("January 2019"),
        "image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["cakephp"], $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
    ],
    "Social Network4" => [
        "name" => "Social Network",
        "description" => "Lorem iset turpis viverra, efeugiat. Vivamus quis nulla sagittis justo dictum rutrum ac eget urna. Phasellus ut lectus id massa laoreet fringilla. Pellentesque lobortis enim non aliquet lacinia. Morbi mattis felis sit amet bibendum imperdiet. Quisque dictum, dolor ultricies lobortis eleifend, velit mi venenatis urna, quis facilisis sem justo ut sapien. Sed eget elementum leo. Fusce sit amet augue elit. Nulla eget ullamcorper nisi.",
        "start_date" => strtotime("January 2019"),
        "image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["cakephp"], $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
    ],
    "Social Network5" => [
        "name" => "Social Network",
        "description" => "Lorem iset turpis viverra, efeugiat. Vivamus quis nulla sagittis justo dictum rutrum ac eget urna. Phasellus ut lectus id massa laoreet fringilla. Pellentesque lobortis enim non aliquet lacinia. Morbi mattis felis sit amet bibendum imperdiet. Quisque dictum, dolor ultricies lobortis eleifend, velit mi venenatis urna, quis facilisis sem justo ut sapien. Sed eget elementum leo. Fusce sit amet augue elit. Nulla eget ullamcorper nisi.",
        "start_date" => strtotime("February 2019"),
        "image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["cakephp"], $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
    ],
    "Social Network6" => [
        "name" => "Social Network",
        "description" => "Lorem iset turpis viverra, efeugiat. Vivamus quis nulla sagittis justo dictum rutrum ac eget urna. Phasellus ut lectus id massa laoreet fringilla. Pellentesque lobortis enim non aliquet lacinia. Morbi mattis felis sit amet bibendum imperdiet. Quisque dictum, dolor ultricies lobortis eleifend, velit mi venenatis urna, quis facilisis sem justo ut sapien. Sed eget elementum leo. Fusce sit amet augue elit. Nulla eget ullamcorper nisi.",
        "start_date" => strtotime("January 2019"),
        "project_image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["cakephp"], $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
    ],
    "Social Network7" => [
        "name" => "Social Network",
        "description" => "Lorem iset turpis viverra, efeugiat. Vivamus quis nulla sagittis justo dictum rutrum ac eget urna. Phasellus ut lectus id massa laoreet fringilla. Pellentesque lobortis enim non aliquet lacinia. Morbi mattis felis sit amet bibendum imperdiet. Quisque dictum, dolor ultricies lobortis eleifend, velit mi venenatis urna, quis facilisis sem justo ut sapien. Sed eget elementum leo. Fusce sit amet augue elit. Nulla eget ullamcorper nisi.",
        "start_date" => strtotime("January 2019"),
        "image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["cakephp"], $languages["php"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
    ],
];

usort($projects, function ($p1, $p2) {
    $a = $p1["start_date"];
    $b = $p2["start_date"];

    return -($a - $b); //Sort highest to lowest
});


?>