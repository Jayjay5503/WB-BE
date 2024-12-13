<?php
include('connect.php');

if (isset($_GET['islandOfPersonalityID'])) {
    $islandOfPersonalityID = $_GET['islandOfPersonalityID'];
    $islandQuery = "SELECT * FROM islandcontents WHERE islandOfPersonalityID = '$islandOfPersonalityID'";
    $islandResult = executeQuery($islandQuery);
    $row = mysqli_fetch_assoc($islandResult);
}


$query = "SELECT * FROM islandsofpersonality";
$result = executeQuery($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Core Memories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="images/icon.png" type="image/png">
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        .w3-third img {
            margin-bottom: -6px;
            opacity: 0.8;
            cursor: pointer
        }

        .w3-third img:hover {
            opacity: 1
        }
    </style>
</head>

<body class="w3-light-grey w3-content" style="max-width:1600px">
    <style>
        <style>body {
            background: linear-gradient(45deg, #6B0772, #360167);
            color: white;
            margin: 0;
            padding: 0;
            font-family: 'Metamorphous', sans-serif;
        }

        h1 {
            font-family: 'Metamorphous', sans-serif;
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: rgba(0, 0, 0, 0.5);
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            text-decoration: none;
            z-index: 10;
        }

        .back-button:hover {
            background-color: rgba(150, 27, 133, 0.8);
            color: #fff;
        }

        .image-container img {
            width: 100%;
            height: auto;
            /* Maintain aspect ratio */
            object-fit: cover;
            /* Ensures images fill their containers */
        }

        .col img {
            width: 100%;
            /* Ensure responsiveness */
            height: auto;
            /* Maintain aspect ratio */
            border-radius: 8px;
            /* Optional: Rounded corners */
            margin-bottom: 20px;
            /* Add spacing */
        }

        .row {
            gap: 20px;
            /* Adjust spacing between rows */
            display: flex;
            /* Use flexbox for grid layout */
            flex-wrap: wrap;
            /* Allows columns to wrap onto multiple lines */
        }

        .row .col {
            flex: 1 1 22%;
            /* Distribute space evenly */
            max-width: 100%;
            /* Ensure responsive layout */
        }

        @media (max-width: 768px) {
            .row .col {
                flex: 1 1 45%;
                /* Two columns on smaller screens */
            }
        }

        @media (max-width: 576px) {
            .row .col {
                flex: 1 1 100%;
                /* One column on extra-small screens */
            }
        }

        .about {
            color: #b800ae;
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
        }

        .aboutContent {
            color: #d3d3d3;
            font-size: 20px;
            text-align: justify;
            font-family: 'Metamorphous', sans-serif;
        }

        .custom-image {
            width: 100%;
            max-width: 450px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        .projects {
            max-width: 700px;
            max-height: 700px;
            margin: auto;
        }

        .image-style {
            width: 100%;
            height: 100%;
            max-width: 700px;
            max-height: 700px;
            object-fit: cover;
        }

        footer {
            text-align: center;
            background-color: rgba(255, 255, 255, 0);
            padding-top: 10px;
        }

        footer a {
            color: #3a035f;
            text-decoration: none;
        }

        footer a:hover {
            color: #f4cafa;
        }

        @media (max-width: 768px) {
            .about {
                font-size: 1.5rem;
            }

            .aboutContent {
                font-size: 20px;
            }
        }
    </style>


    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-bar-block w3-white w3-animate-left w3-text-grey w3-collapse w3-top w3-center"
        style="z-index:3;width:250px;font-weight:bold;position:fixed; left: 15px; top: 0;" id="mySidebar">
        <br>
        <div class="container-fluid px-0">
            <a href="../index.php" class="back-button">Back</a>
        </div>
        <h3 class="w3-padding-64 w3-center"><b>EXPLORE<br>ISLANDS</b></h3>
        <a href="javascript:void(0)" onclick="w3_close()"
            class="w3-bar-item w3-button w3-padding w3-hide-large">CLOSE</a>
        <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">PORTFOLIO</a>
        <a href="#contacts" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>


    <!-- Top menu on small screens -->
    <header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
        <span class="w3-left w3-padding">EXPLORE ISLANDS</span>
        <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
    </header>

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"
        title="close side menu" id="myOverlay"></div>

    <!-- Page Content -->
    <div class="w3-main" style="margin-left:150px">

        <!-- Push down content on small screens -->
        <div class="w3-hide-large" style="margin-top:83px"></div>

        <div class="container">
            <div class="row g-4 justify-content-center">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $islandOfPersonalityID = $row['islandOfPersonalityID'];
                        $image = $row['image'];
                        ?>
                        <div class="col-12 col-sm-6 col-md-3">
                            <a href="view.php?islandOfPersonalityID=<?php echo $islandOfPersonalityID; ?>">
                                <img src="images/<?php echo $image; ?>" class="img-fluid">
                            </a>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>




        <!-- Modal for full-size images on click -->
        <div id="modal01" class="w3-modal w3-black" style="padding-top:0" onclick="this.style.display='none'">
            <span class="w3-button w3-black w3-xlarge w3-display-topright">×</span>
            <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
                <img id="img01" class="w3-image">
                <p id="caption"></p>
            </div>
        </div>

        <!-- Contacts Section -->
        <div class="section" id="contacts">
            <h2 style="text-align: center;">Contact Me</h2>
            <div style="text-align: center; margin-top: 16px;">
                <a href="https://www.facebook.com/jay.monterola.79" class="icon-btn" target="_blank"><i
                        class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/jayjay_monterola/" class="icon-btn" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                <a href="https://t.me/Jayjay5503" class="icon-btn" target="_blank"><i class="fab fa-telegram"></i></a>
                <a href="tel:+639914414895" class="icon-btn"><i class="fas fa-phone"></i></a>
            </div>
        </div>

        <!-- Footer -->
        <footer class="footer">
            © 2024 JJ's WORKS | All Rights Reserved
        </footer>


        <script>
            // Script to open and close sidebar
            function w3_open() {
                document.getElementById("mySidebar").style.display = "block";
                document.getElementById("myOverlay").style.display = "block";
            }

            function w3_close() {
                document.getElementById("mySidebar").style.display = "none";
                document.getElementById("myOverlay").style.display = "none";
            }

            // Modal Image Gallery
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
                var captionText = document.getElementById("caption");
                captionText.innerHTML = element.alt;
            }

            function onClick(image) {
                // Prevent the default link behavior
                event.preventDefault();
                // Get the target URL from the href attribute of the link
                var target = image.closest("a").getAttribute("href");
                // Navigate to the URL
                if (target) {
                    window.location.href = target;
                }
            }



        </script>


</body>

</html>