<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seeking Synths | Exploring Vintage Synthesizers with Renowned Musicians</title>
    <meta name="description"
        content="Seeking Synths is a captivating video series where the host explores musicians' collections of vintage synthesizers and how they've shaped their music.">
    <meta name="keywords"
        content="Seeking Synths, vintage synthesizers, music, musicians, video series, Syntaur, synthesizers">
    <meta name="author" content="Seeking Synths">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.seekingsynths.com">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Seeking Synths | Exploring Vintage Synthesizers with Renowned Musicians">
    <meta property="og:description"
        content="Join host Jesse Beaman as he explores musicians' collections of vintage synthesizers.">
    <meta property="og:image" content="https://www.seekingsynths.com/images/logo.png">
    <meta property="og:url" content="https://www.seekingsynths.com">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Seeking Synths | Exploring Vintage Synthesizers with Renowned Musicians">
    <meta name="twitter:description"
        content="Join host Jesse Beaman as he explores musicians' collections of vintage synthesizers.">
    <meta name="twitter:image" content="https://www.seekingsynths.com/images/logo.png">


    <!-- Structured Data Markup -->
    <script type="application/ld+json">
    {
          "@context": "https://schema.org",
          "@type": "TVSeries",
          "name": "Seeking Synths",
          "description": "A video series where host Jesse Beaman explores renowned musicians' collections of vintage synthesizers.",
          "genre": "Documentary, Music",
          "creator": {
            "@type": "Person",
            "name": "Sam Mims"
          },
          "actor": {
            "@type": "Person",
            "name": "Jesse Beaman"
          },
          "director": {
            "@type": "Person",
            "name": "Lucas Fowler"
          },
          "image": "https://www.seekingsynths.com/images/logo.png",
          "url": "https://www.seekingsynths.com",
          "sameAs": [
            "https://www.facebook.com/seekingsynths",
            "https://www.instagram.com/seekingsynths",
            "https://www.twitter.com/seekingsynths"
          ]
        }
    </script>

    <!-- CSS Styling     -->
    <style>
        /* General Style */
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

        /* Container Holding Everything */
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

        /* Left and Right Side Containers */
        .left-side,
        .right-side {
            width: 100%;
        }

        /* Credits */
        .credits {
            margin-bottom: 2em;
        }

        .credits-title {
            font-size: 1em;
            font-weight: 700;
            margin: 0;
            text-align: center;
        }

        .credits-content {
            font-size: 1em;
            margin-top: 1em;
            font-weight: 400;
            text-align: center;
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
            font-size: 2em;
            line-height: 1em;
            margin-bottom: 1em;
            margin-top: 0;
            padding: 0;
        }

        .main-text-small {
            font-size: 1.5em;
            line-height: 1em;
            margin-top: 0;
            padding: 0;
        }

        /* Get in Touch */
        .get-in-touch a {
            font-size: 1.5em;
            font-weight: 700;
            text-decoration: underline;
        }

        .get-in-touch {
            text-align: center;
        }

        /* Responsive Layout */
        @media screen and (min-width: 768px) {
            .container {
                flex-direction: row;
                align-items: flex-start;
            }

            .left-side {
                width: 50%;
            }

            .right-side {
                width: 75%;
            }

            .left-side {
                margin-right: 5%;
            }

            .credits-title {
                font-size: 1em;
                text-align: left;
            }

            .credits-content {
                text-align: left;
            }

            .main-text {
                font-size: 2em;
                line-height: 1em;
            }

            .main-text-small {
                font-size: 1.5em;
            }

            .get-in-touch {
                text-align: left;
            }

            .get-in-touch a {
                font-size: 2em;
            }
        }

        @media screen and (min-width: 1024px) {
            .main-text {
                font-size: 3.5em;
                line-height: 1.2em;
            }

            .main-text-small {
                font-size: 1.75em;
                line-height: 1.2em;
            }

            .get-in-touch a {
                font-size: 3.5em;
            }

            .logo img {
                float: right;
            }
        }
    </style>
</head>

<body>
    <!-- Gradient Overlay -->
    <div class="gradient-overlay"></div>

    <!-- Main Content Container -->
    <main class="container">
        <!-- Left Side: Credits and Logo -->
        <aside class="left-side">
            <!-- Credits -->
            <section class="credits">
                <h1 class="credits-title">SEEKING SYNTHS</h1>
                <p class="credits-content">
                    Host: Jesse Beaman<br>
                    Director: Sam Mims<br>
                    Editor & Director of Photography: Lucas Fowler
                </p>
            </section>

            <!-- Logo -->
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Seeking Synths Logo - A vintage synthesizer series">
            </div>
        </aside>

        <!-- Right Side: Main Text and Get in Touch -->
        <section class="right-side">
            <!-- Main Text -->
            <article class="main-content">
                <p class="main-text">
                    <strong>Seeking Synths</strong> is a captivating video series featuring 30-minute episodes in the
                    spirit of Anthony
                    Bourdain, where the host visits renowned musicians to explore their collections of vintage
                    synthesizers
                    and uncover how these iconic instruments have shaped their music.
                </p>
                <p class="main-text-small">
                    The show delves into the guests' passion for vintage synthesizers and the distinctive sounds they
                    create, revealing the stories behind the music, the musicians, and these rare instruments. Musicians
                    will marvel at the impressive collections, while non-musicians will enjoy uncovering the artists
                    behind
                    some of their favorite tracks.
                </p>
            </article>

            <!-- Get in Touch -->
            <div class="get-in-touch">
                <a href="mailto:contact@seekingsynths.com">Get in touch!</a>
            </div>
        </section>
    </main>
</body>

</html>
