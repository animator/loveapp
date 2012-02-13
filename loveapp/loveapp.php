<!DOCTYPE HTML>
<html lang="en">
  <head>
    <title>LoveApp</title>
    <meta charset="utf-8">
    <META HTTP-EQUIV="Pragma" CONTENT="no-cache">
    <META HTTP-EQUIV="Expires" CONTENT="-1">
    <style type="text/css">
      html {
        height: 100%;
      }
      body {
        margin: 0;
        padding: 0;
        background: #000000 url(starfield.jpg) repeat;
        color: #000000;
        font-family: sans-serif;
        font-size: 13px;
        line-height: 20px;
        height: 100%;
      }
      

      #info {

        font-size: 11px;
        position: absolute;
        bottom: 5px;
        background-color: rgba(0,0,0,0.8);
        border-radius: 3px;
        right: 10px;
        padding: 10px;

      }

      #currentInfo {
        width: 270px;
        position: absolute;
        left: 20px;
        top: 63px;
        background-color: rgba(0,0,0,0.2);
        padding: 10px;
      }

      a {
        color: #000044;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }

      .bull {
        padding: 0 5px;
        color: #555;
      }

      #title {
        position: absolute;
        top: 20px;
        width: 270px;
        left: 20px;
        background-color: rgba(255,255,255,0.5);
        border-radius: 3px;
        font: 25px Georgia;
        padding: 10px;
        line-height: 17px;
      }
	  #title em
	  {
	  	font-size: 15px;	
	  }
#newQuakes {
    width: 70px;
    position: absolute;
    right: 20px;
    top: 20px;
    background-color: rgba(0,0,0,0.2);
    padding: 10px;
    border-radius: 3px;
    font: 20px Georgia;
    text-align: center;
  }
      .count {
        font: 16px Georgia;
        line-height: 26px;
        height: 30px;
        text-align: center;
        float: left;
        width: 90px;
        color: rgba(255, 255, 255, 0.4);

        cursor: pointer;
        -webkit-transition: all 0.1s ease-out;
      }

      .count:hover, .count.active {
        font-size: 23px;
        color: #fff;
      }

      #ce span {
        display: none;
      }

      #ce {
        width: 107px;
        height: 55px;
        display: block;
        position: absolute;
        bottom: 15px;
        left: 20px;
        background: url(ce.png);
      }
	  #container
	  {
	  	background: #000000 url(loading.gif) center center no-repeat;
	  }

    </style>
    <script type="text/javascript">
    
      //analytics
    
    </script>
  </head>
  <body>

  <div id="container"></div>


 
  <div id="title">
    To <?php echo $_GET['name']; ?> ..    <br /><br>
    <em>Unlucky are those,</em><br />
    <em>Who search the seven seas for paradise.</em><br /><br/>
    <em>Fortunate are those,</em><br />
    <em>Who experience the only heaven,</em><br />
    <em>That truly exists,</em><br />
    <em>The heaven that lives in your company,</em><br /><br />
    <em>I am truly fortunate.</em>
  </div>
  
  <style>
  #footer
  {
  	display: block;
  	width: 314px;
  	height:54px;
  	text-align:center;
  	margin: 0 auto;
  	position: absolute;
  	bottom: 10px;
  }

  			#nwinfo {
				position: absolute;
				bottom: 0px;
				left: 0px;
				width: 300px;
				padding: 40px;
			}
  .activeFooterButton{
  	background-position: bottom center !important;
  }
  .FooterButton
  {
  	text-indent: -10000px;
  	overflow: hidden;
  	display: block;
  }
  </style>
<div id="nwinfo">
			Created by <em><?php echo $_GET['yourname']; ?></em><br />
			Powered by <a href="http://www.facebook.com/aimingbeyondinfinity">Animato</a><br/>
            Use you mouse to rotate and zoom !
		</div>

  
<!--
  <a id="ce" href="http://www.chromeexperiments.com/globe">
    <span>This is a Chrome Experiment</span>
  </a>-->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.color.js"></script>
  <script type="text/javascript" src="third-party/Three/ThreeWebGL.js"></script>
  <script type="text/javascript" src="third-party/Three/ThreeExtras.js"></script>
  <script type="text/javascript" src="third-party/Three/RequestAnimationFrame.js"></script>
  <script type="text/javascript" src="third-party/Three/Detector.js"></script>
  <script type="text/javascript" src="third-party/Tween.js"></script>
  <script type="text/javascript" src="globe.js"></script>
  <script type="text/javascript">
 
    if(!Detector.webgl){
      Detector.addGetWebGLMessage();
    } else {
	      var container = document.getElementById('container');
	      var xhr;	      
	      $('.active').removeClass('active');
	      $('#count20').addClass('active');
	      count = 20;
	      tempData = null;
	      newQuakes = count;
	      $('#newQuakes').text(newQuakes);
	      globe = new DAT.Globe(container);	 
	      globe.animate();     	
	    }
  </script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-24433968-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
  </body>

</html>
