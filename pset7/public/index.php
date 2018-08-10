<?php

require("../includes/config.php"); 

//if you're reaching the page via post, insert the survey informatino into the database and redirect to the map page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
CS50::query("INSERT INTO survey (state, gender, race, ccmerge, ppmerge, m3merge) VALUES (?,?,?,?,?,?)", $_POST["state"], $_POST["gender"], $_POST["race"], $_POST["ccmerge"], $_POST["ppmerge"], $_POST["m3merge"]);

redirect("/map.php");
}


render("index_form.php", ["title" => "Index"]);

?>

