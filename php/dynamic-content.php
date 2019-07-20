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
        "icon_project" => "portfolioImages/icons/bootstrap/bootstrap-plain.svg",
        "description" => "Creating a social network site and this portfolio!",
        "title" => "Bootstrap",
    ],
    "html5" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/html5.svg",
        "icon_project" => "portfolioImages/icons/html5/html5-original-wordmark.svg",
        "description" => "",
        "title" => "HTML5",
        "color" => "#e44d26",
    ],
    "css3" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/css3.svg",
        "icon_project" => "portfolioImages/icons/css3/css3-original-wordmark.svg",
        "description" => "",
        "title" => "CSS3",
        "color" => "#1b73ba",
    ],
    "cakephp" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/cakephp.svg",
        "icon_project" => "portfolioImages/icons/cakephp/cakephp-original.svg",
        "description" => "Used in making a social network site.",
        "title" => "CakePHP Framework",
        "color" => "#d33c45",
    ],
    "php" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/php.svg",
        "icon_project" => "portfolioImages/icons/php/php-original.svg",
        "description" => "",
        "title" => "PHP",
        "color" => "#4d598f",
    ],
    "javascript" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/javascript.svg",
        "icon_project" => "portfolioImages/icons/javascript/javascript-original.svg",
        "description" => "",
        "title" => "JavaScript",
        "color" => "#f7e018",
    ],
    "java" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/java.svg",
        "icon_project" => "portfolioImages/icons/java/java-original.svg",
        "description" => "Made distributed auction system, JFSML game etc. (4 years)",
        "title" => "Java",
        "color" => "#007396",
    ],
    "python" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/python.svg",
        "icon_project" => "portfolioImages/icons/python/python-original.svg",
        "description" => "Machine learning: Data processing (PCM), k means (fuzzy) etc. ",
        "title" => "Python",
    ],
    "c++" => [
        "icon" => "/portfolioImages/icons/cplusplus/cplusplus-plain.svg",
        "icon_project" => "portfolioImages/icons/cplusplus/cplusplus-original.svg",
        "description" => "Micro:bit Mesh network protocol and minor projects",
        "title" => "C++",
    ],
    "c" => [
        "icon" => "/portfolioImages/icons/c/c-plain.svg",
        "icon_project" => "portfolioImages/icons/c/c-original.svg",
        "description" => "",
        "title" => "C",
    ],
    "c#" => [
        "icon" => "/portfolioImages/icons/csharp/csharp-plain.svg",
        "icon_project" => "portfolioImages/icons/csharp/csharp-original.svg",
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
        "title" => "Mat Lab",
    ],
    "mysql" => [
        "icon" => "https://cdn.jsdelivr.net/npm/simple-icons@latest/icons/mysql.svg",
        "icon_project" => "portfolioImages/icons/mysql/mysql-original-wordmark.svg",
        "description" => "",
        "title" => "MySQL",
    ],
    "aws" => [
        "icon" => "/portfolioImages/icons/amazonwebservices/amazonwebservices-plain-wordmark.svg",
        "icon_project" => "portfolioImages/icons/amazonwebservices/amazonwebservices-original-wordmark.svg",
        "description" => "",
        "title" => "Amazon Web Services",
    ],
    "unity" => [
        "icon" => "/portfolioImages/unity.svg",
        "icon_project" => "/portfolioImages/unity.svg",
        "description" => "",
        "title" => "Unity",
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
    "Krooza" => [
        "name" => "Krooza: 2D Twin Stick Shooter",
        "description" => "A game developed through the Java's JSFML library. This game was developed alongside some friends of mine. Art was made by a friend and majority of the coding was done by me.
        
        <p>
        The experience taught me a lot about the importance and effectiveness of object orientated design. Before development I made a UML diagram to plan out the object design, with inheritance and along with how the code would flow, what particular classes and objects should generally do, how the engine would work, any extra challenges we may face.
        </p>
        
        <p>
        The parts of the game I coded were: 
        <ul>
        <li>The Game Engine</li>
        <li>4 Coordinated Enemy AI Types</li>
        <li>Car Modification System (swap different tyres, weapons (primary and secondary weapons), armour, car skins)</li>
        <li>Physics Engine</li>
        <li>Rendering Engine</li>
        <li>The Game's HUD</li>
        <li>Two Game Modes (Hoard and Survival Mode)</li>
        </ul>
        </p>
        
        <p>
        Working within a group also meant it was important to keep code well documented and commented. I therefore kept all code commented and up to date. I scheduled regular communication and meetings to ensure we were making steady progress, catching problems early.
        </p>
        <p>
        The result was a game with a refined twin stick combat system. The game does however lack content to consider it a full fledged game, however the baseline exists for this game to be developed into something official.
        </p>
        ",
        "github" => "https://github.com/dominicwild/Krooza",
        "start_date" => strtotime("October 2016"),
        "image" => "portfolioImages/gifs/krooza.gif",
        "languages" => [
            $languages["java"],
        ],
    ],

    "HEART" => [
        "name" => "Augmented Reality Mobile Application",
        "description" => "This was a group project named HEART (Historical Experiences in Augmented Reality). The application was developed in Unity using a library called Vuforia which specializes in the development of AR applications. 
        
        <p>
        HEART's goal was to digitally reconstruct old heritage sites and provide a innovative approach to delivering information about such a site. We developed a prototype, not having the technical expertise or resources to achieve the full product. 
        </p>
        <p>
        My responsibilities in this project were coding parts of the application, such as scripts to play media, progress bar & its trigger, researching voice controls etc. I also designed an experiment to test the usability of the application following a validated scale for measuring usability, which I adapated specifically for the experiment. I gather participants, explained the procedure and statistically analysed the results.
        </p>
        <p>
        Meeting deadlines within this project was of critical importance, therefore I made and managed a Slack to keep track of everyone's work. I integrated this will Google Doc notifications to ensure the team was always aware of when new files were added to our shared resources. The project demonstrated the importance of keeping active communication with a team to ensure a project is on track and help team members with any bumps along the way. Along with asking for help from people on the team with more Unity experience than me, they were a valuable source of learning.
        </p>
        <p>
        The conclusion of the project was a proof of concept AR application with voice assistant, hot spots, voice controls,audio and video logs, animated historical scenes etc. that highlighted the future challenges such an application would face.
        </p>
        ",
        "github" => "https://github.com/dominicwild/HEART",
        "start_date" => strtotime("October 2018"),
        "image" => "portfolioImages/gifs/heart.gif",
        "languages" => [
            $languages["unity"], $languages["c#"],
        ],
    ],
];

usort($projects, function ($p1, $p2) {
    $a = $p1["start_date"];
    $b = $p2["start_date"];

    return -($a - $b); //Sort highest to lowest
});


?>