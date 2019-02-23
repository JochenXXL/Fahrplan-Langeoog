    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col col-sm-12 center-block m-b-2">
        <?php adsense_bottom(); ?>
      </div>  
    </div>
  </div>
	
	<!-- FOOTER BEGIN -->
  <div class="container-fluid p-t-2" id="footer">
  	<div class="container">
	    <div class="row">
	     
	      <footer>
	      	<div class="row">
		      	<div class="col col-sm-6 col-md-4">
		      		<h5> INFORMATIONEN </h5>
			      	<ul class="nav nav-dark m-b-2">
							  <li class="nav-item">
							    <a class="nav-link" href="impressum.php">Impressum</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="datenschutz.php">Datenschutz</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="https://i-modich.de/kontakt/" target="_blank">Kontakt</a>
							  </li>
							</ul>
						</div>
						<div class="col col-sm-6 col-md-4">
							<h5> MY-LANGEOOG </h5>
			      	<ul class="nav m-b-2">
							  <li class="nav-item">
							    <a class="nav-link" href="http://my-langeoog.de/" target="_blank">My-Langeoog.de</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="http://my-langeoog.de/langeoog-verzeichnis/unterkuenfte" target="_blank"> Langeoog Unterkünfte </a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="http://my-langeoog.de/langeoog-verzeichnis/unterkuenfte/ferienwohnungen" target="_blank"> Ferienwohnungen Langeoog </a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="http://my-langeoog.de/langeoog-verzeichnis/gastronomie" target="_blank">Gastronomie Langeoog</a>
							  </li>
							</ul>
						</div>
						<div class="col col-sm-6 col-md-4">
							<h5> PARTNER </h5>
			      	<ul class="nav m-b-2">
							  <li class="nav-item">
							    <a class="nav-link" href="http://www.strandeck.de/" target="_blank">Bio Hotel Langeoog</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="http://LangeoogHotel.de/" target="_blank">Langeoog Hotel Info</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" href="http://i-modich.de/kontakt/" target="_blank">Partner werden</a>
							  </li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col col-md-6 col-md-offset-3">
							<a href="http://i-modich.de" class="center-block text-xs-center p-b-1"> © 2016 I-Modich.de Internetdienstleistungen. </a>
						</div>
					</div>
	      </footer>

	    </div>
	  </div>
  </div> 

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
	<script>
	 WebFont.load({
	    google: {
	      families: ['Open Sans:400,700,800']
	    }
	  });
	</script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery/jquery-ui.min.js"></script>
    <script src="jquery/sticky/jquery.sticky.js"></script>
    <script src="js/main.js"></script>
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
    <script type="text/javascript">
      window.cookieconsent_options = {"message":"Diese Webseite verwendet Cookies, um Ihnen ein optimales Surf Erlebnis zu gewährleisten","dismiss":"Ay, ay, Käptn","learnMore":"Mehr Informationen","link":"http://fahrplan-langeoog.de/datenschutz.php","theme":"dark-bottom"};
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- Google Analytics -->
		<script type="text/javascript">
		var gaProperty = 'UA-XXXXXXX-X';
		var disableStr = 'ga-disable-' + gaProperty;
		if (document.cookie.indexOf(disableStr + '=true') > -1) {
		window[disableStr] = true;
		}
		function gaOptout() {
		document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
		window[disableStr] = true;
		alert('Das Tracking durch Google Analytics wurde in Ihrem Browser für diese Website deaktiviert.');
		}
		</script>
    <?php  include_once("inc/analyticstracking.php") ?> 
  </body>
</html>
