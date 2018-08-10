<?php

require("../includes/config.php"); 

//the value for merge = true is 1, so by summing you get the number of people who said they had a merger
//divide that by the count of the state column, which gives you every person who responded
//multiple by 100 to get a percentage, get two decimal places, then round it.
//subtract from 100 to get the unmerged result
$result = CS50::query("SELECT state, 
    round(sum(ccmerge)/(select count(state) FROM survey)*100,2) as `ccmerge1`,
    100 - round(sum(ccmerge)/(select count(state) FROM survey)*100,2) as 'ccmerge2',
    round(sum(ppmerge)/(select count(state) FROM survey)*100,2) as `ppmerge1`,
    100 - round(sum(ppmerge)/(select count(state) FROM survey)*100,2) as `ppmerge2`,
    round(sum(m3merge)/(select count(state) FROM survey)*100,2) as `m3merge1`,
    100 - round(sum(m3merge)/(select count(state) FROM survey)*100,2) as `m3merge2`    
    
FROM 
	survey");

      render("map_form.php", ["title" => "Map", "result" => $result]);
?>