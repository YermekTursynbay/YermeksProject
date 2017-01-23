<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">MUSFIT</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    
    <?php
        $goods=[
            [
                'id'=>1,
                'name'=>'Samsung',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img'=>'/images/goods/samsung.jpg',
                'price'=>'800 $'
            ],
            [
                'id'=>2,
                'name'=>'HTC',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img'=>'/images/goods/htc.jpg',
                'price'=>'700 $'
            ],
            [
                'id'=>3,
                'name'=>'Iphone',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'img'=>'/images/goods/iphone.jpg',
                'price'=>'1000 $'
            ]

        ];

        $page=$_GET['page'];
            if (!isset($page)) {
                require('templates/main.php');
            }elseif ($page=='shop') {
                require('templates/shop.php');
            }elseif ($page=='product') {
                $id=$_GET['id'];
                $good=[];
                foreach ($goods as $product) {
                    if ($product['id']==$id)  {
                        $good=$product;
                        break;
                    }
                
               }

             require('templates/openedProduct.php');  
            }

    ?>



</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                +7 701 565 47 47
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Астана, пр-т Мунайтпасова, д.1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            
            <a href="https://vk.com/id190391516"  target="_blank"><img class="socialItem" src="images/vk-social-logotype.svg"></a>
            <a href="https://mail.google.com/mail/u/0/?tab=wm#inbox" target="_blank"><img class="socialItem" src="images/google-plus-social-logotype.svg"></a>
            <a href="https://www.facebook.com/ermek.tursinbay" target="_blank"><img class="socialItem" src="images/facebook-logo.svg"></a>

            
            
        </div>

        <div id="copyrights">&copy; MUSFIT</div>
    </div>
</footer>

</body>
</html>