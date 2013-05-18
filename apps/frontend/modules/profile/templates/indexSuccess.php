<?php foreach($events as $event): ?>

<div class="jumbotron">
        <h1><?php echo $event->getName(); ?></h1>
        <div class="lead-image"><img src="<?php echo Facebook::get()->getPageCover($event->getPage()->getFacebookId()); ?>" alt=""></div>
        <p class="lead"><?php echo $event->getDescription(); ?></p>
        <a class="btn btn-large btn-success" href="#">Get started today</a>
      </div>

<?php endforeach; ?>