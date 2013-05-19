<div class="hero-unit">
    <h1>Hej <?php echo Facebook::get()->getUser()->getFirstName()." ".Facebook::get()->getUser()->getLastName(); ?></h1>
	<p>Dodaj ID strony organizacji charytatywnej lub ID eventu. Uwaga musisz być jej administatorem!</p>
</div>

<div class="add-page-form" action="" method="get">
	
	  <input type="text" class="span2" name="page_id" placeholder="ID strony">
	  <button type="submit" class="btn" onclick="addPage(this)">Wyślij</button>
	
</div>

<div class="add-page-form">
	
	  <input type="text" class="span2" name="event_id" placeholder="ID eventu">
	  <button type="submit" class="btn" onclick="addEvent(this)">Wyślij</button>
	
</div>