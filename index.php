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
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="js/favicon.ico" type="image/x-icon">
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
                            <a href="catalogs/catalog.html"><button><li>Каталог</li></button></a>
                            <a href="others/About_company.html"><button><li>О компании</li></button></a>
                            <a href="#Call"><button><li>Контакты</li></button></a>
                            <a href="others/delivery.html"><button><li>Доставка</li></button></a>
                            <a href="others/payment.html"><button><li>Оплатить</li></button></a>
                            <a href="#"><button><li>Личный кабинет</li></button></a>
                            <a href="others/blog.html"><button><li>Блог</li></button></a>
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
                <a href="#"><img src="icons/basket.png" alt="basket" class="basket"></a>
                <a href="#"><img src="icons/login_icon.png" alt="login_icon" class="login_icon"></a>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/slider_img/slider_img_1.webp" class="d-block w-100" alt="slider_img_1">
                  </div>
                  <div class="carousel-item">
                    <img src="img/slider_img/Slider_img_2.jpg" class="d-block w-100" alt="slider_img_2">
                  </div>
                  <div class="carousel-item">
                    <img src="img/slider_img/slider_img_3.jpg" class="d-block w-100" alt="slider_img_3">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Unique anime clothes</h2>
            <div class="cards">
                <div class="card ">
                    <img src="img/T-short_img/death_note.webp" alt="death_note" class="card_img">
                    <div class="quantity"> Death note 1 piece</div>
                    <div class="price">77$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/blue_girl.jpg" alt="blue_girl" class="card_img">
                    <div class="quantity">Blue girl 1 piece</div>
                    <div class="price">100$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/tokyo_ghoul.png" alt="tokyo_ghoul" class="card_img">
                    <div class="quantity"> Tokyo ghoul 1 piece</div>
                    <div class="price">25$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/volleyball.webp" alt="volleyball" class="card_img">
                    <div class="quantity"> Volleyball 1 piece</div>
                    <div class="price">50$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/death_note_2.jpg" alt="death_note_2" class="card_img">
                    <div class="quantity"> Death note 1 piece</div>
                    <div class="price">99$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="ctlg_link">
                <div class="card_bg">
                    <a href="#"><img src="img/death_note_bg.jpg" alt="death_note" class="bg"></a> 
                    <span class="subtitle_1">Death note</span>
                </div>
                <div class="card_bg">
                    <a href="#"><img src="img/demon_sliyer_bg.webp" alt="demon_sliyer" class="bg"></a> 
                    <span class="subtitle_1">Demon slayer</span>
                </div>
            </div>
            <div class="ctlg_link_2">
                <div class="card_bg_2">
                    <a href="#"><img src="img/volleybol_bg.webp" alt="volleyball" class="bg_2"></a>
                    <span class="subtitle_2">Volleyball</span>
                </div>
                <div class="card_bg_2">
                    <a href="#"><img src="img/class_of_the_Elite_bg.webp" alt="class_of_the_Elite" class="bg_2"></a>
                    <span class="subtitle_2">class of the Elite</span>
                </div>
                <div class="card_bg_2">
                    <a href="#"><img src="img/chansawman_bg.webp" alt="chansawman" class="bg_2"></a>
                    <span class="subtitle_2">Chansawman</span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3>Наши плюсы</h3>
            <div class="pluses">
                <div class="plus">
                    <img src="icons/plus_ctlg_icon.png" alt="plus_ctlg_icon" class="plus_img">
                    <div class="plus_title">Широкий ассортимент</div>
                    <div class="plus_sub_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error provident atque, voluptatem dignissimos doloribus adipisicing</div>
                </div>
                <div class="plus">
                    <img src="icons/like_icon.webp" alt="like_icon" class="plus_img">
                    <div class="plus_title">Контроль качества</div>
                    <div class="plus_sub_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error provident atque, voluptatem dignissimos doloribus adipisicing</div>
                </div>
                <div class="plus">
                    <img src="icons/car_icon.webp" alt="car_icon" class="plus_img_unic">
                    <div class="plus_title">Быстрая доставка</div>
                    <div class="plus_sub_title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus error provident atque, voluptatem dignissimos doloribus adipisicing</div>
                </div>
            </div>
        </div>
    </section>
    <section class="sets">
        <div class="container">
            <h2>Sets</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/T-short_img/death_note.webp" alt="death_note" class="card_img">
                    <div class="quantity"> Death note 1 piece</div>
                    <div class="price">77$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/sets_img/acusi_set.jpg" alt="Acusi set" class="card_img">
                    <div class="quantity">Acusi set 1 piece</div>
                    <div class="price">100$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/sets_img/ayanacodji_set.webp" alt="Class of the Elite" class="card_img">
                    <div class="quantity"> Ayanakodji set 1 piece</div>
                    <div class="price">25$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/sets_img/bleach_set.jpg" alt="Bleach" class="card_img">
                    <div class="quantity"> Bleach 1 piece</div>
                    <div class="price">50$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/sets_img/naruto_set.webp" alt="Naruto" class="card_img">
                    <div class="quantity"> Naruto 1 piece</div>
                    <div class="price">99$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="woman">
        <div class="container">
            <h2>Woman</h2>
            <div class="cards">
                <div class="card">
                    <img src="img/T-short_img/death_note.webp" alt="death_note" class="card_img">
                    <div class="quantity"> Death note 1 piece</div>
                    <div class="price">77$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/blue_girl.jpg" alt="blue_girl" class="card_img">
                    <div class="quantity">Blue girl 1 piece</div>
                    <div class="price">100$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/tokyo_ghoul.png" alt="tokyo_ghoul" class="card_img">
                    <div class="quantity"> Tokyo ghoul 1 piece</div>
                    <div class="price">25$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/volleyball.webp" alt="volleyball" class="card_img">
                    <div class="quantity"> Volleyball 1 piece</div>
                    <div class="price">50$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
                <div class="card">
                    <img src="img/T-short_img/death_note_2.jpg" alt="death_note_2" class="card_img">
                    <div class="quantity"> Death note 1 piece</div>
                    <div class="price">99$</div>
                    <a href="#">
                        <button class="buy">
                            <span class="subtitle">Buy</span>
                            <img src="" alt="" class="button_img">
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3>Отзывы клиентов</h3>
            <div class="Reviews">
                <div class="Review">
                    <h4>Alex</h4>
                    <div class="Reviev_text">
                        Lorem ipsum dolor sit, amet consectetureiciendis molestias consequuntur, velit dolore. Laboriosam tenetur eum obcaecati, fugit nesciunt dolore soluta voluptatibus quaerat rem amet quam.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt libero, mollitia nihil eligendi, saepe esse provident quo nemo aliquid ab iste nisi volupt
                    </div>
                </div>
                <div class="Review">
                    <h4>Diana</h4>
                    <div class="Reviev_text">
                        Lorem ipsum ur, velit dolore. Laboriosam tenetur eum obcaecati, fugit nesciunt dolore soluta voluptatibus quaerat rem amet quam.
                       ia nihil eligendi, saepe esse provident quo nemo aliquid ab iste nisi voluptatibus laborum sit molestias explicabo officiis hic quisquam!
                    </div>
                </div>
                <div class="Review">
                    <h4>Tom</h4>
                    <div class="Reviev_text">
                        Lorem ipsum dolor sit, amet consectetur adipisicas consequuntur, velit dolore. Laboriosam tenetur eum obcaecati, fugit nesciunt dolore soluta voluptatibus quaerat rem amet quam.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="Call" id="Call">
        <div class="container"> <!--Обратный звонок call back--> 
            <center>
                <h2 class="call_back">Call back</h2>
                <form action="PHP/CB.php" method="post"  class="CB">
                    <input type="text" placeholder="Name" class="CB_name" required>
                    <input type="text" placeholder="Phone number" class="CB_phone" required>
                    <input type="text" placeholder="Email" class="CB_email" required>
                    <input type="text" placeholder="Comments" class="CB_comment">
                    <button class="button_CB">Send</button>
                </form>
            </center>
        </div>
    </section>
    <?php
        include('PHP/finish.php')
    ?>
    <script defer src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>