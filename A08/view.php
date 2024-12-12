<?php
include("connect.php");

$islandID = ($_GET['islandPersonalityID']);

$islandQuery = "SELECT * ,islandcontents.image AS islandcontentimage FROM islandcontents LEFT JOIN islandsofpersonality 
ON islandcontents.islandOfPersonalityID = islandsofpersonality.islandOfPersonalityID 
WHERE islandcontents.islandOfPersonalityID = '$islandID'";
$islandResults = executeQuery($islandQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chan's Island</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        @font-face {
            font-family: 'InsideOut';
            src: url('assets/fonts/InsideOut-DAp0.ttf') format('truetype');
        }

        body {
            background-color: #ffd700;
            font-family: 'InsideOut';
            animation: backgroundColorChange 10s infinite alternate;
        }

        @keyframes backgroundColorChange {
            0% {
                background-color: #f3bd2d;
            }
            50% {
                background-color: #366eb9;
            }
            75% {
                background-color: #72b54e;
            }
            100% {
                background-color: #ce221c;
            }
        }

        .header {
            text-align: center;
            padding: 20px;
            color: #fff;
        }

        .header h1 {
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #ffd700;
            }
            to {
                text-shadow: 0 0 20px #ff4500;
            }
        }

        .memory-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            border-radius: 15px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
            animation: float 6s ease-in-out infinite;
        }

        .memory-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .memory-card img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .memory-card .content {
            padding: 15px;
            color: #333;
        }

        .memory-card[data-color="joy"] {
            background-color: #ffd700;
        }

        .memory-card[data-color="sadness"] {
            background-color: #1e90ff;
            color: #fff;
        }

        .memory-card[data-color="anger"] {
            background-color: #ff4500;
            color: #fff;
        }

        .memory-card[data-color="fear"] {
            background-color: #9c27b0;
            color: #fff;
        }

        .memory-card[data-color="disgust"] {
            background-color: #32cd32;
            color: #fff;
        }

        .back-button {
            display: inline-block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #ff4500;
            color: #fff;
            font-size: 1.2em;
            border-radius: 10px;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .back-button:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
        }

        footer {
            text-align: center;
            margin-top: 20px;
            color: #fff;
        }

        .footer-icons {
            margin-top: 10px;
        }

        .footer-icons a {
            color: #fff;
            font-size: 1.5em;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .footer-icons a:hover {
            color: #ffd700;
        }
    </style>
</head>

<body>
    <div class="header">
        <h1>Chan's Island</h1>
        <p>Relive the moments shaped by emotions!</p>
    </div>

    <div class="container my-5">
        <div class="row">
            <?php
            if (mysqli_num_rows($islandResults) > 0) {
                while ($row = mysqli_fetch_assoc($islandResults)) {
                    $image = $row['islandcontentimage'];
                    $content = $row['content'];
                    $color = $row['color'] ?: 'data-color';
                    echo "<div class='col-md-4 d-flex'>
                            <div class='memory-card' data-color='$color'>
                                <img src='assets/images/$image' alt='Memory Image'>
                                <div class='content'>
                                    <p>$content</p>
                                </div>
                            </div>
                        </div>";
                }
            } else {
                echo "<p class='text-center'>No memories found.</p>";
            }
            ?>
        </div>
    </div>

    <div class="text-center">
        <a href="javascript:history.back()" class="back-button">Go Back</a>
    </div>

    <footer>
        <div class="footer-icons">
            <a href="https://web.facebook.com/groups/763353139298166" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
            <a href="https://x.com/TheMultiStudios" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/insideout_thoughtbubbles/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/watch?v=LEjhY15eCx0" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
