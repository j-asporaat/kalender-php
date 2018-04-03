<?php

function birthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays ORDER BY month,day ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function deleteB() {
	$id = $_GET['id'];

	$db = openDatabaseConnection();

	$sql = "DELETE FROM birthdays WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
}

function createB() {
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$db = openDatabaseConnection();

	$sql = "INSERT INTO birthdays (person, day, month, year) 
	VALUES ('$person', '$day', '$month', '$year')";	

	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
}

function updateB(){
	$id = $_GET['id'];

	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$db = openDatabaseConnection();

	$sql = "UPDATE birthdays SET person ='$person', day ='$day', month ='$month', year = '$year' WHERE id = '$id'";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;
}


function updateC() {
	$id = $_GET['id'];

	$db = openDatabaseConnection();

	$sql = "SELECT * FROM birthdays WHERE id='$id'";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetch();
}