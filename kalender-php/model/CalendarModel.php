<?php

function getAllBirthdays() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM `birthdays` ORDER BY  month ASC, day ASC, person ASC";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
// function updateBirthday($id)
function insertNewBirthday($birthdayData)
{
	$name = $birthdayData["name"];
	$day = $birthdayData["day"];
	$month = $birthdayData["month"];
	$year = $birthdayData["year"];
	$db = openDatabaseConnection();
	//$person, $day, $month, $year
	$sql = "INSERT INTO birthdays (person, day, month, year) VALUES ('$name', $day, $month, $year)";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}
function deleteBirthday($id)
{
	$db = openDatabaseConnection();
	$sql = "DELETE FROM birthdays WHERE `birthdays`.`id` = $id";
	$query = $db->prepare($sql); $query->execute(); $db = null;
}
function getBirthday($id)
{
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM birthdays WHERE `birthdays`.`id` = $id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetch();
}
function updateBirthday($birthdayData)
{
	$id = $birthdayData["id"];
	$name = $birthdayData["person"];
	$day = $birthdayData["day"];
	$month = $birthdayData["month"];
	$year = $birthdayData["year"];
	
	$db = openDatabaseConnection();
	$sql = "UPDATE birthdays SET person='$name', day='$day', month='$month', year='$year' WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}
