<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/foundation.css"/>

    <script src="js/app.js"></script>
    <script src="js/foundation.js"></script>

</head>
<body>

<!-- Main Navigation -->
<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle></button>
    <div class="title-bar-title">Menu</div>
</div>

<div class="top-bar" id="example-menu">
    <div class="top-bar-left">
        <ul class="menu" data-menu>
            <li>
                <a href="#me" class="menu-text">Steve Saylor</a>
            </li>
        </ul>

    </div>
    <div class="top-bar-right">
        <ul class="menu" data-menu>

            <li>
                <a href="#work">Work</a>
            </li>
            <li>
                <a href="#projects">Projects</a>
            </li>
            <li>
                <a href="#testimonials">Testimonials</a>
            </li>
        </ul>
    </div>
</div>

<!-- Top Row - basic info -->
<div id="me">
    <h1>Me!</h1>
    <h3>Some tagline about me will go here and maybe a picture</h3>
</div>


<!-- Work related stuff - overview of the WPRDC and maybe some work-related github links -->
<div id="work" style="background: slategray;">
    <h1>Work!</h1>
    <h3>Stuff about work will go here.</h3>
    <h3>Specific github links, links to running projects, etc..</h3>
</div>
<!-- I'm going to use php and a list of links to some maps I made to have them shuffle over time or something -->
<div id="maps">
    <h1>Maps!</h1>
    <p>I'll cycle through some maps here since they look cool and are related to my work.</p>
    <iframe width="100%" height="360" frameborder="0"
            src="https://wprdc.cartodb.com/viz/24397410-dccd-11e5-82a8-0ea31932ec1d/embed_map">
    </iframe>
</div>
<div id="projects">
    <h1>Projects</h1>
    <h3>I'll highlight personal and school projects here.</h3>
    <h3>Similar to work with github links, maybe code snippets.s</h3>
</div>
<div id="testimonials", style="background-color: slategray;">
    <h1>Testimonials</h1>
    <h3>Fictitious testimonials from coworkers and friends etc.  Hopefully, it will be decently funny!</h3>
</div>

<div id="footer">
    <h1>Footer!</h1>
    <h3>Copywrite stuff and mayble social media links.</h3>
</div>

<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>

