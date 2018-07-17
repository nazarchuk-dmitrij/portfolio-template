<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple JS + PHP Portfolio page">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Portfolio Template</title>
</head>

<body>
    <header>
        <h1 class="custom-underline"><a href="index.html">Portfolio</a></h1>
        <nav class="nav-menu">
            <button data-category="all" class="active-button">All</button>
            <button data-category="beach">Beach</button>
            <button data-category="city">City</button>
            <button data-category="forest">Forest</button>
        </nav>
    </header>
    <div class="gallery-wrapper">
        <div class="image-wrapper" data-category="beach">
            <div class="image-holder">
                <img src="assets/pictures/beach-1.jpg" alt="Sunny Beach">
            </div>
        </div>
        <div class="image-wrapper" data-category="city">
            <div class="image-holder">
                <img src="assets/pictures/city-1.jpg" alt="Smoky City">
            </div>
        </div>
        <div class="image-wrapper" data-category="beach">
            <div class="image-holder">
                <img src="assets/pictures/beach-2.jpg" alt="Sunny Beach 2">
            </div>
        </div>
        <div class="image-wrapper" data-category="city">
            <div class="image-holder">
                <img src="assets/pictures/city-2.jpg" alt="Smoky City 2">
            </div>
        </div>
        <div class="image-wrapper" data-category="forest">
            <div class="image-holder">
                <img src="assets/pictures/forest-1.jpg" alt="Rainy Forest">
            </div>
        </div>
        <div class="image-wrapper" data-category="beach">
            <div class="image-holder">
                <img src="assets/pictures/beach-3.jpg" alt="Sunny Beach 3">
            </div>
        </div>
        <div class="image-wrapper" data-category="city">
            <div class="image-holder">
                <img src="assets/pictures/city-3.jpg" alt="Smoky City 3">
            </div>
        </div>
        <div class="image-wrapper" data-category="city">
            <div class="image-holder">
                <img src="assets/pictures/city-4.jpg" alt="Smoky City 4">
            </div>
        </div>
        <div class="image-wrapper" data-category="city">
            <div class="image-holder">
                <img src="assets/pictures/city-5.jpg" alt="Smoky City 5">
            </div>
        </div>
        <div class="image-wrapper" data-category="forest">
            <div class="image-holder">
                <img src="assets/pictures/forest-2.jpg" alt="Rainy Forest 2">
            </div>
        </div>
        <div class="image-wrapper" data-category="forest">
            <div class="image-holder">
                <img src="assets/pictures/forest-3.jpg" alt="Rainy Forest 3">
            </div>
        </div>
        <div class="image-wrapper" data-category="beach">
            <div class="image-holder">
                <img src="assets/pictures/beach-4.jpg" alt="Sunny Beach 4">
            </div>
        </div>
    </div>
    <div class="lightbox">
        <img src="#" alt="Lighbox">
        <button class="lightbox-close">+</button>
    </div>
    <div class="contact-form-wrapper">
        <div class="contact-form-holder">
            <h2 class="custom-underline">Kontakt</h2>
            <form action="process.php" method="POST" class="contact-form">
                <div class="form-first-row">
                    <div class="form-column">
                        <label for="fullname">Imię i Nazwisko</label>
                        <input type="text" id="fullname" name="fullname" required>
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" required>
                    </div>
                    <div class="form-column">
                        <div class="info">
                            Lorem ipsum dolor sit amet, usu novum congue partem, usu 
                            in natum option, ei summo similique mea. Menandri tincidunt scribentur 
                            qui ea, eu quod temporibus mei. Novum invidunt elaboraret ne nec.
                        </div>
                        <div class="info contact-details">
                            Jan Nowak <br>
                            +48 111 222 33 <br>
                            jan@nowak.pl <br>
                            www.nowak.pl
                        </div>
                    </div>
                </div>
                <div class="form-second-row">
                    <label for="message">Wiadomość</label>
                    <textarea name="message" id="message" cols="30" rows="10" required></textarea>
                    <button type="submit">Wyślij</button>
                </div>
            </form>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>

</html>