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
        "icon" => "/portfolioImages/icons/cplusplus/cplusplus-plain.svg",
        "description" => "Micro:bit Mesh network protocol and minor projects",
        "title" => "C++",
    ],
    "c" => [
        "icon" => "/portfolioImages/icons/c/c-plain.svg",
        "description" => "",
        "title" => "C",
    ],
    "c#" => [
        "icon" => "/portfolioImages/icons/csharp/csharp-plain.svg",
        "description" => "Unity Augmented Reality App using Vuforia",
        "title" => "C#",
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
    "mysql" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/mysql.svg",
        "description" => "",
        "title" => "MySQL",
    ],
    "aws" => [
        "icon" => "/portfolioImages/icons/amazonwebservices/amazonwebservices-plain-wordmark.svg",
        "description" => "",
        "title" => "Amazon Web Services",
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
        "github" => "https://github.com/dominicwild/Portfolio-Site",
    ],
    "Social Network" => [
        "name" => "Enterprise Social Network (ESN)",
        "description" => "
            This project was undertaken as part of my university placement. It involved developing a social networking site through the full software development life cycle (Analyis, design, implementation, testing and evaluation). The company was facing some internal social communication problems, no knew what events were happening or what their co-workers were up to. Initial need-finding took place via interviews and a company wide questionnaire, data quantized, analyzed and requirements were derived, among a Minimum Viable Product (MVP) plan.
            <p>
            The requirements were designed and then implemented successfully, meeting the MVP. The project later went on to form part of my dissertation designing an incremental development technique for Enterprise Social Networks. The ESN was made with CakePHP, which sped up development and taught me a lot about web development, the general architecture and approaches most common frameworks employ to streamline development.
            </p>
            <p>
            During the testing phase, the company was unable to deploy my solution on their services in good time. Therefore over a weekend I decided to move my solution to Amazon AWS. This was my first time deploying a web server on a linux distribution, it involved lots of rapid learning and was a very fun experience. The knowledge I gained from this experience was invaluable, as I'm utilizing it right now, to write and host this portfolio website!
            </p>
            <p>
            The finished product was feature complete containing the following features:
            <ul>
                <li>OAuth2 Google authentication</li>
                <li>User Posts and Comments</li>
                <li>Image Attachments for Posts</li>
                <li>User Created Polls</li>
                <li>Recent Activity Panel</li>
                <li>Event System (for organising social events)</li>
                <li>Group System (for categorizing events and posts)</li>
                <li>Google Calendar Integration (for events)</li>
                <li>Administration Page</li>
                <li>HTML Email Notifications for various alerts (new events, comments, posts etc)</li>
                <li>User Profiles</li>
                <li>Search Function</li>
            </ul>
            </p>
        ",
        "start_date" => strtotime("January 2019"),
        "image" => "portfolioImages/gifs/social.gif",
        "languages" => [
            $languages["php"], $languages["cakephp"], $languages["mysql"], $languages["bootstrap"], $languages["css3"], $languages["html5"]
        ],
        "github" => "https://github.com/dominicwild/SocialNetwork",
        "liveDeployment" => "social",
    ],
    "Snooker Game" => [
        "name" => "Snooker Pool Game",
        "description" => "A basic project that was developed for fun entirely through Java. The Snooker game was used as a way to practice object orientated design and tackle the challenges associated with building a game (such as dealing with frames and game logic).
        
        <p>
        The conclusion of this project is a fully implemented game of Snooker, tested for following all the rules correctly.
        </p>
        
        ",
        "github" => "https://github.com/dominicwild/Java-Pool-Game",
        "start_date" => strtotime("April 2016"),
        "image" => "portfolioImages/gifs/snooker.gif",
        "languages" => [
            $languages["java"],
        ],
    ],
    "Micro:bit Mesh" => [
        "name" => "Micro:bit Mesh",
        "description" => "Micro:bit Mesh was a mesh network protocol I developed for the BBC Micro:bit. It was a feature added with the aim to teach kids about the computing concept of networking, giving them a tool to play around with.
        
        <p>
        The project involved very low level C/C++ programming using the Micro:bits run time called codal. This project stressed reading and understanding how, at a low level, embedded systems hardware could be manipulated to achieved the desired effects, working a lot with the Micro:bits radio. One of the biggest challenges I faced while doing this project was debugging the Micro:bits, as its difficult to know what programming logic/state each system was in. To aide in this, I made use of the Micro:bits LED's and serial I/O to print debug data.
        </p>
        <p>
        Feasibility tests, design, implementation and evaluation of the protocol was conducted. The protocol was based off Glossy, a controlled packet flooding approach to mesh networks that came up in research. 
        </p>
        <p>
        The conclusion of this project was that this approach is possible, however encountered strange patterns of high packet loss in correlation to distance/physical network topology and therefore requires more thorough investigation from a physics perspective.
        </p>
       
        ",
        "start_date" => strtotime("October 2017"),
        "image" => "portfolioImages/microbit.jpg",
        "github" => "https://github.com/dominicwild/MicroBitMesh",
        "languages" => [
            $languages["c++"], $languages["c"],
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