<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seeking Synths</title>
</head>
<style>
    body {
        width: 1440px;
        height: 1491px;
        top: -746px;
        left: -720px;
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
        /* Assuming white text */
    }

    /* Positioning Containers */
    .credits {
        position: absolute;
        top: 60px;
        left: 41px;
        width: 389px;
        height: 100px;
    }

    .logo {
        position: absolute;
        top: 223px;
        left: 237px;
        width: 305px;
        height: 305px;
    }

    .main-content {
        position: absolute;
        top: 59px;
        left: 636px;
        width: 764px;
        height: 912px;
    }

    .get-in-touch {
        position: absolute;
        width: 336px;
        height: 34px;
        top: 993px;
        left: 635px;
    }
</style>

<body>

    <!-- Gradient Overlay -->
    <div class="gradient-overlay"></div>
    <!-- Layer 5: Credits -->
    <div class="credits">
        <p style="font-size: 16.51px; font-weight: 700; line-height: 20px; margin: 0;">
            SEEKING SYNTHS
        </p>
        <p style="font-size: 16.51px; font-weight: 400; line-height: 20px; margin-top: 20px;">
            Host: Jesse Beaman<br>
            Director: Sam Mims<br>
            Editor & Director of Photography: Lucas Fowler
        </p>
    </div>

    <!-- Layer 1: Logo -->
    <div class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Seeking Synths Logo" style="width: 100%; height: 100%;">
    </div>

    <!-- Layer 2: Main Content Text -->
    <div class="main-content">
        <p
            style="
            font-size: 50px;
            font-weight: 400;
            line-height: 57.5px;
            margin: 0;">
            <span style="font-weight:700">Seeking Synths</span> is a captivating video series featuring 30-minute
            episodes in the spirit of Anthony
            Bourdain, where the host visits renowned musicians to explore their collections of vintage synthesizers
            and uncover how these iconic instruments have shaped their music.
        </p>
        <p
            style="
            font-size: 30px;
            font-weight: 400;
            line-height: 34.5px;
            margin-top: 60px;">
            The show delves into the guests' passion for vintage synthesizers and the distinctive sounds they
            create, revealing the stories behind the music, the musicians, and these rare instruments. Musicians
            will marvel at the impressive collections, while non-musicians will enjoy uncovering the artists behind
            some of their favorite tracks.
        </p>
    </div>

    <!-- Layer 3: "Get in Touch!" Text -->
    <div class="get-in-touch">
        <a href="mailto:your-email@example.com"
            style="
                font-size: 50px;
                font-weight: 700;
                line-height: 57.5px;
                text-decoration: underline;
            ">
            Get in touch!
        </a>
    </div>

</body>

</html>
