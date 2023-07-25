<?php
@include 'config.php';
session_start();
$user_id = $_SESSION['user_id'] ;
if(!isset($user_id)){
    header('location:login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
     <!-- font awesome link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--files css stayle -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php @include 'header.php'; ?>
    <section class="heading">
        <h3>aboute us</h3>
        <p><a href="home.php">home</a> / about</p>
    </section>
    <section class="about">
    <div class="flex">
                <div class="image">
                    <img src="image/about-img-1.png" alt="">
                </div>
                <div class="content">
                    <h3>why choose us?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta unde in suscipit labore consequatur quia, fugiat, repudiandae cupiditate, architecto placeat corrupti non. Nam laboriosam explicabo soluta vitae, nulla optio hic!</p>
                    <a href="shop.php" class="btn">shop now</a>
                </div>
                
        </div>
        <div class="flex">
            <div class="content">
                <h3>what we provide?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta unde in suscipit labore consequatur quia, fugiat, repudiandae cupiditate, architecto placeat corrupti non. Nam laboriosam explicabo soluta vitae, nulla optio hic!</p>
                <a href="contact.php" class="btn">contact us</a>
            </div>
            <div class="image">
                <img src="image/about-img-2.jpg" alt="">
            </div>
        </div>
        <div class="flex">
                <div class="image">
                    <img src="image/about-img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>who we are?</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta unde in suscipit labore consequatur quia, fugiat, repudiandae cupiditate, architecto placeat corrupti non. Nam laboriosam explicabo soluta vitae, nulla optio hic!</p>
                    <a href="#reviews" class="btn">clients reviews</a>
                </div>
                
        </div>
    </section>
    <section class="reviews" id="reviews">
        <h1 class="title">client's reviews </h1>
        <div class="box-container">
            <div class="box">
                <img src="image/pic-1.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto, ea consequatur praesentium sapiente facere impedit quis deleniti. Quasi saepe illo similique, enim aliquid voluptatem in ipsa omnis perspiciatis. Similique!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>ayman ebrahem</h3>
            </div>
            <div class="box">
                <img src="image/pic-2.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto, ea consequatur praesentium sapiente facere impedit quis deleniti. Quasi saepe illo similique, enim aliquid voluptatem in ipsa omnis perspiciatis. Similique!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>rahma mohamed</h3>
            </div>
            <div class="box">
                <img src="image/pic-3.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto, ea consequatur praesentium sapiente facere impedit quis deleniti. Quasi saepe illo similique, enim aliquid voluptatem in ipsa omnis perspiciatis. Similique!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>ayman ebrahem</h3>
            </div>
            <div class="box">
                <img src="image/pic-4.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto, ea consequatur praesentium sapiente facere impedit quis deleniti. Quasi saepe illo similique, enim aliquid voluptatem in ipsa omnis perspiciatis. Similique!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3> layan ayman</h3>
            </div>
            <div class="box">
                <img src="image/pic-5.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto, ea consequatur praesentium sapiente facere impedit quis deleniti. Quasi saepe illo similique, enim aliquid voluptatem in ipsa omnis perspiciatis. Similique!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>ayman ebrahem</h3>
            </div>
            <div class="box">
                <img src="image/pic-6.png" alt="">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos iusto, ea consequatur praesentium sapiente facere impedit quis deleniti. Quasi saepe illo similique, enim aliquid voluptatem in ipsa omnis perspiciatis. Similique!</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <h3>joury ayman</h3>
            </div>
        </div>
    </section>
    <?php @include 'footer.php';?>
    <script src="js/admin_script.js"></script>
</body>
</html>