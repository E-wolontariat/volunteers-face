<script type="text/javascript">
	$(document).ready(function() {
		$('div.lead-image img').each(function() {
			var oldWidth = $(this).width();
			$(this).width($(this).parent().width());
			$(this).css('margin-top', (($(this).height()-$(this).parent().height())/2)+"px");
		});
	});
</script>


<?php foreach($events as $event): ?>
	<div class="jumbotron">
        <h1><?php echo $event->getName(); ?></h1>
        <div class="lead-image"><img src="<?php echo Facebook::get()->getPageCover($event->getPage()->getFacebookId()); ?>" alt=""></div>
        <p class="lead"><?php echo $event->getDescription(); ?></p>
        <a class="btn btn-large btn-success" href="#">Przyłącz się</a>
      </div>
<?php endforeach; ?>

