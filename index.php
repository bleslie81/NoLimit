<?php
  session_start();
  require_once('db.php');
?>

<!DOCTYPE html>
<html lang="hu">
<head>
  <link rel="icon" href="nolimitlogo.png" type="image/gif" sizes="32x32">
  <title>NO LIMIT zenekar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--SEO section-->
  <meta property="og:url" content="http://nolimitzenekar.hu/" />
  <meta property="og:image" content="http://nolimitzenekar.hu/mix2.jpg" />
  <!--End of SEO section-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.4.0/lib/darkmode-js.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TimelineMax.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/ScrollMagic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.6/plugins/animation.gsap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="jquery-ui-1.13.1/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <style>
    body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
      overflow-x: hidden;
    }
    h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 5px;      
      font-size: 15px;
      color: #111;
      font-style: italic;
    }
    .container {
      padding: 80px 100px;
    }
    .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
    }
    .person:hover {
      border-color: #f1f1f1;
    }
    .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
    }
    .carousel-caption h3 {
      color: #fff !important;
    }
    @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
    }
    .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
	    isolation: isolate;
    }
    .bg-1 h3 {color: #fff;}
    .bg-1 p {font-style: italic;}
    .list-group-item:first-child {
        border-top-right-radius: 0;
        border-top-left-radius: 0;
    }
    .list-group-item:last-child {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }
    .thumbnail p {
        margin-top: 15px;
        color: #555;
    }
    .btn {
        padding: 10px 20px;
        background-color: #333;
        color: #f1f1f1;
        border-radius: 4px;
        transition: .2s;
    }
    .btn:hover, .btn:focus {
        border: 1px solid #333;
        background-color: #fff;
        color: #000;
    }
    .modal-header, h4, .close {
        background-color: #ff0000;
        color: #fff !important;
        text-align: center;
        font-size: 40px;
        border-radius: 5px 5px 0 0;
    }
    .modal-header, .modal-body {
        padding: 40px 50px;
    }
    .nav-tabs li a {
        color: #777;
    }
    #googleMap {
        width: 100%;
        height: 400px;
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
    }  
    .navbar {
        font-family: Montserrat, sans-serif;
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }
    .navbar li a, .navbar .navbar-brand { 
        color: #d5d5d5 !important;
    }
    .navbar-nav li a:hover {
        color: #fff !important;
    }
    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #000000 !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }
    .open .dropdown-toggle {
        color: #fff;
        background-color: #555 !important;
    }
    .dropdown-menu li a {
        color: #d63535 !important;
    }
    .dropdown-menu li a:hover {
        background-color: red !important;
    }
    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 32px;
      isolation: isolate;
    }
  
    darkmode--activated footer {
      background-color: #2d2d30;
        color: #f5f5f5;
    }
  
    footer a {
        color: #f5f5f5;
    }
    footer a:hover {
        color: #777;
        text-decoration: none;
    }  
    .form-control {
        border-radius: 0;
    }
    textarea {
        resize: none;
    }
    .warn
    {
    background-color: #FF0000 !important;
    }
    .fa 
    {
    padding: 15px;
    font-size: 20px;
    text-align: center;
    text-decoration: none;
    margin: 2px 2px;
    border-radius: 50%;
    }
    .fa:hover 
    {
    background: #3B5998;
    opacity: 0.8;
    }
    .fa-facebook 
    {
    color: white;
    }
    .busz {
    left: -770px;
    width: 754px;
    height: 95px;
    padding: 10px 0 0 35px;
    position: relative;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 20s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 20s;
    background: url("busz.png") no-repeat;
    font-size: 20px;
    font-family: bebas_neuebold;
    animation-iteration-count: infinite;
    display: inline-block;
    }
      
    @keyframes example {
      100%  {left:1910px; top:0px;}
    }
    .molinotext {
      color: #000;
        margin: 2.5rem 0.5rem;
      
    }
    .alwaysfooter{
        padding: 0px;
      position: fixed;
        border: 0;
        opacity: 1;
      width: 100%;
      bottom: 0;
      background-size: cover;
      text-align: center;
    }
    .alwaysfooter img {
        max-width: 100%;
        }
    .aktualis{
      color: red;
      font-weight: 900;
    }

    .modal-backdrop{
      position: inherit;
    }

    .modal{
      top: 30px;
    }

    .modal-body{
      color: black;
      text-align: center;
      line-height: 2;
    }

    .modal-title{
      font: 400 15px/1.8 Lato, sans-serif;
      color: white;
      font-size: 40px;
    }

    .modal-dialog{
      z-index: 1020;
    }

    .carousel-indicators{
      z-index: 10;
    }

    .form-control{
      z-index: -100;
    }

    #contact{
      z-index: -100;
    }

    .modal-footer{
      background: #ff0000;
    }

  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<script>
  var options = {
    bottom: '64px', // default: '32px'
    right: '32px', // default: '32px'
    left: 'unset', // default: 'unset'
    time: '0.5s', // default: '0.3s'
    mixColor: '#fff', // default: '#fff'
    backgroundColor: '#ffffff',  // default: '#fff'
    buttonColorDark: '#100f2c',  // default: '#100f2c'
    buttonColorLight: '#ffffff', // default: '#fff'
    saveInCookies: false, // default: true,
    label: '🌓', // default: ''
    autoMatchOsTheme: true // default: true
  }

  const darkmode = new Darkmode(options);
  darkmode.showWidget();
  </script>
  <script>
  var tl = new TimelineMax({onUpdate:updatePercentage});
  var tl2 = new TimelineMax();
  const controller = new ScrollMagic.Controller();

  tl.from('.band', .5, {x:200, opacity: 0});
  tl.from('#vori', 1, { width: 0}, "=-.5");
  tl.from('#office', 1, {x:-200, opacity: 0,ease: Power4.easeInOut}, "=-1");
  tl.from('#building', 1, {x:200, opacity: 0, ease: Power4.easeInOut}, "=-.7");

  tl2.from("#box", 1, {opacity: 0, scale: 0});
  tl2.to("#box", .5, {left: "20%", scale: 1.3, borderColor: 'white', borderWidth: 12, boxShadow: '1px 1px 0px 0px rgba(0,0,0,0.09)'})

  const scene = new ScrollMagic.Scene({
    triggerElement: ".band",
              triggerHook: "onLeave",
              duration: "100%"
  })
    .setPin(".band")
    .setTween(tl)
      .addTo(controller);

  const scene2 = new ScrollMagic.Scene({
    triggerElement: "#lali"
  })
  .setTween(tl2)
		.addTo(controller);


  function updatePercentage() {
    //percent.innerHTML = (tl.progress() *100 ).toFixed();
    tl.progress();
    console.log(tl.progress());
  }
