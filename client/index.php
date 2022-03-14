<!DOCTYPE html>
<html lang="en">
<head>
<!--index.php = Landing Page-->
<?php $page="home"; include 'includes/header.php'; ?>
</head>
<body>
	<!--- Navigation -->
	    <?php include 'includes/nav.php'; ?>
	<!--- End Navigation -->

    <!--- Home Image -->
	<div class="main-image-div" data-ride="carousel">
            <img class="main-image" src="img/tamas.png" width="1300" height="500"></img>
            <h1 class="thirteen">13 Reasons Why I Overcame Depression 🔥</h1>
            <p class="sam-smith">Sam Smith</p>
            <ul class="topic-list">
                <li class="topic-1">Trending 🔥</li>
                <li class="topic-2">California</li>
                <li class="topic-3">COVID-19</li>
                <li class="topic-4">COVID-19</li>
                <li class="topic-5">Depression</li>
                <li class="topic-6">Depression</li>
                <li class="topic-7">Personal Life</li>
                <li class="topic-8">Success</li>
        </ul>
	</div>
    <!--- End Home Image -->
    <div class="latest">
        <ul class="latest-photos">
            <li class="latest-1"><img src="img/Rectangle 41.png" width="400" height="250" alt=""></li>
            <li class="latest-2"><img src="img/Rectangle 42.png" width="400" height="250" alt=""></li>
            <li class="latest-3"><img src="img/Rectangle 43.png" width="400" height="250" alt=""></li>
            <li class="latest-4"><img src="img/Rectangle 44.png" width="400" height="250" alt=""></li>
            <li class="latest-5"><img src="img/Rectangle.png" width="400" height="250" alt=""></li>
            <!--li class="latest-5"><img src="img/Rectangle 45.png" alt=""></li-->
            <section class="news-letter">
                <h1 class="news-header">Newsletter</h1>
                <input name="email" type="text" class="form-control" placeholder="Email Address" required>
                <button class="donate"> Subscribe</button>
            </section>
            <li class="latest-6">MORE FROM THE LATEST</li>
        </ul>
    </div>

    <div class="main-article">
        <img src="img/Rectangle 70.png" width="400" height="250" alt="">
        <p class="main-header">Feature Story</p>
        <p2></p2>
        <p3 class="author-date">23 Jul 2021 | Author</p3>
        <p4 class="article-text">"Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum."
        </p4>
    </div>
	
    <div class="second-article">
        <img class="the-rock" width="400" height="250" src="img/dwayne-the-rock- 1.png" alt="">
        <p>FEATURED AUTHOR</p>
        <p>DWAYNE JOHNSON</p>
        <p4>"Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore
            et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit 
            in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa
            qui officia deserunt mollit anim id est laborum."
        </p4>
    </div>

    <div class="word-signs" width="400" height="250">
        <ul class="word-list">
            <li class="word-1"><img width="400" height="250" src="img/Rectangle 44.png" alt=""><h1>13 Reasons Why I Overcame Depression 🔥</h1></li>
            <li class="word-2"><img width="400" height="250" src="img/Rectangle 43.png" alt=""><h1>13 Reasons Why I Overcame Depression 🔥</h1></li>
            <li class="word-3"><img width="400" height="250" src="img/Rectangle 44.png" alt=""><h1>13 Reasons Why I Overcame Depression 🔥</h1></li>
            <li class="word-4"><img width="400" height="250" src="img/Rectangle 56.png" alt=""><h1>13 Reasons Why I Overcame Depression 🔥</h1></li>
        </ul>
    </div>

    <div class="trending">
        <h class="trending-header">Trending Tags</h>
        <ul>
            <li class="trend-1"><img width="400" height="250" src="img/Rectangle 70.png" alt=""><h1>Technology</h1></li>
            <li class="trend-2"><img width="400" height="250" src="img/Rectangle 71 (1).png" alt=""><h1>Wellness</h1></li>
            <li class="trend-3"><img width="400" height="250" src="img/Rectangle 72.png" alt=""><h1>Parenting</h1></li>
        </ul>
    </div>

    <div class="quiz-proposal">
        <div class="question">Don't know where to start?</div>
        <div class="to-quiz">Take me to a quiz.</div>
    </div>

    <div class="links">
        <div class="who">
            <h1>Who are Dweebs?</h1>
            <p></p>
        </div>
        <div class="donate">
            <h1>Donate</h1>
            <p></p>
        </div>
        <div class="test">
        <h1>Test your dweeby!</h1>
        <p></p>
        </div>
    </div>
    <!--Footer-->
	<?php $page="home"; include 'includes/footer.php'; ?>
    <!--End Footer-->
  </body>
</html>