<?php

require(ROOT . "model/CalendarModel.php");

function index()
{
	render("calendar/index", array(
		'birthdays' => getAllBirthdays()
	));
}

function create()
{
	render("calendar/create");
}
function created()
{
	insertNewBirthday($_POST);
	index();
}
function delete($id)
{
	deleteBirthday($id);
	render("calendar/index", array(
		'birthdays' => getAllBirthdays()
	));
	header("Location:" . URL . "calendar/index");
}
function update()
{
	$id = $_GET["id"];
	render("calendar/update", array(
		'birthday' => getBirthday($id)
	));
}
function updated()
{
	updateBirthday($_POST);
	render("calendar/index", array(
		'birthdays' => getAllBirthdays()
	));
	header("Location:" . URL . "calendar/index");
}
