<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<section>
        <div class="container">
            <div class="fixed_header">
                <header> 
                    <div class="flex_for_mb">
                        <button class="min_burger" id="burger">
                            <span class="c1"></span>
                            <span class="c2"></span>
                            <span class="c3"></span>
                        </button>
                        <ul class="header">
                            <a href="../catalogs/catalog.html"><button><li>Каталог</li></button></a>
                            <a href="About_company.html"><button><li>О компании</li></button></a>
                            <a href="../index.php#Call../"><button><li>Контакты</li></button></a>
                            <a href="delivery.html"><button><li>Доставка</li></button></a>
                            <a href="payment.html"><button><li>Оплатить</li></button></a>
                            <a href="#"><button><li>Личный кабинет</li></button></a>
                            <a href="blog.html"><button><li>Блог</li></button></a>
                        </ul>
                        <div class="number">
                        <a href="tel:+998913460577" style="color:black;">+998 91 346 05 77</a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="indent"></div> <!-- отступ для фиксированного меню  -->
            <div class="header_2">
                <h1>Anishop</h1>
                <button>
                    <span class="b1"></span>
                    <span class="b2"></span>
                    <span class="b3"></span>
                    <div class="title">Каталог</div>
                </button>
                <a href="#"><img src="../icons/basket.png" alt="basket" class="basket"></a>
                <a href="#"><img src="../icons/login_icon.png" alt="login_icon" class="login_icon"></a>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="menu_links">
            <a href="../index.php">Главная</a>
            <div class="slesh">   /   </div>
            <a href="#" class="items_activ">Адресс</a>
        </div>
    </div>
    <section>
        <div class="container">
            <h3>Адресс</h3>
            <br>
            Разместите сюда адресс магазина
            <br><br>
        </div>
    </section>
    <?php
        include('../PHP/finish.php')
    ?>
    <script src="../js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>