</script>
<!-- menü rész -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
	<div class="navbar-header hidden-xs">
      <img src="nolimitlogo.png" alt="Zenekar" width="50" height="50">
    </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">No Limit</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">KEZDŐLAP</a></li>
        <li><a href="#band">A ZENEKAR</a></li>
        <li><a href="#tour">KONCERTEK</a></li>
        <li><a href="#contact">KAPCSOLAT</a></li>
		<li><a href="story.html" class="warn">STORY</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">EGYEBEK
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="lista.html">REPERTOÁR</a></li>
            <li><a href="extra.html">Extrák</a></li>
          </ul>
        </li>
        <!--<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>-->
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide hidden-xs" data-ride="carousel">
    <!-- állapotjelzők -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- bannerek a slidehoz -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="band.jpg" alt="Zenekar" width="600" height="350">
        <div class="carousel-caption">
          <h3>A bandatagok</h3>
          <p>Idetettük magunkat! :)))</p>
        </div>      
      </div>

      <div class="item">
        <img src="mix.jpg" alt="Vegyes" width="600" height="350">
        <div class="carousel-caption">
          <h3>Mindenféle</h3>
          <p>Játszottunk extrém helyeken is! :D</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="mix2.jpg" alt="Los Angeles" width="600" height="350">
        <div class="carousel-caption">
          <h3>Micsoda buli!</h3>
          <p>Jöttünk, láttunk, visszamennénk!</p>
        </div>      
      </div>
    </div>

    <!-- bal és jobb lapozó nyilak -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- bandatagok -->

