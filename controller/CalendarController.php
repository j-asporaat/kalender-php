<?php

require(ROOT . "model/CalendarModel.php");

function index()
{
	render("index", array(
		'birthdays' => birthdays()
	));
}

function edit()
{
	render("edit",array(
		'birthdays' => updateC()
	));	
}

function delete()
{
	render("delete");	
}

function create()
{
	render("create");
}
