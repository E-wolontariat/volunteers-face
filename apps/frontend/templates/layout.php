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
    	<?php echo $sf_content ?>
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