<div class="busz hidden-sm hidden-xs hidden-md">
    <?php
        $count=0;
        $sql1 = "SELECT * FROM concert ORDER BY mikor";
        $result = mysqli_query($con,$sql1);
        $row=mysqli_num_rows($result);
        while($row = $result->fetch_assoc()) {
          $koncertideje=strtotime($row['mikor']);
          $jelenlegidatum=strtotime(date("Y-m-d"));
          $count++;
          if($koncertideje-$jelenlegidatum>0){
            echo "<p class='molinotext'>".$row['mikor']." - ".$row['hol']." (".$row['hour'].")"."</p>";
          break;
          }
        }
        if($count==0){
          echo "<p class='molinotext'>Hamarosan...</p>";
        }
    ?>
</div>

<div id="band" class="container text-center">
  <h3 class="text-center">A ZENEKAR</h3>
  <p><em>Zene határok nélkül!</em></p>
  <p>Ahogy lenni szokott. Poros pince, pálinkás- és borosüvegek, szétgyepált kezdő hangszerek, recsegő hangtechnika, bizonytalan ujjak, sok nevetés és a felfedezés öröme... Szóval minden adott volt! :) Innen indultunk el zenei kalandozásunkra. Első számunknak nagyon örültünk, azután megállás nélkül jött a többi. Rengeteg fellépésen, élményeken, tapasztalatokon vagyunk túl. Tisztán örömzenélés hosszú éve, ami nem fakul... :)</p>
  <br>
  <div class="row">
    <div class="col-sm-3" id="lali">
      <p class="text-center"><strong>SÁRKÖZI LAJOS</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="Lalimini2.jpg" class="img-circle person" alt="Lala" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Dob, vokál, ének</p>
        <p>A zenekar ütemfelelőse!</p>
        <p>2009 óta tag</p>
      </div>
    </div>
    <div class="col-sm-3" id="vori">
      <p class="text-center"><strong>VÖRÖS LÁSZLÓ</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="lacee.jpg" class="img-circle person" alt="Lacee" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Basszusgitár, vokál, ének</p>
        <p>Másik ütemfelelős</p>
        <p>2009 óta tag</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>ZSIGA DÁNIEL</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="dancus.jpg" class="img-circle person" alt="Dancus" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Szólógitár, ének</p>
        <p>A hosszú szólók és az ének felelőse</p>
        <p>2009 óta tag</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>BOLVÁRI LÁSZLÓ</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="szintiboy2.jpg" class="img-circle person" alt="Borysz" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Billentyű, vokál, ének</p>
        <p>Aki feketén-fehéren szolgáltatja a dallamokat</p>
        <p>2014 óta tag</p>
      </div>
    </div>
  </div>
</div>

<!-- fellépések -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">KONCERTEK</h3>
    <p class="text-center">Fellépéseink helyszínei.<br> Reméljük, hogy ott lesztek és szórakozunk egy jót!</p>
      <ul class="list-group">
      <?php
          $sql2 = "SELECT * FROM concert WHERE mikor>'2022-01-01' ORDER BY mikor";
          $result = mysqli_query($con,$sql2);
          $row=mysqli_num_rows($result);
          while($row = $result->fetch_assoc()) {
              echo "<li class='list-group-item'>".$row['mikor']." - ".$row['hol']." (".$row['hour'].")"."</li>";
          }
      ?>

        <!--<li class="list-group-item"> </li> -->
        <li class="list-group-item">Hamarosan jön a többi is...</li> 
      </ul>
    <!-- ez egy új dolog lenne, kiemelt helyszínekkel

    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="kiemeltkép.jpg" alt="képaláírás" width="400" height="300">
          <p><strong>Cím</strong></p>
          <p>Rövid leírás</p>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="kiemeltkép.jpg" alt="képaláírás" width="400" height="300">
          <p><strong>Cím</strong></p>
          <p>Rövid leírás</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="kiemeltkép.jpg" alt="képaláírás" width="400" height="300">
          <p><strong>Cím</strong></p>
          <p>Rövid leírás</p>
        </div>
      </div>
    </div>
    -->
  </div>
  
  <!-- modal

  <div class="modal" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Sütik tárolása</h5>
        </div>
        <div class="modal-body">
          <p>Az országos közegészségügyi helyzet miatt fellépéseink elmaradnak. További információt a fellépés szekcióban fogunk közzé tenni. Természetesen mindent megteszünk azért, hogy az elmaradt koncerteket pótolni tudjuk, amint vége lesz ennek a járványnak. Addig is vigyázzatok magatokra és a családtagokra!<br><br>Üdv: a banda!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  -->
