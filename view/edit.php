<?php 
	if (isset($_POST['submit'])) {
		updateB();
		header('Location:/');
	}
 ?>


<form method="post">
<p>Naam</p>
<input type="text" name="person" value="<?=$birthdays['person']?>">

<p>dag</p>
<input type="number" name="day" min="1" max="31" value="<?=$birthdays['day']?>">

<p>Maanden</p>
<select name="month">
	<option <?php if ($birthdays['month'] == 1) {echo 'selected';} ?> value="1">Januari</option> 
	<option <?php if ($birthdays['month'] == 2) {echo 'selected';} ?> value="2">Februari</option>
	<option <?php if ($birthdays['month'] == 3) {echo 'selected';} ?> value="3">Maart</option>
	<option <?php if ($birthdays['month'] == 4) {echo 'selected';} ?> value="4">April</option>
	<option <?php if ($birthdays['month'] == 5) {echo 'selected';} ?> value="5">Mei</option>
	<option <?php if ($birthdays['month'] == 6) {echo 'selected';} ?> value="6">Juni</option>
	<option <?php if ($birthdays['month'] == 7) {echo 'selected';} ?> value="7">Juli</option>
	<option <?php if ($birthdays['month'] == 8) {echo 'selected';} ?> value="8">Augustus</option>
	<option <?php if ($birthdays['month'] == 9) {echo 'selected';} ?> value="9">September</option>
	<option <?php if ($birthdays['month'] == 10) {echo 'selected';} ?> value="10">Oktober</option>
	<option <?php if ($birthdays['month'] == 11) {echo 'selected';} ?> value="11">November</option>
	<option <?php if ($birthdays['month'] == 12) {echo 'selected';} ?> value="12">December</option>
</select>

<p>Jaar</p>
<input type="number" name="year" min="1900" max="2018" value="<?=$birthdays['year']?>">
<br>
<input type="submit" name="submit" value="verzenden">
</form>

