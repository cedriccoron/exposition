<!DOCTYPE html>
<html lang="fr" >

<head>
  <meta charset="UTF-8">
  <title>Exposition Universelle</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

  <link href='//fonts.googleapis.com/css?family=Abel|Lato:100,300,400,700,900|Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
  <link href='//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css' rel='stylesheet' type='text/css'>

  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <style >
  html,
  body {
    background: #FFF;
    color: #444;
    font-family: 'Lato', sans-serif;
    margin: 0 auto;
    overflow-X: hidden;
    overflow-Y: auto;
    padding: 0;
  }

  a {
    color: inherit;
    text-decoration: none;
  }

  a:hover {
    color: #FF5959;
  }

  ul,
  li {
    list-style-type: none;
    margin: 0 auto;
    padding: 0;
  }

  ul li {
    display: inline-block;
  }

  header,
  section,
  .container,
  .box {
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: relative;
  }

  header {
    background: #FFF;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.35);
    height: 60px;
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    width: initial;
    z-index: 9;
    -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
    -moz-transform: matrix(1, 0, 0, 1, 0, 0);
    transform: matrix(1, 0, 0, 1, 0, 0);
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }

  html.active header {
    -webkit-transform: matrix(1, 0, 0, 1, -320, 0);
    -moz-transform: matrix(1, 0, 0, 1, -320, 0);
    transform: matrix(1, 0, 0, 1, -320, 0);
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }

  header .box {
    display: none;
    height: 40px;
    line-height: 40px;
    margin: 0 80px;
    padding: 10px;
  }

  header .box > ul {
    display: flex;
  }

  header .box > ul li {
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
  }

  #overlay {
    background: #000;
    bottom: 0;
    height: 100%;
    left: 0;
    opacity: 0;
    overflow: hidden;
    position: fixed;
    right: 0;
    top: 0;
    visibility: hidden;
    width: 100%;
    z-index: 99;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }

  html.active #overlay {
    opacity: .65;
    visibility: visible;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }

  #home,
  .logo > a {
    border-radius: 8px;
    box-shadow: inset 0 0 0 2px #FFF, inset 0 0 0 3px #FF5959;
    color: #FF5959;
    display: block;
    font-size: 32px;
    height: 36px;
    left: 0;
    line-height: 36px;
    margin: 10px 20px 10px 30px;
    overflow: hidden;
    padding: 2px;
    position: fixed;
    text-align: center;
    top: 0;
    width: 36px;
  }

  .logo {
    font-size: 32px;
    height: 40px;
    line-height: 40px;
    margin: 0 auto;
    overflow: hidden;
    padding: 10px;
    position: relative;
    width: initial;
  }

  .logo > a {
    display: inline-block;
    margin: 0 auto 0 10px;
    position: relative;
  }

  .sign-up {
    background: #FF5959;
    border: 1px solid #FF5959;
    color: #FFF;
    font-family: 'Abel', sans-serif;
    font-size: 16px;
    font-weight: bold;
    height: 40px;
    letter-spacing: 1px;
    line-height: 40px;
    margin: 10px;
    overflow: hidden;
    padding: 0;
    position: relative;
    text-align: center;
  }

  .sign-up:hover {
    background: #FFF;
  }

  .sign-up a {
    display: block;
  }

  .sign-up span {
    margin: 0 auto 0 8px;
  }

  #close-menu {
    border: 1px solid;
    border-radius: 20px;
    color: #333;
    cursor: pointer;
    display: block;
    height: 20px;
    line-height: 20px;
    margin: 15px 20px 15px auto;
    padding: 4px;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;
    width: 20px;
  }

  section {
    background-attachment: fixed;
    background-position: center;
    background-size: cover;
    z-index: 2;
    -webkit-transform: matrix(1, 0, 0, 1, 0, 0);
    -moz-transform: matrix(1, 0, 0, 1, 0, 0);
    transform: matrix(1, 0, 0, 1, 0, 0);
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }

  #intro {
    background-image: url('https://fondation.michelin.com/wp-content/uploads/2017/05/PHOTO-POUR-SITE.jpg');
  }

  #portfolio {
    background-image: url('https://www.nga.gov/content/dam/ngaweb/features/slideshows/Exposition-Universelle-de-1889/03fntmonum.jpg');
  }

  #blog {
    background-image: url('http://www.gazette-salons.fr/wp-content/uploads/2017/11/Expofrance2025-vue-aerienne.jpg');
  }

  html.active,
  html.active body {
    overflow: hidden;
  }

  html.active section {
    -webkit-transform: matrix(1, 0, 0, 1, -320, 0);
    -moz-transform: matrix(1, 0, 0, 1, -320, 0);
    transform: matrix(1, 0, 0, 1, -320, 0);
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
  }

  section > h1 {
    color: #FFF;
    font-size: 2em;
    left: 0;
    margin: 0 10%;
    position: absolute;
    right: 0;
    text-align: center;
    text-transform: uppercase;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    transform: translateY(-50%);
  }

  section > h1 > span {
    display: block;
    font-family: 'Cabin', cursive;
    font-size: 16px;
    font-style: italic;
    font-weight: 400;
    text-transform: none;
  }


  html,body {
    padding:0;
    margin:0;
    background:#fafafa;
    text-align:center;
  }

  body {
    padding-top:4em;
  }

  h1 {
    margin-bottom:3rem;
    font-family:sans-serif;
    color:#666;
  }

  button {
    position:relative;
    border:0;
    margin:0;
    padding:0;
    cursor:pointer;
    font-size:1rem;
    font-weight:bold;
    color:rgba(0,0,0,0);
    background:transparent;
    border-radius:.25rem;
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-touch-callout: none;
  }

  button,
  button:after,
  button:before {
    padding:.6875rem 2rem;
    -webkit-transition:-webkit-transform 0.75s,background-color .125s;
    -moz-transition:-moz-transform 0.75s,background-color .125s;
    -ms-transition:-ms-transform 0.75s,background-color .125s;
    transition:transform 0.75s,background-color .125s;
    -webkit-transform-style:preserve-3d;
    -moz-transform-style:preserve-3d;
    -ms-transform-style:preserve-3d;
    transform-style:preserve-3d;
  }

  button:after,
  button:before {
    position:absolute;
    top:0;
    bottom:0;
    left:0;
    right:0;
    border-radius:.25rem;
    -webkit-backface-visibility:hidden;
    -moz-backface-visibility:hidden;
    -ms-backface-visibility:hidden;
    backface-visibility:hidden;

  }

  button:before {
    z-index:2;
    color:#fff;
    background-color:#3e87ec;
    content:attr(data-label);
  }

  button:after {
    z-index:1;
    background-color:#999;
    background-repeat:no-repeat;
    background-position:center center;
    background-image:url(data:image/gif;base64,R0lGODlhEAAQAPIAAJmZmf///7CwsOPj4////9fX18rKysPDwyH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQACgABACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkEAAoAAgAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkEAAoAAwAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkEAAoABAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQACgAFACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQACgAGACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAAKAAcALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==);
    -webkit-transform:rotateX(180deg);
    -moz-transform:rotateX(180deg);
    -ms-transform:rotateX(180deg);
    transform:rotateX(180deg);
    content:'';
  }

  button:active:before {
    background-color:#3571c8;
  }

  @media only screen and (min-width: 520px) {
    header .container {
      max-width: 640px
    }
    header .box {
      display: block;
    }
    section > h1 {
      font-size: 3em
    }
  }

  </style>
</head>

<body>

  <header>
    <div class="container">
      <span id="home"><span class="ion-camera"></span></span>
      <div class="box">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Héritage</a></li>
          <li><a href="#">Enjeux</a></li>
        </ul>
      </div>
      <span id="menu"><span class="ion-navicon-round"></span></span>
    </div>
  </header>
  <section id="intro">
    <h1>La France est candidate pour 2025
      <span>
        La candidature de la France pour 2025 est née de la volonté d’organiser une grande Exposition Universelle pour faire une
        nouvelle fois de la France le centre de l'innovation .
      </span>
    </h1>
  </section>
  <section id="portfolio">
    <h1>Un héritage qui doit se perpétuer et rayonner sur le monde
    </br>
      <span>La France a précédemment accueilli 6 grandes Expositions Universelles. En pleine révolution
        industrielle, elles ont accéléré les grandes évolutions techniques, culturelles et sociales qui permit un tel XXème
        siècle de voir le jour.
      </span>
      </br>
      <button id="heritage" data-label="Découvrir"><a href="heritage.html">Découvrir</a>!</button>
      </h1>
  </section>
  <section id="blog">
    <h1>La France invite le monde à partager une nouvelle ambition, universelle
      </br>
      <span>
        Pour 2025, le sujet est tourné vers l’avenir et la jeunesse. L'exposition permet à chaque pays, petit ou grand, de partager
        ses connaissance, son savoir-faire ou sa culture au service du bien commun. Pendant 6 mois, les visiteurs et les pays du
        monde entier seront invités à diffuser leur vision, leurs innovations et leurs solutions.
      </span>
      </br>
      <button id="enjeux" data-label="Découvrir"><a href="enjeux.html">Découvrir</a></button>
    </h1>
  </section>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>



  <script  src="js/index.js">
    $(function() {

  var w = $(window).width(),
    h = $(window).height();
  //$('section').width(w);
  $('section').height(h);
  $('menu .container').height(h - 60);
  $('body').prepend('<div id="overlay">');

  $('#menu').click(function() {$('html').addClass('active');});
  $('#close-menu').click(function() {$('html').removeClass('active');});
  $('#overlay').click(function() {$('html').removeClass('active');});
  $(window).resize(function() {
    var w = $(window).width(),
      h = $(window).height();
    //$('section').width(w);
    $('section').height(h);
    $('menu .container').height(h - 60);
  });

});

document.getElementById("heritage").onclick = function () {
        location.href = "exposition/heritage.html";
    };

document.getElementById("enjeux").onclick = function () {
            location.href = "exposition/enjeux.html";
        };

  </script>




</body>

</html>
