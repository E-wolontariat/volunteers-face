<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
	<script src="https://connect.facebook.net/pl_PL/all.js"></script>
    <?php include_javascripts() ?>
  </head>
  <body>
  <div id='fb-root'></div>
	<div id="main">

    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#" onclick="showAll(); return false;">Volunteer's Face</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
              
                
                <li><a class="active" style="cursor: pointer;" onclick="goTo('profile/index'); return false;">Strona główna</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Organizacje w akcji <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <?php foreach(FoundationPeer::getFoundations() as $foundation): ?>
                        <li><a href="#" onclick="hideOthers(<?php echo $foundation->getId(); ?>, '<?php echo $foundation->getName(); ?>'); return false;"><?php echo $foundation->getName(); ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
                <li><a style="cursor: pointer;" onclick="goTo('profile/add'); return false;">Dodaj organizację</a></li>

                  <?php /*
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                
                <?php */ ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->


    <?php echo $sf_content ?>


      <!-- FOOTER -->
      

    </div><!-- /.container -->


	</div>
	<script type="text/javascript">
		var fb_app_id = '<?php echo Facebook::get()->getAppId() ?>';
		var fb_app_secret = '<?php echo Facebook::get()->getAppSecret() ?>';
		var facebook_url = '<?php echo Facebook::get()->getFacebookUrl() ?>';
		var canvas_url = '<?php echo Facebook::get()->getCanvasUrl() ?>';
		var signed_request = '<?php echo Facebook::get()->getSignedRequest() ?>';
		var previous_page = "<?php echo Facebook::get()->getPreviousPage(); ?>";
	</script>
  </body>
</html>
