<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JJ's WORKS</title>
    <link rel="icon" href="img/icon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #CABB9F, #B8A47E, #A68C5D, #987141, #655538, #443126, #231E14);
            color: white;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
        }

        .navbar {
            background-color: rgba(0, 0, 0, 0.8);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        .navbar a {
            color: #ffb703;
            font-weight: 500;
            letter-spacing: 1px;
        }

        .navbar a:hover {
            color: #ffd166;
        }

        .section {
            padding: 100px 20px;
            text-align: center;
        }

        #home {
            height: 80vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        #home h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #ffb703;
            margin-bottom: 10px;
        }

        #home p {
            font-size: 1rem;
            font-weight: 300;
            color: #e6e6e6;
            margin-top: 0;
            max-width: 600px;
        }

        #about {
            background-color: rgba(0, 0, 0, 0.9);
            padding: 120px 20px;
        }

        #about h2 {
            font-size: 3rem;
            color: #ffb703;
            margin-bottom: 20px;
        }

        #about p {
            font-size: 1.2rem;
            color: #e6e6e6;
            line-height: 1.8;
            max-width: 800px;
            margin: auto;
            margin-bottom: 30px;
        }

        #about img {
            max-width: 300px;
            border-radius: 50%;
            margin-top: 20px;
        }

        #projects,
        #contacts {
            background-color: rgba(24, 28, 29, 0.8);
        }

        #projects h2,
        #contacts h2 {
            font-size: 2.5rem;
            color: #ffb703;
        }

        #contacts .icon-btn {
            font-size: 2rem;
            color: #ffb703;
            margin: 15px;
            transition: all 0.3s ease;
        }

        #contacts .icon-btn:hover {
            color: #ffd166;
            transform: scale(1.1);
        }

        footer {
            background-color: #181818;
            color: #ffb703;
            padding: 10px 0;
            text-align: center;
            font-size: 0.9rem;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }

        .btn-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .btn-custom {
            background: linear-gradient(145deg, #ffb703, #ff8200);
            color: white;
            border: none;
            padding: 15px 35px;
            font-size: 1.3rem;
            border-radius: 50px;
            transition: all 0.4s ease;
            letter-spacing: 1px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3);
        }

        .btn-custom:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.4);
            background-color: #ff8200;
        }

        .btn-custom:active {
            transform: translateY(-2px);
        }

        .btn-custom:focus {
            outline: none;
        }

        iframe {
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#home">JJ's WORKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contacts">Contacts</a></li>
                    <li class="nav-item"><a class="nav-link" href="#widget">Widget</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="section" id="home"
        style="position: relative; height: 100vh; background-image: url('home-bg.jpg'); background-size: cover; background-position: center; color: white; display: flex; justify-content: center; align-items: center;">
        <div class="overlay"
            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
        </div>

        <div class="container text-center" style="z-index: 1;">
            <h1 class="display-3 mb-4 animated fadeInUp" style="font-size: 3rem; font-weight: bold; color: #ffb703;">
                Welcome
                to JJ's WORKS</h1>
            <p class="lead mb-5 animated fadeInUp"
                style="font-size: 1.2rem; color: #e6e6e6; max-width: 600px; margin: auto;">
                Explore my portfolio and immerse yourself in the world of creativity, innovation, and technology.
                Discover
                exciting projects, unique ideas, and more!</p>
            <a href="#about" class="btn btn-custom animated fadeInUp"
                style="font-size: 1.2rem; padding: 12px 30px; background: linear-gradient(145deg, #ffb703, #ff8200); color: white; text-decoration: none; border-radius: 50px; box-shadow: 0 6px 18px rgba(0, 0, 0, 0.3); transition: all 0.4s ease;">
                Start Exploring
            </a>
        </div>

        <style>
            .animated {
                animation-duration: 1s;
                animation-fill-mode: both;
            }

            .fadeInUp {
                animation-name: fadeInUp;
            }

            @keyframes fadeInUp {
                0% {
                    opacity: 0;
                    transform: translateY(20px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </div>

    <div class="section" id="about">
        <h2>About Me</h2>
        <img src="img/Jj.png" alt="JJ's Picture" class="img-fluid rounded-circle mx-auto d-block"
            style="max-width: 200px; margin-bottom: 20px;">
        <p
            style="font-size: 1.2rem; color: #e6e6e6; line-height: 1.8; max-width: 600px; margin: auto; text-align: center;">
            Hi, I'm <strong>Jay Denver M. Monterola</strong>, a third-year <strong>Information Technology</strong>
            student
            at the <strong>Polytechnic University of the Philippines, Sto. Tomas Campus</strong>.
            I'm passionate about learning and growing in the field of technology.
        </p>
    </div>

    <div class="section" id="projects">
        <h2>Explore My Projects</h2>

        <div class="btn-wrapper">
            <button class="btn btn-custom" onclick="navigateTo('A08/index.php')">A08</button>
        </div>

        <div class="section" id="contacts">
            <h2>Contact Me</h2>
            <div>
                <a href="https://www.facebook.com/jay.monterola.79" class="icon-btn" target="_blank"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/jayjay_monterola/" class="icon-btn" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://t.me/Jayjay5503" class="icon-btn" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="tel:+639914414895" class="icon-btn"><i class="fas fa-phone"></i></a>
            </div>
        </div>

        <div class="section" id="widget">
            <h2>Spotify Playlist</h2>
            <p>Listen to my favorite tracks while browsing through JJ's WORKS:</p>
            <iframe style="border-radius:12px"
                src="https://open.spotify.com/embed/playlist/4OfTB0XLugV5ordnn7fMd6?utm_source=generator" width="100%"
                height="352" frameborder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        </div>

        <footer>
            © 2024 JJ's WORKS | All Rights Reserved
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            function navigateTo(page) {
                window.location.href = page;
            }

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
</body>

</html>