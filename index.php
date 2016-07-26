<?php

if($_POST["submit"]) {
    $recipient="redcloudsaboveus01@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail:
    $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From:
    $sender <$senderEmail>");

    $thankYou="<p>Thank You! Your message has been
sent.</p>";
}

?><!DOCTYPE HTML>

<html>
<head>
    <title>Dana's Web Design</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <link rel="short icon" href="/images/LEGO2.ico"/>
</head>
<body>

<!-- Header -->
<div id="header">

    <div class="top">

        <!-- Logo -->
        <div id="logo">
            <span class="image avatar48"><img src="images/final.ico" alt="" /></span>
            <h1 id="title">Dana Yazzie</h1>
            <p>Junior Web Developer</p>
        </div>

        <!-- Nav -->
        <nav id="nav">
            <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

            -->
            <ul>
                <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
                <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
                <li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
                <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
            </ul>
        </nav>

    </div>

    <div class="bottom">

        <!-- Social Icons -->
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="https://www.facebook.com/danaswebdesigns/?skip_nax_wizard=true" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
            <li><a href="https://www.instagram.com/danaswebdesigns/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="mailto:redcloudsaboveus01@gmail.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
        </ul>

    </div>

</div>

<!-- Main -->
<div id="main">

    <!-- Intro -->
    <section id="top" class="one dark cover">
        <div class="container">
            

            <header>
                <h2 class="alt">danas web design</h2>
                <div class="img-text">
                    <img src="images/new2.png" alt="logo" class="img-responsive img-circle pic displayed"/>
                </div>
            </header>

            <footer>
                <a href="#portfolio" class="button scrolly">Learn More</a>
            </footer>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="two">
        <div class="container">

            <header>
                <h2>Portfolio</h2>
            </header>

            <p>Small Projects. More in the future, keep checking the website and you'll soon be amazed. </p>

            <div class="row">
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/firstSite.JPG" alt="" /></a>
                        <header>
                            <h3>First Site Design </h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/basics.JPG" alt="" /></a>
                        <header>
                            <h3>Basic HTML Design</h3>
                        </header>
                    </article>
                </div>
                <div class="4u 12u$(mobile)">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/restaurant.JPG" alt="" /></a>
                        <header>
                            <h3>HTML/CSS Design</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/Javascript.JPG" alt="" /></a>
                        <header>
                            <h3>Javascript Design</h3>
                        </header>
                    </article>
                </div>
                <div class="4u$ 12u$(mobile)">
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/quiz.JPG" alt="" /></a>
                        <header>
                            <h3>Javascript Design</h3>
                        </header>
                    </article>
                    <article class="item">
                        <a href="#" class="image fit"><img src="images/java2.JPG" alt="" /></a>
                        <header>
                            <h3>PHP/Javascript Design</h3>
                        </header>
                    </article>
                </div>
            </div>

        </div>
    </section>

    <!-- About Me -->
    <section id="about" class="three">
        <div class="container">

            <header>
                <h2>About Me</h2>
            </header>

            <div class="about">
                <a href="#" class="image featured"><img src="images/about.JPG" alt="" /></a>

                <p>Ya'at'eeh, shi ei Dana Yazzie yinishye. Ta'neszahnii nishli, Todichinii bashishchiin, Kinyaa'nii dashicheii, Naashashi dashinali.
                Hello, my name is Dana. Im currently a Navajo student that has graduated from Cultivating Coders.
                I grew up in Carson, NM located about 22 miles south from Bloomfield, NM. When i was growing up I wanted to learn everything i
                could so i learned from my dad and my elders as best as i could; leading me to great storytelling and learning
                from this place we call world. I then graduated from Bloomfield High School in 2011. Ive attended UNM for a year
                hoping to major in Biology but i decided to change my major to Environmental Science. Ive been helping my church as well since then.
                I've been to many places; until now i have settled in Gallup, NM.</br>
                One day i received a call from my priest who mentioned a totally new thing
                to me which was computer coding. I took the deal and decided to go for it because at
                that time it seemed interesting and also i wanted to learn something new. Since Day 1
                of this 8-week bootcamp course with the Cultivating Coders program in Farmington, NM it
                has been an awesome experience for me as well as the others. Im glad to be a part of the
                coding world. What im hoping to do within the future for myself is learn everything i can
                about web development and start either teaching others about it or working for a company
                that needs their website created or redone. Im looking forward to my success.</p>
        </div>
        </div>
        
    </section>
    <!-- Contact -->
    <section id="contact" class="four">
        <div class="container">

            <header>
                <h2>Contact</h2>
            </header>

            <p>Feel free to inquire about any question or comments you may have and I will get back to you as soon as I can.</p>

            <form method="post" action="index.php">
                <div class="row">
                    <div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
                    <div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
                    <div class="12u$">
                        <textarea name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="tran">
                        <div class="12u$">
                            <input type="submit" value="Send Message" />
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </section>
</div>

<!-- Footer -->
<div id="footer">

    <!-- Copyright -->
    <ul class="copyright">
        <li>&copy; 2016 danas web design</li><li>Design: <a href="">HTML5 UP</a></li>
    </ul>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollzer.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>