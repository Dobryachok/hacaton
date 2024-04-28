<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--<link rel="stylesheet" href="/css/iter2.css" type="text/css">-->
</head>
<body>
    <style>
        :root {
	        --index: calc(1vw + 1vh);
	        --transition: cubic-bezier(.1, .7, 0, 1);
        }
        :root {
            --rad: 0.55rem;
            --dur: 0.3s;
            --color-dark: #2f2f2f;
            --color-light: #fff;
            --color-brand: #57bd84;
            --font-fam: 'Lato', sans-serif;
            --height: 5rem;
            --btn-width: 6rem;
            --bez: cubic-bezier(0, 0, 0.43, 1.49);
        }
        body::-webkit-scrollbar {
            width: 7.5px;
        }
        body::-webkit-scrollbar-track {
            background: rgba(0,0,0,1);
        }
        body::-webkit-scrollbar-thumb {
            background-color: #3a3a3a;
            border-radius: 20px;
        }
        body {
            font: Matter, sans-serif;
            margin: 0;
            overflow-x: hidden;
            user-select: none;
            overscroll-behavior: none;
        }
        .head{
            font: clamp(1em, var(--index)*1.4, 2em) Arial, sans-serif;
            padding: 0 ;
            margin: 0 auto;
            width: 100vw;
            height: calc(var(--index)*2.5);
            display: flex;
            flex-direction:row;
        	align-items: center;
        	justify-content: center;
        	box-shadow: 0 2px 4px #9dacce99;
            z-index:2;
            position:relative;
        }
        .breadcrumb-block {
            font: clamp(0.5em, var(--index)*0.6, 1em) Arial, sans-serif;
            background-color: #f6f6f6;
            width: 100vw;
            height: calc(var(--index)*1.8);
            margin: 0px 0px 0 auto;
            padding:0px calc(var(--index)*5) 0px calc(var(--index)*5);
            display: flex;
            flex-direction:row;
            align-items: center;
            justify-content: left;
            border-bottom: 1px solid #e1e1e1;
            border-top: 1px solid #e1e1e1;
            position:relative;
            z-index:1;
        	box-shadow: 0 2px 4px #f1f1f1;
        }
        .inhead{
            padding: calc(var(--index)*0.25) ;
        }
        .inp {
            background: var(--color-light);
            padding: 0 1.6rem;
            margin:calc(var(--index)*0.2);
            border-radius: var(--rad);
            transition: all var(--dur) var(--bez);
            transition-property: width, border-radius;
            z-index: 1;
            position: relative;
            width: 30vw;
            height: calc(var(--index)*2);
            border: 1px solid;
            border-color:#272727;
            font: clamp(0.5em, var(--index), 1em) Arial, sans-serif;
        }
        .subi {
            font: clamp(0.6em, var(--index)*1.2, 1.2em) Arial, sans-serif;
            color:#222222;
            background: var(--color-light);
            padding: 0 1.6rem;
            margin:calc(var(--index)*0.2);
            border-radius: var(--rad);
            transition: all var(--dur) var(--bez);
            transition-property: width, border-radius;
            z-index: 1;
            position: relative;
            width: 12.5vw;
            height: calc(var(--index)*2);
            border: 1px solid;
            border-color:#272727;
        }
        .forma{
            display: flex;
            flex-direction:row;
            align-items: center;
            justify-content: center;
            position:relative;
            margin-bottom:(var(--index)*0.5);
        }
        .inbre{
            padding: calc(var(--index)*0.5) ;
        }
        .rege{
            color: #0d4cd3;
            background: #e4ecfd;
            border-radius: 8px;
        }
        .carousel-3d {
            margin-top: calc(var(--index)*(-2));
            padding: 20px;
            -webkit-perspective: 500px;
            perspective: 500px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
            z-index: 1;
            top: 0;
            margin-right: auto;
            margin-left: auto;
            transform: scale(0.5);
        }
        .vash {
            margin-top: calc(var(--index)*(-4));
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow: hidden;
            z-index: 3;
            top: 0;
            margin-right: auto;
            margin-left: auto;
            transform: scale(0.45);
        }
        .carousel-3d > * {
            flex: 0 0 auto;
        }
        .carousel-3d figure {
            margin: 0;
            width: 50%;
            -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: -webkit-transform 0.5s;
            transition: transform 0.5s;
            transition: transform 0.5s, -webkit-transform 0.5s;
        }
        .carousel-3d figure img,
        .carousel-3d figure div {
            width: 100%;
            box-sizing: border-box;
            padding: 0;
        }
        .carousel-3d figure img {
            user-select: none;
        }
        .carousel-3d figure div:not(:first-of-type),
        .carousel-3d figure img:not(:first-of-type) {
            position: absolute;
            left: 0;
            top: 0;
        }
        .carousel-3d nav {
            display: flex;
            justify-content: center;
            width:100vw;
            margin: calc(var(--index)*13.5) auto calc(var(--index)*10) auto;
            z-index: 100; 
            position: absolute;
        }
        .carousel-3d nav button {
            flex: 0 0 auto;
            background: var(--color-light);
            padding: 0 0.8rem;
            border-radius: calc(var(--index)*2.5);;
            transition: all var(--dur) var(--bez);
            margin: 0 calc(var(--index)*15) 0 calc(var(--index)*15);
            cursor: pointer;
            font-weight: bold;
            height:3em;
            width:3em;
            border: 1px solid;
            border-color:#272727;
            transition: all 0.3s ease;
            transform: scale(2.5);
        }
        .carousel-3d nav button:hover {
            color: #FFF;
            background: rgb(26, 87, 255, 0.9);
        }
        .poisk{
            width:80vw;
            display;flex;
            flex-direction:column;
            justify-content:center;
            margin:auto;
            padding-bottom:calc(var(--index)*5);
            
        }
        .obje{
            background-color:#f9f9f9;
            display;flex;
            flex-direction:column;
            justify-content:left;
            border-radius: var(--rad);
            transition: all var(--dur) var(--bez);
            padding:calc(var(--index)*1);
            margin:calc(var(--index)) 0 0 0;
            
        }
        .onlod{
            font: clamp(0.9em, var(--index)*1, 1.8em) Arial, sans-serif;
            color:#0173c1;
            padding-bottom:calc(var(--index)*0.5);
            
            
        }
        .podpi{
            font: clamp(0.6em, var(--index)*0.6, 1.2em) Arial, sans-serif;
            color:#272727;
        }
        .trichet{
            font: clamp(0.6em, var(--index)*0.6, 1.2em) Arial, sans-serif;
            color:#0173c1;
            display:flex;
            flex-direction:row;
            width:90vw;
            height: calc(var(--index)* 2.5);
            
        }
        .trichet > div{
            display:flex;
            flex-direction:row;
            justify-content:center;
            margin:auto;
        }
        .fourthbl > div{
           margin:(var(--index)*0.2);
        }
        .blya{
            transform: scale(0.8);
        }
        .zagol{
            color: #eeeeee;
            font: clamp(0.9em, var(--index)*1.8, 1.8em) Arial, sans-serif;
            font-weight: bold;
        }
        .podzagol{
            margin-top:calc(var(--index)*0.75);
            color: #eeeeee;
            font: clamp(0.6em, var(--index)*1.2, 1.2em) Arial, sans-serif;
        }
        .podtext{
            display:flex;
            flex-direction:column;
            justify-content:center;
            position:absolute;
            width:50vw;
            margin-right:auto;
            padding-top:calc(var(--index));
            padding-left:calc(var(--index)*3);
            padding-right:calc(var(--index)*2);
            padding-bottom:calc(var(--index)*1.5);
        }
        .suprf{
            width:calc(var(--index)*70);
            margin:auto;
        }
        .vopros{
            display:flex;
        }
        .podknopka{
            font: clamp(0.5em, var(--index), 1em) Arial, sans-serif;
            margin-top:calc(var(--index)*0.75);
            color: #222222;
            background: var(--color-light);
            padding: 0 1rem;
            border-radius: var(--rad);
            transition: all var(--dur) var(--bez);
            transition-property: width, border-radius;
            z-index: 1;
            position: relative;
            width: 10vw;
            height: calc(var(--index)* 1.5);
        }
        .fullpo{
            width:100vw;
            padding-top:calc(var(--index)*2);
            background: linear-gradient(180deg, rgba(26, 87, 255, 0.9) 0%, rgba(26, 87, 255, 0.7) 100%);
        }
        .pyt{
            display:flex;
        }
        .kudaf{
            width:calc(var(--index)*70);
            margin:auto;
            position:relative;
            right:calc(var(--index)*10);
        }
        .podpyt{
            display:flex;
            flex-direction:column;
            justify-content:center;
            position:absolute;
            left:40vw;
            width:50vw;
            margin-left:auto;
            padding-top:calc(var(--index));
            padding-left:calc(var(--index)*2.5);
            padding-right:calc(var(--index)*2.5);
            padding-bottom:calc(var(--index)*1.5);
        }
        .pukt{
            color: rgb(26, 87, 255);
            font: clamp(0.7em, var(--index)*1.4, 1.4em) Arial, sans-serif;
            font-weight: bold;
            padding-top:calc(var(--index)*0.75);
        }
        .vibor{
            text-align:center;
            width:50vw;
            margin-left:auto;
            margin-right:auto;
            position:relative;
            bottom:calc(var(--index)*(-2));
            font: clamp(1.2em, var(--index)*2.4, 2.4em) Arial, sans-serif;
            z-index:5;
        }
        .podskaska{
            text-align:center;
            width:50vw;
            margin-left:auto;
            margin-right:auto;
            position:relative;
            bottom:calc(var(--index)*(4));
            font: clamp(0.8em, var(--index)*1.6, 1.6em) Arial, sans-serif;
        }
        .ani1{
            animation-name: ani1left;
            animation-delay: 0.1s;
            position:relative;
            animation-duration: 1s;
            animation-timing-function: ease-in-out;
            animation-fill-mode: forwards;
        }
        @keyframes ani1left {
            0%{
                left: 0;
            }
            100%{
                left: -30vw;
            }
        }
    </style>
    	
    <div class="head">
        <div class="trichet">
            <div class="firstbl">
                <div class="bl1_1"><img class="blya"src="https://xn--80abcohr6can.xn--p1ai/images/logo.png"/></div>
                </div>
                <div class="secondbl">
                    <div class="bl2_1">Кемеровская область</div>
                </div>
                <div class="thirdbl">
                    <div class="bl3_1">Каталог услуг</div>
                    <div class="bl3_2">Строительство</div>
                    <div class="bl3_3">Помощь</div>
                    <div class="bl3_3">Оплата</div>
                </div>
                <div class="fourthbl">
                    <div class="bl4_1">Войти</div>
                    <div class="bl4_2">Регистрация</div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="breadcrumb-block">
        <div class="inbre">Главная</div>
        <div class="inbre">каталог услуг</div>
    </div>
    
    <div class="vopros">
        <img class="suprf"src="https://levitanar.ru/images/superfonend.png"/>
        <div class="podtext">
            <div class="zagol">Не можете найти подходящую услугу?<br> Семья Района Госуслугова спешит к вам на помощь!</div>
            <div class="podzagol">Выберите персонажа, который станет вашим личным помощником.</div>
            <button class="podknopka">подробнее</button>
        </div>
    </div>
    
    <div class="pyt">
        <img class="kudaf" src="https://levitanar.ru/images/kudafon2.png"/>
        <div class="podpyt">
            <div class="pukt">1. Выберите персонажа, который схож с вами по возрасту и вашей категории</div>
            <div class="pukt">2. Следуйте инструкциям вашего помощника, он вам всё подскажет</div>
            <div class="pukt">3. Радуйтесь результату!</div>
        </div>
    </div>
    
    <div class="vibor">Выбор персонажа:</div>
    <div class="vash">
        
    </div>
    <div class="carousel-3d" data-gap="20" data-bfc>
        <figure>
            <div><a href="#1" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/shkolnik1.png" alt=""/></a></div>
            <div><a href="#2" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/student1.png" alt=""/></a></div>
            <div><a href="#3" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/roditel1.png" alt=""/></a></div>
            <div><a href="#4" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/pensioner1.png" alt=""/></a></div>
            <div><a href="#5" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/bisnesman1.png" alt=""/></a></div>
            <div><a href="#1" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/shkolnik1.png" alt=""/></a></div>
            <div><a href="#2" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/student1.png" alt=""/></a></div>
            <div><a href="#3" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/roditel1.png" alt=""/></a></div>
            <div><a href="#4" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/pensioner1.png" alt=""/></a></div>
            <div><a href="#5" onclick="tutor(this.href)"><img src="https://levitanar.ru/images/bisnesman1.png" alt=""/></a></div>
        </figure>
        <nav>
            <button class="nav prev"><</button>
            <button class="nav next">></button>
        </nav>
    </div>
    <div class="podskaska">Чтобы выбрать персонажа, нажмите на его иконку</div>
    
    <div class='fullpo'>
    
    <form method="post" class="forma" action ="search.php">
        <input type="text" class="inp" name="search" placeholder="Введите запрос">
        <input type="text" class="inp" name="kvartal" placeholder="Введите район">
        <button type="submit" class="subi" name="submit" placeholder="Поиск">Найти</button>
    </form>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://assets.codepen.io/16327/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@latest/bundled/lenis.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script> 
    <script src="https://unpkg.com/split-type"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!--<script src="https://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <script>
        function tutor(tyta){
            tyta = tyta.split('#')[1]-1;
            document.querySelector('.carousel-3d').style.display = "none";
            document.querySelector('.podskaska').style.display = "none";
            var mas=["https://levitanar.ru/images/shkolnik1.png",
                    "https://levitanar.ru/images/student1.png",
                    "https://levitanar.ru/images/roditel1.png",
                    "https://levitanar.ru/images/pensioner1.png",
                    "https://levitanar.ru/images/bisnesman1.png"];
            var img = document.createElement("img");
            img.src = mas[tyta];
            document.querySelector('.vash').appendChild(img);
            document.querySelector('.vash').classList.add('ani1');
        }
    </script>
    
	<script>
	    window.addEventListener("load", () => {
            var carousels = document.querySelectorAll(".carousel-3d");
            for (var i = 0; i < carousels.length; i++) {
                carousel(carousels[i]);
            }
        });
        function carousel(root) {
            var figure = root.querySelector("figure"),
            nav = root.querySelector("nav"),
            images = figure.children,
            n = images.length,
            gap = root.dataset.gap || 0,
            bfc = "bfc" in root.dataset,
            theta = 2 * Math.PI / n,
            currImage = 0;
            setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            window.addEventListener("resize", () => {
                setupCarousel(n, parseFloat(getComputedStyle(images[0]).width));
            });
            setupNavigation();
            function setupCarousel(n, s) {
                var apothem = s / (2 * Math.tan(Math.PI / n));
                figure.style.transformOrigin = `50% 50% ${-apothem}px`;
                for (var i = 0; i < n; i++) images[i].style.padding = `0 ${gap}px`;
                for (i = 0; i < n; i++) {
                    images[i].style.transformOrigin = `50% 50% ${-apothem}px`;
                    images[i].style.transform = `rotateY(${i * theta}rad)`;
                }
                if (bfc)
                for (i = 0; i < n; i++) images[i].style.backfaceVisibility = "hidden";
                rotateCarousel(currImage);
            }
            function setupNavigation() {
                nav.addEventListener("click", onClick, true);
                function onClick(e) {
                    e.stopPropagation();
                    var t = e.target;
                    if (t.tagName.toUpperCase() != "BUTTON") return;
                    if (t.classList.contains("next")) {
                        currImage++;
                        } else {
                        currImage--;
                    }
                    rotateCarousel(currImage);
                }
            }
            function rotateCarousel(imageIndex) {
                figure.style.transform = `rotateY(${imageIndex * -theta}rad)`;
            }
            /*var xClick;
            var mouseDown;*/ 
            /* Смена слайдов мышкой */ /*   
            figure.onmousedown = (event) => {
                xClick = event.pageX;
                mouseDown = true;
            };
            figure.onmouseup = (event) => {
                mouseDown = false;
            };    
            figure.onmousemove = (event) => {
                if (mouseDown) {
                    var xMove = event.pageX;
                    if (Math.floor(xClick - xMove) > 5) {
                        currImage++;
                        rotateCarousel(currImage);
                        mouseDown = false;
                    }
                    else if (Math.floor(xClick - xMove) < -5) {
                        currImage--;
                        rotateCarousel(currImage);
                        mouseDown = false;
                    }
                }
            };*/
            /* Смена слайдов пальцем *//*    
            figure.ontouchstart = (event) => {
                xClick = event.changedTouches[0].pageX;
                mouseDown = true;
            };
            figure.ontouchend = (event) => {
                mouseDown = false;
            };    
            figure.ontouchmove = (event) => {
                if (mouseDown) {
                    var xMove = event.changedTouches[0].pageX;
                    if (Math.floor(xClick - xMove) > 5) {
                        currImage++;
                        rotateCarousel(currImage);
                        mouseDown = false;
                    }
                    else if (Math.floor(xClick - xMove) < -5) {
                        currImage--;
                        rotateCarousel(currImage);
                        mouseDown = false;
                    }
                }
            };*/
        }
	</script>
	<script>
        const lenis = new Lenis({
            duration: 1.2,
            easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        })
        function raf(time) {
          lenis.raf(time)
          requestAnimationFrame(raf)
        }
        requestAnimationFrame(raf)
    </script>
