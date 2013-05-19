<script type="text/javascript">
	$(document).ready(function() {
		$('div.lead-image img').each(function() {
			var oldWidth = $(this).width();
			$(this).width($(this).parent().width());
			$(this).css('margin-top', (($(this).height()-$(this).parent().height())/2)+"px");
		});
	});
</script>

<div class="hero-unit">
    <h1>Hej <?php echo Facebook::get()->getUser()->getFirstName()." ".Facebook::get()->getUser()->getLastName(); ?></h1>
	<p>Poniżej znajdziesz wszystkie publiczne oraz te dostępne tylko dla Ciebie akcje z ponad <?php echo count($pages); ?> orgaznizacji NGO. Dołącz, zapraszaj znajomych, pomóż się zorganizować!</p>

</div>


<?php foreach($events as $event): ?>
	<div class="jumbotron">
        <h1><a target="_blank" href="http://facebook.com/events/<?php echo $event->getFacebookId(); ?>" title="<?php echo $event->getName(); ?>"><?php echo $event->getName(); ?></a></h1>
        <div class="cover-event">
	        <div class="lead-image"><img src="<?php echo Facebook::get()->getPageCover($event->getPage()->getFacebookId()); ?>" alt=""></div>
	        <div class="image-event">
	        	<img src="<?php echo $event->getPicture(); ?>" alt="">
	        </div>	
	    </div>
        <p class="lead"><?php echo $event->getDescription(); ?></p>
        <?php if(!$event->getIsFollow()): ?> <a class="btn btn-large btn-success" onclick="ajaxJoin(<?php echo $event->getFacebookId(); ?>, this);">Przyłącz się</a><?php endif; ?>
        <?php if(!$event->getIsFollow()): ?> <a class="btn btn-large btn-success" href="#">Wyślij swoim znajomym</a><?php endif; ?>
      </div>
<?php endforeach; ?>

