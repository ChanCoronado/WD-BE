<?php
include("connect.php");

$islandsofpersonalityQuery = "SELECT * FROM islandsofpersonality";
$islandsofpersonalityResult = executeQuery($islandsofpersonalityQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Chan's Island</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="icon" href="assets/images/logoChan.png">
    <style>
        @font-face {
            font-family: 'InsideOut';
            src: url('assets/fonts/InsideOut-DAp0.ttf') format('truetype');
        }

        body,
        header,
        nav {
            background-color: #ffd700;
            font-family: 'InsideOut';
            overflow-x: hidden;
            margin: 0;
            padding: 0;
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

        .emotion {
            color: #ffffff;
            font-weight: bold;
            transition: transform 0.3s, background-color 0.3s;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
        }

        .emotion:hover {
            transform: scale(1.1);
            background-color: #f5f5f5;
            color: #000;
        }

        .joy {
            background-color: #ffd700;
        }

        .sadness {
            background-color: #1e90ff;
        }

        .anger {
            background-color: #ff4500;
        }

        .disgust {
            background-color: #32cd32;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;

        }

        .carousel-caption h5 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
        }

        .carousel-caption p {
            color: #ddd;
        }

       
        button.w3-btn {
            background: linear-gradient(45deg, #ff4500, #ffd700);
            color: #fff !important;
            font-weight: bold;
            border: none;
            border-radius: 25px;
            padding: 10px 20px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        button.w3-btn:hover {
            transform: scale(1.1);
            background: linear-gradient(45deg, #ffd700, #ff4500);
            color: #000 !important;
            box-shadow: 0px 6px 20px rgba(0, 0, 0, 0.5);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .w3-animate-bottom {
            animation: fadeIn 1.5s;
        }

        .carousel-item img {
            height: auto;
            width: 100%;
            object-fit: cover;
            transition: transform 0.3s, filter 0.3s;
        }

        footer {
            background-color: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            width: 100%;
            position: relative;
            bottom: 0;
            left: 0;
            animation: footerGlow 2s infinite alternate;
        }

        footer p {
            margin: 0;
        }

        footer i {
            margin-right: 5px;
        }

        .footer-icons i {
            color: black;
            font-size: 2rem;
            margin: 0 10px;
            transition: transform 0.3s, color 0.3s;
        }

        .footer-icons i:hover {
            transform: scale(1.2);
            color: #ffd700;
        }


        @media (max-width: 768px) {
            .carousel-caption {
                position: static;
                background: none;
                padding: 10px;
                text-align: center;
            }

            .carousel-caption p {
                font-size: 1rem;
                color: #000;
                margin-top: 10px;
                
            }

            .carousel-item {
                margin-bottom: 50px;
            }
        }

        a {
    text-decoration: none;
  }
    </style>
</head>

<body>

    <nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none; z-index: 100"
        id="mySidebar">
        <h1 class="w3-xxxlarge w3-text-theme" style="font-family: 'InsideOut'; ">Inside Out Navigation</h1>
        <button class="w3-bar-item w3-button " style="background-color: #362c58; color:#ffffff"
            onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
        <a href="view.php?islandPersonalityID=1" class="w3-bar-item w3-button emotion joy"><i class="fa fa-smile-o"></i>
            Elementary Island</a>
        <a href="view.php?islandPersonalityID=2" class="w3-bar-item w3-button emotion sadness"><i
                class="fa fa-frown-o"></i> High School Island</a>
        <a href="view.php?islandPersonalityID=3" class="w3-bar-item w3-button emotion disgust"><i
                class="fa fa-meh-o"></i> Senior High School Island</a>
        <a href="view.php?islandPersonalityID=4" class="w3-bar-item w3-button emotion anger"><i class="fa fa-fire"></i>
            College Island</a>
    </nav>

    <header class="w3-container w3-padding" id="myHeader">
        <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button "
            style="background-color: transparent!important"></i>
        <div class="text-center">
            <h4 style="font-family: 'InsideOut'; ">EXPLORE MY ISLAND </h4>
            <h1 class="w3-xxxlarge w3-animate-bottom" style="font-family: 'InsideOut';">CHAN'S ISLAND</h1>
            <div class="w3-padding-32">
                <button class="w3-btn w3-xlarge w3-dark-grey w3-hover-light-grey"
                    onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">LEARN
                    MORE</button>
            </div>
        </div>
    </header>

    <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container w3-theme-l1">
            <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
            <h4 style="font-family: 'InsideOut'; padding-top:10px;">Welcome to the World of Chan</h4>
            <h5 style="font-family: 'InsideOut';">Explore the Islands of Life!</h5>
        </header>
        <div class="w3-padding">
            <p>Explore the world of Chan!</p>
            <p>Discover the different kinds of islands: Elementary Island, High School Island, Senior High School Island, and College Island.</p>
            <p>Click below to start your journey through these amazing phases of life!</p>
        </div>
        <footer class="w3-container w3-theme-l1">
            <p style="padding-bottom:10px; padding-top:10px;">Enjoy the adventure!</p>
        </footer>
    </div>
</div>

    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner" style="height: auto;">
            <?php
    $isFirstItem = true; 
    while ($row = mysqli_fetch_assoc($islandsofpersonalityResult)) { ?>
            <div class="carousel-item <?php echo $isFirstItem ? 'active' : ''; ?>"
                data-color="<?php echo $row['color']; ?>" data-bs-interval="10000">
                <a href="view.php?islandPersonalityID=<?php echo $row['islandOfPersonalityID']?>">
                    <img src="assets/images/<?php echo $row['image']; ?>" alt="..." class="d-block w-100">
                    <div class="carousel-caption d-md-block">
                        <p><?php echo $row['longDescription']; ?></p>
                    </div>
                </a>
            </div>

            <?php 
        $isFirstItem = false; 
    } ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <footer class="w3-container w3-padding-16 ">
        <div class="footer-icons">
            <a href="https://web.facebook.com/groups/763353139298166" target="_blank" rel="noopener noreferrer"><i
                    class="fa fa-facebook"></i></a>
            <a href="https://x.com/TheMultiStudios" target="_blank" rel="noopener noreferrer"><i
                    class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/insideout_thoughtbubbles/" target="_blank" rel="noopener noreferrer"><i
                    class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/watch?v=LEjhY15eCx0" target="_blank" rel="noopener noreferrer"><i
                    class="fa fa-youtube"></i></a>
        </div>
    </footer>

    <script>

        function w3_open() {
            var x = document.getElementById("mySidebar");
            x.style.width = "100%";
            x.style.fontSize = "40px";
            x.style.paddingTop = "10%";
            x.style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }

      
        let slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function showDivs(n) {
            let i;
            const slides = document.getElementsByClassName("mySlides");
            if (n > slides.length) slideIndex = 1;
            if (n < 1) slideIndex = slides.length;
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex - 1].style.display = "block";
        }
        document.querySelectorAll('.footer-icons i').forEach(icon => {
            icon.addEventListener('mouseover', () => {
                icon.style.color = '#ffd700';
            });

            icon.addEventListener('mouseout', () => {
                icon.style.color = '';
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>