</html>
<?php
    
    /*header("Location: https://levitanar.ru/re/search.php");*/
    $connect = mysqli_connect("localhost","u2289758_ree","Gross14hoiBah","u2289758_reestr1") or die("Error");
    mysqli_set_charset($connect, "utf8");
    $letterseng = array(
        'q', 'w', 'e', 'r', 't', 'y',
        'u', 'i', 'o', 'p', '[', ']',
        'a', 's', 'd', 'f', 'g', 'h',
        'j', 'k', 'l', ';', '"', 'z',
        'x', 'c', 'v', 'b', 'n', 'm',
        ',', '.', '`', '<', '>', '~',
        'Q', 'W', 'E', 'R', 'T', 'Y',
        'U', 'I', 'O', 'P', '{', '}',
        'A', 'S', 'D', 'F', 'G', 'H',
        'J', 'K', 'L', ':', '"', 'Z',
        'X', 'C', 'V', 'B', 'N', 'M');
    $lettersrus = array(
        'й', 'ц', 'у', 'к', 'е', 'н',
        'г', 'ш', 'щ', 'з', 'х', 'ъ',
        'ф', 'ы', 'в', 'а', 'п', 'р',
        'о', 'л', 'д', 'ж', 'э', 'я',
        'ч', 'с', 'м', 'и', 'т', 'ь',
        'б', 'ю', 'ё', 'Б', 'Ю', 'Ё',
        'Й', 'Ц', 'У', 'К', 'Е', 'Н',
        'Г', 'Ш', 'Щ', 'З', 'Х', 'Ъ',
        'Ф', 'Ы', 'В', 'А', 'П', 'Р',
        'О', 'Л', 'Д', 'Ж', 'Э', 'Я',
        'Ч', 'С', 'М', 'И', 'Т', 'Ь',);
    
    function fuzzy_compare($x,$y,$minLen=1,$maxLen=0){  
        $l1 = strlen($x);
        $l2 = strlen($y);
        if ($maxLen ==0) $maxLen = min($l1,$l2);  
        $summ = 0;
        $count1 = 0;  
        for($l = $minLen; $l<=$maxLen;$l++){
            for ($i1 = 0; $i1< ($l1 - $l); $i1++){
                $part = substr($x,$i1,$l);      
                $count1 ++;
                if (strpos($y,$part)!==FALSE) $summ++;
            }      
        }  
        return 100*$summ/$count1;
    }
    
    if(isset($_POST['submit'])){
        $search = explode(" ",$_POST['search']);
        $kvartal = explode(" ",$_POST['kvartal']);
        if((iconv_strlen($search[0], "UTF-8") > 3) and (iconv_strlen($kvartal[0], "UTF-8") > 3)){
            $searcharr = array();
            $input = iconv("UTF-8", "windows-1251", implode(" ", $search));
            $input = iconv("windows-1251","UTF-8", $input);
            $str = str_replace($letterseng, $lettersrus, $input);
            $kvartalarr = array();
            $input2 = iconv("UTF-8", "windows-1251", implode(" ", $kvartal));
            $input2 = iconv("windows-1251","UTF-8", $input2);
            $st = str_replace($letterseng, $lettersrus, $input2);
            $res1 = mysqli_query($connect, 'SELECT Service FROM reestr3');
            $result1 = array();
            $resultfull = array();
            while ($row1 = $res1->fetch_array())
                $result1[] = $row1[0];
            $count = count($search);
            $array = array();
            $art = array();
            $i = 0;
            foreach($search as $key) {
                $i++;
                if($i < $count) $array[] = "CONCAT (`Service`) LIKE '%".$key."%' OR "; 
                else $array[] = "CONCAT (`Service`) LIKE '%".$key."%'";  
            }
            $sql = "SELECT * FROM `reestr3` WHERE ".implode("", $array);
            $query = mysqli_query($connect, $sql);
            while($row = mysqli_fetch_assoc($query)){
                $resu = mysqli_query($connect,"SELECT `Id` FROM `reestr3` WHERE `Service`=".$row['Service']);
                $art[]=$row['Id']-1;
            }
            for ($j = 0; $j < count($result1); $j++) {
                $resultarr = array();
                $p = 0;
                $ui=2.1;
                foreach(explode(" ", $result1[$j]) as $index6=>$yee){
                    if($yee == explode(" ", $str)[0]){
                        $ui=$ui+2;
                        break;
                    }
                    else{
                        $ui=$ui-0.15;
                    }
                }
                $resultarr[] = (fuzzy_compare($str,$result1[$j],1,2) + similar_text($str,$result1[$j],$p))/2*$ui;
                similar_text($str,$result1[$j],$p);
                $resultarr[] = $j+1;
                $resultarr[] = $p;
                $resultarr[] = fuzzy_compare($str,$result1[$j],1,2);
                $resultarr[] = $ui;
                $resultfull[] = $resultarr;
            }
            for($e = 0; $e < count($art); $e++) {
                $resultfull[$art[$e]][0]=$resultfull[$art[$e]][0]*2;
            }
             
            $sort = array();
            foreach ( $resultfull as $key3 => $row3) {
                $sort[$key3] = $row3[1];
            }
            
            array_multisort($sort, SORT_ASC,  $resultfull);
            
            for ($k = 1; $k < 101; $k++) {
                $id=$resultfull[$k][1];
                $result = mysqli_query($connect,"SELECT `Service` FROM `reestr3` WHERE `Id`=".$id);
                $myrow = mysqli_fetch_array($result)['Service'];
            }
            $res2 = mysqli_query($connect, 'SELECT Responsible FROM reestr3');
            $result2 = array();
            $result2full = array();
            while ($row2 = $res2->fetch_array())
                $result2[] = $row2[0];
            $count2 = count($kvartal);
            $array2 = array();
            $art2 = array();
            $i4 = 0;
            foreach($kvartal as $key2) {
                $i4++;
                if($i4 < $count2) $array2[] = "CONCAT (`Responsible`) LIKE '%".$key2."%' OR "; 
                else $array2[] = "CONCAT (`Responsible`) LIKE '%".$key2."%'";  
            }
            $sql2 = "SELECT * FROM `reestr3` WHERE ".implode("", $array2);
            $query2 = mysqli_query($connect, $sql2);
            while($row2 = mysqli_fetch_assoc($query2)){
                $resu2 = mysqli_query($connect,"SELECT `Id` FROM `reestr3` WHERE `Responsible`=".$row2['Responsible']);
                $art2[]=$row2['Id']-1;
            }
            for ($j2 = 0; $j2 < count($result2); $j2++) {
                $resultarr2 = array();
                $p2 = 0;
                $ui2=3.1;
                foreach(explode(" ", $result2[$j2]) as $index8=>$yee2){
                    if($yee2 == explode(" ", $st)[0]){
                        $ui2=$ui2+2;
                        break;
                    }
                    else{
                        $ui2=$ui2-0.15;
                    }
                }
                $resultarr2[] = (fuzzy_compare($st,$result2[$j2],1,2) + similar_text($st,$result2[$j2],$p2))/2*$ui2;
                similar_text($st,$result2[$j2],$p2);
                $resultarr2[] = $j2+1;
                $resultarr2[] = $p2;
                $resultarr2[] = fuzzy_compare($st,$result2[$j2],1,2);
                $resultarr2[] = $ui2;
                $resultfull2[] = $resultarr2;
            }
            for($e2 = 0; $e2 < count($art2); $e2++) {
                $resultfull2[$art2[$e2]][0]=$resultfull2[$art2[$e2]][0]*2;
            }
            $sort2 = array();
            foreach ( $resultfull2 as $key32 => $row32) {
                $sort2[$key32] = $row32[1];
            }
            array_multisort($sort2, SORT_ASC,  $resultfull2);
            
            for($e3 = 0; $e3 < count($resultfull2); $e3++) {
                $resultfull2[$e3][0]=$resultfull2[$e3][0]+$resultfull[$e3][0];
            }
            $sortfull = array();
            foreach ( $resultfull2 as $keyfull => $rowfull) {
                $sortfull[$keyfull] = $rowfull[0];
            }
            array_multisort($sortfull, SORT_DESC,  $resultfull2);
            $data = array();
            echo "<div class='poisk'>";
            for ($k2 = 1; $k2 < 101; $k2++) {
                $dataset=array();
                $id2=$resultfull2[$k2][1];
                $resultat = mysqli_query($connect,"SELECT `Service` FROM `reestr3` WHERE `Id`=".$id2);
                $myrow2 = mysqli_fetch_array($resultat)['Service'];
                $result = mysqli_query($connect,"SELECT `Responsible` FROM `reestr3` WHERE `Id`=".$id2);
                $myrow = mysqli_fetch_array($result)['Responsible'];
                echo "<div class='obje'>";
                echo "<div class='onlod'>";
                echo $myrow2;
                echo "</div>";
                echo "<div class='podpi'>";
                echo $myrow;
                echo "</div>";
                echo "</div>";
            }
            echo "</div>";
        }
        else echo "<h2>слишком короткий запрос</h>";
    }
    echo "</div>"
?>
