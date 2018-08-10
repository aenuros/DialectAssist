<?php

require("../includes/config.php"); 

//divide states into regions
$south = array("Washington, D.C.", "Florida", "Georgia", "South Carolina", "North Carolina", "Virginia", "West Virginia", "Maryland", "Delaware", "Kentucky", "Tennessee", "Alabama", "Mississippi", "Arkansas", "Louisiana", "Oklahoma", "Texas");
$north= array("Pennsylvania", "New York", "New Jersey", "Vermont", "Connecticut", "Rhode Island", "Massachusetts","New Hampshire","Maine");
$midwest = array("North Dakota","South Dakota","Nebraska","Kansas","Minnesota","Iowa","Missouri","Wisconsin","Illinois","Indiana","Michigan","Ohio");
$west = array("New Mexico","Colorado","Wyoming","Montana","Idaho","Utah","Arizona","Nevada","Oregon","Washington","California","Alaska","Hawaii");


//depending on which region the state is in, display appropriate dialectal features
if (in_array($_GET["geo"], $south, true)) {
 $region = "Southeastern";
 
 $regioncc = "<td>";
 $regionccdis = "<td style=\"background-color:#fffc9e\">unmerged";
 $regionpp = "<td style=\"background-color:#d3d3d3\">merged";
 $regionppdis = "<td>";
 $regionm3 = "<td style=\"background-color:#d3d3d3\">mostly merged";
 $regionm3dis= "<td>";
 
}


if (in_array($_GET["geo"], $north, true)) {
 $region = "Northeastern";
 $regioncc = "<td>";
 $regionccdis = "<td style=\"background-color:#fffc9e\">unmerged";
 $regionpp = "<td>";
 $regionppdis = "<td style=\"background-color:#fffc9e\">unmerged";
 $regionm3 = "<td>";
 $regionm3dis = "<td style=\"background-color:#fffc9e\">unmerged";
}
if (in_array($_GET["geo"], $midwest, true)) {
 $region = "Midwestern";
 $regioncc = "<td>";
 $regionccdis = "<td style=\"background-color:#fffc9e\">unmerged";
 $regionpp = "<td>";
 $regionppdis = "<td style=\"background-color:#fffc9e\">unmerged";
 $regionm3 = "<td style=\"background-color:#d3d3d3\">merged";
 $regionm3dis = "<td>";
}
if (in_array($_GET["geo"], $west, true)) {
 $region = "Western";
 $regioncc = "<td style=\"background-color:#d3d3d3\">merged"; 
 $regionccdis = "<td>";
 $regionpp = "<td style=\"background-color:#d3d3d3\">in progress";
 $regionppdis = "<td>";
 $regionm3 = "<td style=\"background-color:#d3d3d3\">mostly merged";
 $regionm3dis = "<td>";
}


$state = $_GET["geo"];

//perform appropriate calculations for each demographic
$actualresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state')*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state')*100,2) as 'ccmerge2',
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state')*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state')*100,2) as `ppmerge2`,
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state')*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state')*100,2) as `m3merge2`    
    
FROM 
	survey
where 
	state= '$state'
group by 
	state");

$maleresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and gender=0)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and gender=0)*100,2) as `ccmerge2`,
    
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and gender=0)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and gender=0)*100,2) as `ppmerge2`,
    
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and gender=0)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and gender=0)*100,2) as `3merge2`    
FROM 
	survey
where 
	state= '$state' and gender=0
group by 
	state");

$femaleresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and gender=1)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and gender=1)*100,2) as `ccmerge2`,
    
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and gender=1)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and gender=1)*100,2) as `ppmerge2`,
    
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and gender=1)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and gender=1)*100,2) as `m3merge2`    
FROM 
	survey
where 
	state= '$state' and gender=1
group by 
	state");
	
$blackresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=1)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=1)*100,2) as `ccmerge2`,
    
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=1)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=1)*100,2) as `ppmerge2`,
    
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=1)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=1)*100,2) as `m3merge2`    
FROM survey WHERE	state= '$state' AND race=1 group by state");	

$whiteresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=2)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=2)*100,2) as `ccmerge2`,
    
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=2)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=2)*100,2) as `ppmerge2`,
    
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=2)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=2)*100,2) as `m3merge2`    
FROM survey WHERE	state= '$state' AND race=2 group by state");

$asianresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=3)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=3)*100,2) as `ccmerge2`,
    
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=3)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=3)*100,2) as `ppmerge2`,
    
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=3)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=3)*100,2) as `m3merge2`    
FROM survey WHERE	state= '$state' AND race=3 group by state");

$otherresults = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=4)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey where state = '$state' and race=4)*100,2) as `ccmerge2`,
    
    round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=4)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey where state= '$state' and race=4)*100,2) as `ppmerge2`,
    
    round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=4)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey where state= '$state' and race=4)*100,2) as `m3merge2`    
FROM survey WHERE	state= '$state' AND race=4 group by state");

render("results_form.php", ["title" => "Results", 
"region" => $region, 
"regioncc" => $regioncc, 
"regionpp" => $regionpp, 
"regionm3" => $regionm3,
"regionccdis" => $regionccdis, 
"regionppdis" => $regionppdis, 
"regionm3dis" => $regionm3dis,
"actualresults" => $actualresults,
"maleresults" => $maleresults,
"femaleresults" => $femaleresults,
"blackresults" => $blackresults,
"whiteresults" => $whiteresults,
"asianresults" => $asianresults,
"otherresults" => $otherresults
]);
?>