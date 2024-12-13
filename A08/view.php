<?php
include('connect.php');

if (isset($_GET['islandOfPersonalityID'])) {
    $islandOfPersonalityID = $_GET['islandOfPersonalityID'];

    $islandQuery = "
        SELECT 
            islandcontents.*, 
            islandsofpersonality.name AS name,
            islandcontents.color AS color
        FROM islandcontents
        JOIN islandsofpersonality 
        ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID
        WHERE islandcontents.islandOfPersonalityID = '$islandOfPersonalityID'
    ";

    $islandResult = executeQuery($islandQuery);

    if ($row = mysqli_fetch_assoc($islandResult)) {
        $name = $row['name'];
        $color = $row['color'];
        $firstRow = $row;
    }

    $islandResult = executeQuery($islandQuery);
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Island</title>
    <link href='https://fonts.googleapis.com/css?family=Metamorphous' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="images/icon.png" type="image/png">
    <style>
        body {
            background: linear-gradient(25deg,rgb(204, 218, 5),rgb(20, 0, 202), rgb(1, 133, 8), rgb(59, 1, 126) );
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
        }

        .image-container .desc {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.5rem;
            font-weight: bold;
            color: #500550;
            text-align: center;
        }

        @media (max-width: 768px) {
            .image-container .desc {
                font-size: 1.2rem;
                top: 70%;
            }
        }

        @media (max-width: 576px) {
            .image-container .desc {
                font-size: 1rem;
                top: 75%;
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
            font-family: 'Metamorphous' sans-serif;
        }

        .custom-image {
            width: 100%;
            max-width: 450px;
            height: auto;
            object-fit: cover;
            border-radius: 10px;
        }

        footer {
            background-color:rgb(126, 126, 126);
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
</head>

    <body>
        <a href="index.php" class="back-button">Back</a>

        <div class="container my-5">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h1><?php echo $name; ?></h1>
                </div>
                <?php
                while ($row = mysqli_fetch_assoc($islandResult)) {
                    $image = $row['image'];
                    $name = $row['name'];
                    $content = $row['content'];
                    ?>
                    <div class="col-12 mb-4">
                        <div class="row gx-3 gy-4 align-items-center">
                            <div class="col-sm-12 col-md-6">
                                <img src="images/<?php echo $image; ?>" class="custom-image">
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <p style="font-size: 20px;"><?php echo $content; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>


        <footer class="text-white text-center py-3 mt-5">
            © 2024 JJ's WORKS | All Rights Reserved
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>