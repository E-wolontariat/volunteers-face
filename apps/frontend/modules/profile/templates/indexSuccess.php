<?php foreach($events as $event): ?>
<?php var_dump($event); die();?>
<div class="jumbotron">
        <h1><?php echo $event->getName(); ?></h1>
        <p class="lead"><?php echo $event->getDescription(); ?></p>
        <a class="btn btn-large btn-success" href="#">Get started today</a>
      </div>

<?php endforeach; ?>