<script type="text/javascript">
	$(document).ready(function() {
		$('div.lead-image img').each(function() {
			var oldWidth = $(this).width();
			$(this).width($(this).parent().width());

			var heightOfImg = $(this).height();
			var parentHeight = 200;



			$(this).css('margin-top', ((parentHeight-heightOfImg)/2)+"px");
		});
	});
</script>

<div class="hero-unit">
    <h1>Hej <?php echo Facebook::get()->getUser()->getFirstName()." ".Facebook::get()->getUser()->getLastName(); ?></h1>
	<p>Poniżej znajdziesz wszystkie publiczne oraz te dostępne tylko dla Ciebie akcje z ponad <?php echo count($pages); ?> orgaznizacji NGO. Dołącz, zapraszaj znajomych, pomóż się zorganizować!</p>
    <div>Filtr: <span id="filter-settings">wszystkie organizacje</span></div>
</div>


<?php foreach($events as $event): ?>
	<div class="jumbotron" name="event" data-foundation="<?php echo $event->getFoundation()->getId(); ?>" >
        <h1><a target="_blank" href="http://facebook.com/events/<?php echo $event->getFacebookId(); ?>" title="<?php echo $event->getName(); ?>"><?php echo $event->getName(); ?></a></h1>
        <div class="cover-event">
	        <?php if(!is_null($event->getPage())): ?>
		        <div class="lead-image"><img src="<?php echo Facebook::get()->getPageCover($event->getPage()->getFacebookId()); ?>" alt=""></div>
	        <?php endif;?>
	        <?php if(!is_null($event->getUser())): ?>
		        <div class="lead-image"><img src="<?php echo Facebook::get()->getPageCover($event->getUser()->getFacebookId()); ?>" alt=""></div>
	        <?php endif;?>



	        <div class="image-event">
	        	<img src="<?php echo $event->getPicture(); ?>" alt="">
	        </div>	
	    </div>
	    <div class="details-event">
	    	<span class="event-foundation"><?php echo $event->getFoundation()->getName(); ?></span>

	    	<span class="event-date"><?php echo $event->getStart(); ?><?php if(!is_null($event->getEnd())): echo " - ".(string)$event->getEnd(); endif; ?></span>
			<?php if(!$event->getIsPublic()):?><span class="event-public">Ten event jest prywatny</span><?php endif; ?>


			        <p class="lead"><?php echo $event->getDescription(); ?></p>

			         <?php if(!$event->getIsFollow()): ?> <a class="btn btn-large btn-success" onclick="ajaxJoin(<?php echo $event->getFacebookId(); ?>, this);">Przyłącz się</a><?php endif; ?>
        <?php /*if(!$event->getIsFollow()): ?> <a class="btn btn-large btn-success" href="#">Wyślij swoim znajomym</a><?php endif; */?>
      

	    </div>	
       </div>
<?php endforeach; ?>

