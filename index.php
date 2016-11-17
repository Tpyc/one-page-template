<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Поколение Ангстрем</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600&subset=cyrillic,latin" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="jquery.fullPage.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.fullPage.js"></script>

    <style>

        /* Style for our header texts
        * --------------------------------------- */
        h1{
            font-size: 5em;
            font-family: arial,helvetica;
            color: #fff;
            margin:0;
            padding:0;
        }
        .intro p{
            color: #fff;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
        }

        /* Fixed header and footer.
        * --------------------------------------- */
        #header, #footer{
            position:fixed;
            height: 61px;
            display:block;
            width: 100%;

            z-index:9;
            text-align:center;
            color: #f2f2f2;
            padding: 0;
        }

        #header{
            top:0px;
        }
        #footer{
            bottom:0px;
        }


        /* Bottom menu
        * --------------------------------------- */
        #infoMenu {
            bottom: 80px;
        }
        #infoMenu li a {
            color: #fff;
            z-index: 999;
        }
        .section{
            background-size: cover;
        }
        #section0{
            background-image: url(examples/imgs/bg1.jpg);
        }

        #menu li {
            display:inline-block;
            margin: 10px;
            color: #000;
            background:#fff;
            background: rgba(255,255,255, 0.5);
            -webkit-border-radius: 10px;
            border-radius: 10px;
        }
        #menu li.active{
            background:#666;
            background: rgba(0,0,0, 0.5);
            color: #fff;
        }
        #menu li a{
            text-decoration:none;
            color: #000;
        }
        #menu li.active a:hover{
            color: #000;
        }
        #menu li:hover{
            background: rgba(255,255,255, 0.8);
        }
        #menu li a,
        #menu li.active a{
            padding: 9px 18px;
            display:block;
        }
        #menu li.active a{
            color: #fff;
        }

        #menu {
            position: fixed;
            top: 0;
            left: 0;
            height: 40px;
            z-index: 70;
            width: 100%;
            padding: 0;
            margin: 0;
        }

    </style>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#content').fullpage({
                anchors: ['firstPage', 'about', 'rules', 'directions', 'contacts'],
                sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C', '#C63D0F', '#232323'],
                css3: true,
                loopTop: true,
                loopBottom: true,
                navigation: true,
                navigationPosition: 'right',
                navigationTooltips: ['First page', 'Second page', 'Third and last page', 'Направления', 'Контакты']
            });
        });
    </script>

</head>
<body>
<!--[if lt IE 8]><p class="browserupgrade">Ваш браузер <strong>устарел</strong>. Пожалуйста, <a href="http://browsehappy.com/">обновите ваш браузер</a> для комфортного веб-сёрфинга.</p><![endif]-->

<div id="header">
            <ul id="menu">
                <li><a href="#about" >Конкурс</a></li>
                <li><a href="#rules" >Условия</a></li>
                <li><a href="#directions" >Направления</a></li>
                <li><a href="#contacts" >Контакты</a></li>
            </ul>
</div>

<div id="content">
    <div class="section " id="section0">
        <div class="intro">
            <h1>Fixed elements</h1>
            <p>Create your own headers and footers</p>
            <p><a href="#secondPage">Далее</a></p>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1">
            <div class="intro">
                <h1>How to do it</h1>
                <p>
                    You will need to place your header and footer outside the plugin's wrapper.
                    This way it won't move on scrolling. Take a look at the source code of this page.
                </p>
                <p>
                    You will need to place your header and footer outside the plugin's wrapper.
                    This way it won't move on scrolling. Take a look at the source code of this page.
                </p>
                <p>
                    You will need to place your header and footer outside the plugin's wrapper.
                    This way it won't move on scrolling. Take a look at the source code of this page.
                </p>
                <p>
                    You will need to place your header and footer outside the plugin's wrapper.
                    This way it won't move on scrolling. Take a look at the source code of this page.
                </p>
                <p>
                    You will need to place your header and footer outside the plugin's wrapper.
                    This way it won't move on scrolling. Take a look at the source code of this page.
                </p>
            </div>
        </div>

        <div class="slide" id="slide2">
            <h1>Slide 2</h1>
            <img src="imgs/iphone-blue.png" alt="iphone" id="iphone-two" />
        </div>

    </div>
    <div class="section" id="section2">
        <div class="intro">
            <h1>Enjoy it</h1>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="intro">
            <h1>Enjoy it</h1>
        </div>
    </div>
    <div class="section" id="section4">
        <div class="intro">
            <h1>Enjoy it</h1>
        </div>
    </div>
</div>

<div class="footer container">
    <div class="row">
        <div class="footer-copy col-md-12"><p>&copy; ОАО «Поколение Ангстрем» 2016</p></div>
    </div>
</div><!-- /footer -->

</body>
</html>