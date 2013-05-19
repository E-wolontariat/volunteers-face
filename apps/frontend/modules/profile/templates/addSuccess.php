<div class="hero-unit">
    <h1>Hej <?php echo Facebook::get()->getUser()->getFirstName()." ".Facebook::get()->getUser()->getLastName(); ?></h1>
	<p>Dodaj ID strony organizacji charytatywnej lub ID eventu. Uwaga musisz być jej administatorem!</p>
</div>

<form id="add-page-form" class="add-form">

    <h2>Dodaj stronę (Facebook Page)</h2>
      <input type="text" class="span2" name="name" placeholder="Nazwa organizacji">
      <input type="text" class="span2" name="address_line1" placeholder="Adres 1">
      <input type="text" class="span2" name="address_line2" placeholder="Adres 2">
      <input type="text" class="span2" name="email" placeholder="E-mail">
      <input type="text" class="span2" name="phone" placeholder="Telefon">
      <input type="text" class="span2" name="description" placeholder="Opis">
	  <input type="text" class="span2" name="page_id" placeholder="ID strony">
	  <button type="submit" class="btn" onclick="addPage(this)">Wyślij</button>
	
</form>

<form id="add-event-form" class="add-form">
	
    <h2>Dodaj wydarzenie (Facebook Event)</h2>
      <input type="text" class="span2" name="name" placeholder="Nazwa organizacji">
      <input type="text" class="span2" name="address_line1" placeholder="Adres 1">
      <input type="text" class="span2" name="address_line2" placeholder="Adres 2">
      <input type="text" class="span2" name="email" placeholder="E-mail">
      <input type="text" class="span2" name="phone" placeholder="Telefon">
      <input type="text" class="span2" name="description" placeholder="Opis">
	  <input type="text" class="span2" name="event_id" placeholder="ID eventu">
	  <button type="submit" class="btn" onclick="addEvent(this)">Wyślij</button>
	
</form>
