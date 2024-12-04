<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeking Synths</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            min-height: 100vh;
            font-family: Helvetica, Arial, sans-serif;
            color: #FFFFFF;
        }

        a {
            color: #FFFFFF;
            text-decoration: none;
        }

        /* Gradient Overlay */
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(196, 196, 196, 0) 24%, #000000 75%);
            pointer-events: none;
        }

        /* Container */
        .container {
            position: relative;
            z-index: 1;
            /* Ensure content is above the overlay */
            display: flex;
            flex-direction: column;
            padding: 5%;
            box-sizing: border-box;
            min-height: 100vh;
        }

        /* Left and Right Side */
        .left-side,
        .right-side {
            width: 100%;
        }

        /* Credits */
        .credits {
            margin-bottom: 2em;
        }

        .credits-title {
            font-size: 2em;
            font-weight: 700;
            margin: 0;
        }

        .credits-content {
            font-size: 1em;
            margin-top: 1em;
        }

        /* Logo */
        .logo {
            margin-bottom: 2em;
        }

        .logo img {
            max-width: 100%;
            height: auto;
        }

        /* Main Content */
        .main-content {
            margin-bottom: 2em;
        }

        .main-text {
            font-size: 1.2em;
            line-height: 1.5em;
            margin-bottom: 1em;
        }

        /* Get in Touch */
        .get-in-touch a {
            font-size: 1.5em;
            font-weight: 700;
            text-decoration: underline;
        }

        /* Responsive Layout */
        @media screen and (min-width: 768px) {
            .container {
                flex-direction: row;
                align-items: flex-start;
            }

            .left-side,
            .right-side {
                width: 50%;
            }

            .left-side {
                margin-right: 5%;
            }

            .credits-title {
                font-size: 2.5em;
            }

            .main-text {
                font-size: 1.5em;
            }

            .get-in-touch a {
                font-size: 2em;
            }
        }

        @media screen and (min-width: 1024px) {
            .credits-title {
                font-size: 3em;
            }

            .main-text {
                font-size: 2em;
            }

            .get-in-touch a {
                font-size: 2.5em;
            }
        }
    </style>
</head>

<body>
    <!-- Gradient Overlay -->
    <div class="gradient-overlay"></div>

    <!-- Main Content Container -->
    <div class="container">
        <!-- Left Side: Credits and Logo -->
        <div class="left-side">
            <!-- Credits -->
            <div class="credits">
                <p class="credits-title">SEEKING SYNTHS</p>
                <p class="credits-content">
                    Host: Jesse Beaman<br>
                    Director: Sam Mims<br>
                    Editor & Director of Photography: Lucas Fowler
                </p>
            </div>

            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Seeking Synths Logo">
            </div>
        </div>

        <!-- Right Side: Main Text and Get in Touch -->
        <div class="right-side">
            <!-- Main Text -->
            <div class="main-content">
                <p class="main-text">
                    <strong>Seeking Synths</strong> is a captivating video series featuring 30-minute episodes in the
                    spirit of Anthony
                    Bourdain, where the host visits renowned musicians to explore their collections of vintage
                    synthesizers
                    and uncover how these iconic instruments have shaped their music.
                </p>
                <p class="main-text">
                    The show delves into the guests' passion for vintage synthesizers and the distinctive sounds they
                    create, revealing the stories behind the music, the musicians, and these rare instruments. Musicians
                    will marvel at the impressive collections, while non-musicians will enjoy uncovering the artists
                    behind
                    some of their favorite tracks.
                </p>
            </div>

            <!-- Get in Touch -->
            <div class="get-in-touch">
                <a href="mailto:your-email@example.com">Get in touch!</a>
            </div>
        </div>
    </div>
</body>

</html>