<?php
    include('config.php');
    include('simple_html_dom.php');

    $html = file_get_html('https://www.gensh.in/characters');
    
    $list = $html->find('div[class="row character-list"]', 0);
    // echo $list;
    for($i = 0; $i < 42; $i++){
        $charac = $list->children($i)->children(0)->children(1)->children(0)->plaintext;
        $grade = $list->children($i)->children(0)->children(1)->children(1)->plaintext;
        $img = $list->children($i)->children(0)->children(0)->children(0)->src;
        $i++;
        // mysqli_query($conn ,"INSERT INTO karakter(number,nama, bintang) VALUES ('$i','$charac', '$grade')");
        $i--;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">  
    <link rel="stylesheet" href="FP LBE NCC/style.css">
    <link rel="stylesheet" href="FP LBE NCC/stylebody.css"> 
    <link rel="stylesheet" href="FP LBE NCC/styleimg.css">
</head>
<body>
 <div class="head">
        <nav>
            <div class="logo">
                <img src="FP LBE NCC/logo-genshin.png" width="120px" title="our teamwork">
            </div>

            <ul>
                <li><a href="">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>

           
            <div class="menu-toggle">
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    <div>

    <div class="main">

        <div class="hero">
            <div class="closer"></div>
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 2</div>
                    <img src="FP LBE NCC/karakter3.jpg" style="width:100% ">
                    <!-- <div class="text">Caption One</div> -->
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 2</div>
                    <img src="FP LBE NCC/karakter4.jpg" style="width:100%" >
                    <!-- <div class="text">Caption Two</div> -->
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div><br>

                <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>
        </div>
        <div class="greeting">
            <h2>HALO SELAMAT DATANG KAWANN!!👋</h2>
        </div>
        
        <div class="bgabout"id="about">
            <div class="about" >
                <h2>About</h2>
                <p class="p1">As a huge fan of miHoYo's Honkai Impact 3rd game, I decided to create this fanpage for their "Genshin Impact" title.The main goal of this page is a centralized place to get information about the game, artwork, guides and community driven content, but not as chaotic and soulless like some other generic game wikis. The other reason is to run this page fast and add free.We may sometimes are behind in terms of content but we try our best to deliver accurate and accessable content.If you got questions or wanna help out use the contact form, join our <a href="https://discord.com/invite/6NQzkYE">Discord Server </a>or send us a mail: info@gensh.inThis db project has been recognized by miHoYo Co Ltd and is approved as a part of the official Content Creator Program.</p>
            </div>
        </div>
<!-- PRODUCT -->
        <div class="bgproduct" id="product">
            <div class="product" >
                <h2>Product</h2>
                <!-- <ul class="ul2">
                    <li><a href="testarget.html">monster</a></li>
                    <li><a href="">Character</a></li>
                    <li><a href="">Weapons</a></li>
                    <li><a href="">other</a></li>
                </ul> -->
                <div class="isiproduct">
                    <div class="satu character">
                        <p>Character</p>
                        <a href="./character.php"><img src="FP LBE NCC/char5.png" title="Chonyun Genshin" height="220px"></a>
                    </div>
                    <div class="satu weapon">
                        <p>Artefak</p>
                        <a href="./artifact.php"><img src="FP LBE NCC/artefac.png " title="Whiteblind" alt="character" width="160px"></a>
                    </div>
                </div>
            </div>
        </div>
<!-- SERVICE -->
        <div class="bgservice" id="service">
            <div id="card">
                <div id="card-content">
                <div id="card-title">
                    <h2>LOGIN</h2>
                    <!-- <div class="underline-title"></div> -->
                </div>

                <form method="post" class="form">

                    <label for="user-email" style="padding-top:13px"> &nbsp;Email </label>
                    <input id="user-email" class="form-content" type="email" name="email" autocomplete="on" required style="border-radius: 7px;" />
                    <div class="form-border"></div>

                    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                    <input id="user-password" class="form-content" type="password" name="password" required  style="border-radius: 7px;"/>
                    <div class="form-border"></div>

                    <a href="#">
                        <legend id="forgot-pass">Forgot password?</legend>
                    </a>
                    <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
                    <a href="#" id="signup">Don't have account yet?</a>

                </form>
            </div>
            </div>
        </div>
<!-- CONTACT -->
        <div class="bgcontact" id="contact">
            <h2>OUR CONTACT</h2>
            <div class="contact">
                <div class="sosmed wa">
                    <a href=""><img src="FP LBE NCC/logoWA2.png" width="45px"></a></div>
                <div class="sosmed ig">
                    <a href=""><img src="FP LBE NCC/logoIG2.png" width="45px"></a></div>
                <div class="sosmed fb">
                    <a href=""><img src="FP LBE NCC/logoFB2.png" width="45px"></a></div>
                <div class="sosmed line">
                    <a href=""><img src="FP LBE NCC/logoLINE2.png" width="45px"></a></div>
                <div class="sosmed gmail">
                    <a href=""><img src="FP LBE NCC/logoGMAIL2.png" width="45px"></a></div>
                <div class="sosmed tele">
                    <a href=""><img src="FP LBE NCC/logoTELE2.png" width="45px"></a></div>
            </div>

        </div>
    </div>

    

<!--  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 -->
    <div class="footer">
            <p class="copy">Copyright &#169 2021. Kelompok FP LBE NCC</p>
    </div>
    <script src="FP LBE NCC/script.js"></script>
</body>
</html>
