<html>
    <head>
        <title>Dže-Ka gradnja | Početna</title>

        <link rel='stylesheet' href="./style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    </head>

    <body>

    <?php 
        require('./templates/header.php'); ?>

    <main>

        <!-- Home page slider -->
        <div class="swiper">
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <img class="swiper_image" alt="Asfaltiranje" src='./images/assets/asfaltiranje.png'>
                </div>
                <div class="swiper-slide">
                    <img class="swiper_image" alt="Asfaltiranje" src='./images/assets/gradnja.jpg'>
                </div>
                <div class="swiper-slide">
                    <img class="swiper_image" alt="Asfaltiranje" src='./images/assets/projektovanje.jpg'>
                </div>
            </div>

        </div>
        <!-- End of Home page slider -->

    </main>

    <?php
        require('./templates/footer.php');
        require('./templates/officials.php');
    ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script type="text/javascript">
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
                speed: 3000,
                autoplay: {
                    delay: 5000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                }

});
        </script>
    </body>
</html>