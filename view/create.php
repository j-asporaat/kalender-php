<?php 
	if (isset($_POST['submit'])) {
		createB();
		header('Location:/');
	}
 ?>


<form method="post">
<p>Naam</p>
<input type="text" name="person">

<p>dag</p>
<input type="number" name="day" min="1" max="31">

<p>Maanden</p>
<select name="month">
	<option value="1">Januari</option>
	<option value="2">Februari</option>
	<option value="3">Maart</option>
	<option value="4">April</option>
	<option value="5">Mei</option>
	<option value="6">Juni</option>
	<option value="7">Juli</option>
	<option value="8">Augustus</option>
	<option value="9">September</option>
	<option value="10">Oktober</option>
	<option value="11">November</option>
	<option value="12">December</option>
</select>

<p>Jaar</p>
<input type="number" name="year" min="1900" max="2018">
<br>
<input type="submit" name="submit" value="verzenden">
</form>

