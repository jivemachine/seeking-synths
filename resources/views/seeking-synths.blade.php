<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Seeking Synths</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            /* Desktop Styles */
            width: 1440px;
            height: 1491px;
            margin: 0;
            padding: 0;
            background-image: url('{{ asset('images/background.png') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Gradient Overlay */
        .gradient-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 1440px;
            height: 1491px;
            background: linear-gradient(90deg, rgba(196, 196, 196, 0) 24%, #000000 75%);
            pointer-events: none;
        }

        /* General Styles */
        p,
        a {
            font-family: Helvetica;
            letter-spacing: 0.04em;
            text-decoration: none;
            color: #FFFFFF;
        }

        /* Positioning Containers for Desktop */
        .credits {
            position: absolute;
            top: 60px;
            left: 41px;
            width: 389px;
            height: 100px;
        }

        .credits-title {
            font-size: 16.51px;
            font-weight: 700;
            line-height: 20px;
            margin: 0;
        }

        .credits-content {
            font-size: 16.51px;
            font-weight: 400;
            line-height: 20px;
            margin-top: 20px;
        }

        .logo {
            position: absolute;
            top: 223px;
            left: 237px;
            width: 305px;
            height: 305px;
        }

        .logo img {
            width: 100%;
            height: 100%;
        }

        .main-content {
            position: absolute;
            top: 59px;
            left: 636px;
            width: 764px;
            height: 912px;
        }

        .main-content-large-text {
            font-size: 50px;
            font-weight: 400;
            line-height: 57.5px;
            margin: 0;
        }

        .main-content-small-text {
            font-size: 30px;
            font-weight: 400;
            line-height: 34.5px;
            margin-top: 60px;
        }

        .get-in-touch {
            position: absolute;
            width: 336px;
            height: 34px;
            top: 993px;
            left: 635px;
        }

        .mail-link {
            font-size: 50px;
            font-weight: 700;
            line-height: 57.5px;
            text-decoration: underline;
        }

        /* Mobile Styling */
        @media (max-width: 768px) {
            body {
                position: relative;
                width: 100%;
                min-height: 50vh;
                overflow-x: hidden;
                margin: 0;
                padding: 0;
                background-image: url('{{ asset('images/background.png') }}');
                background-size: cover;
                background-position: center;
            }


            .gradient-overlay {
                width: 100%;
                height: 100vh;
            }

            .credits {
                position: relative;
                top: 20px;
                left: 0;
                width: 90%;
                height: auto;
                margin: 0 auto;
                text-align: center;
            }

            .credits p {
                font-size: 14px;
                line-height: 1.4;
            }

            .logo {
                position: relative;
                top: 40px;
                left: 27%;
                transform: translateX(-50%);
                width: 60%;
                max-width: 200px;
                height: auto;
                margin: 20px auto;
            }

            .logo img {
                width: 100%;
                height: auto;
            }

            .main-content {
                position: relative;
                top: 60px;
                left: 0;
                width: 90%;
                height: auto;
                margin: 0 auto;
                text-align: left;
            }

            .main-content p {
                font-size: 16px;
                line-height: 1.5;
            }

            .main-content p:first-child {
                margin-top: 20px;
            }

            .get-in-touch {
                position: relative;
                width: 90%;
                top: 80px;
                left: 0;
                margin: 20px auto;
                text-align: center;
            }

            .mail-link {
                font-size: 20px;
                line-height: 1.2;
                top: -5px;
            }
        }
    </style>
</head>

<body>

    <!-- Gradient Overlay -->
    <div class="gradient-overlay"></div>

    <!-- Layer 5: Credits -->
    <div class="credits">
        <p class="credits-title">
            SEEKING SYNTHS
        </p>
        <p class="credits-content">
            Host: Jesse Beaman<br>
            Director: Sam Mims<br>
            Editor & Director of Photography: Lucas Fowler
        </p>
    </div>

    <!-- Layer 1: Logo -->
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Seeking Synths Logo">
    </div>

    <!-- Layer 2: Main Content Text -->
    <div class="main-content">
        <p class="main-content-large-text">
            <strong>Seeking Synths</strong> is a captivating video series featuring
            30-minute episodes in the spirit of Anthony Bourdain, where the host visits renowned musicians to explore
            their collections of vintage synthesizers and uncover how these iconic instruments have shaped their music.
        </p>
        <p class="main-content-small-text">
            The show delves into the guests' passion for vintage synthesizers and the distinctive sounds they
            create, revealing the stories behind the music, the musicians, and these rare instruments. Musicians
            will marvel at the impressive collections, while non-musicians will enjoy uncovering the artists behind
            some of their favorite tracks.
        </p>
    </div>

    <!-- Layer 3: "Get in Touch!" Text -->
    <div class="get-in-touch">
        <a class="mail-link" href="mailto:contact@seekingsynths.com">
            Get in touch!
        </a>
    </div>

</body>

</html>