</div>

<!-- kapcsolat -->

<?php
  if ($_COOKIE['validate']=="true") 
  {
    ?>
    <div class="alert alert-success alert-dismissible" id="alert">
      <strong>Sikeres üzenetküldés!</strong> Hamarosan válaszolunk!
    </div>
    <script>

      function runEffect() {
        setTimeout(function() {
          $( "#alert" ).removeAttr( "style" ).hide().fadeOut(4000);
        }, 38000 );
      };
  
      // Set effect from select menu value
      $( window ).on("load",function() {
        console.log('load');
        runEffect();
      });
    </script>

    <?php
  } 
  else if ($_COOKIE['validate']=="false") {
    ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
      <strong>Sikertelen üzenetküldés!</strong> Inkább hívj telefonon!
    </div>
    <?php
  }
?>

<div id="contact" class="container">
  <h3 class="text-center">KAPCSOLAT</h3>
  <p class="text-center"><em>Nálunk fontos a kapcsolattartás!</em></p>

  <div class="row">
    <div class="col-md-12 col-lg-12 text-center">
      <p>Hívj bátran!</p>
	    <p><span class="glyphicon glyphicon-user"></span> Sárközi Lajos</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Kalocsa, HUN</p>
      <p><span class="glyphicon glyphicon-phone"></span>Mobil: +36 30 568 4232</p>
    </div>
    <!-- <div class="col-md-8">
      <div class="row">
        <form action = "send.php" method = "POST">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Név" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
          <div class="col-sm-12 form-group">
          <textarea class="form-control" id="message" name="message" placeholder="Szöveg + Aláírás" rows="5" required></textarea>
          </div>
          <br>
            <div class="col-md-12 form-group">
              <label id="muvelet" for="">egy+hat=</label><input id="number" type="text">
              <label><input type="checkbox" id="cbox"/> Nem vagyok robot<br/></label>
              <button class="btn pull-right" name="submit" type="submit" id="submit" value="Küldés" disabled>Küldés</button>
            </div>
          
		    </form>
      </div>
    </div> -->
  </div>
  <br>
  
</div>

<div id="dialog" title="Sütik">
  <p>Ha szereted a sütiket, akkor rossz helyen jársz. Ez az oldal csak az adatbázis kapcsolódás miatt tárol sütiket. Lépj ki az &apos;x&apos; ikonra kattintva.</p>
</div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="Vissza a lap tetejére!">
    <span class="glyphicon glyphicon-chevron-up"></span>
   </a><br>
   <div style="align-items: center;">
    <div>Látogatók száma:</div> 
    <div style="padding-bottom: 10px;"><?php include("counter.php"); ?></div>
   </div>
  <p>Készítette: Bolvári László, &copy; 2018-<?php echo date("Y");?></p><br>
  <a href="https://www.facebook.com/nolimitzenekar/" class="fa fa-facebook"></a>
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

<!-- modalt megnyitó script -->

<script>
  $(window).on('load', function(){
    //$('#myModal').dialog();
    
      $(function() {
            $( "#dialog" ).dialog({
            show: 'slide', // default: ''
            hide: 'explode'
          });
    } );

  })
  

  
</script>

<script type="text/javascript">
  
  $(document).ready(function(){
    $('#cbox').click(function(){
      if($('#cbox').prop('checked') && document.getElementById("number").value==7){
        console.log('javascript');
        $('#submit').removeAttr('disabled');
      }else{
        $('#submit').attr('disabled',true);
      }
    });
  });

  $('send').on("click", function(){
    console.log('üzenete továbbítva!');
  })

</script>

</body>
</html>

<?php
  $con->db;
?>
