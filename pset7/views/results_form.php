<h2><?php echo $_GET["geo"]; ?></h2>

<p><?php echo $_GET["geo"]; ?> is located in the <?php echo $region?> region. This means we expect the following results:</p>

<table class="solid" style="width:20%">
   <tr>
    <th></th>
    <th>Merged</th> 
    <th>Distinct</th>
  </tr>
 
   <tr>
     <td>cot/caught</td>
        <?php echo $regioncc?></td>
        <?php echo $regionccdis?></td>
    </tr>
   
   <tr>
     <td>pin/pen</td>
        <?php echo $regionpp?></span></td>
        <?php echo $regionppdis?></span></td>
    </tr>
    
    <tr>
     <td>mary/merry/marry</td>
        <?php echo $regionm3?></span></td>
        <?php echo $regionm3dis?></span></td>
    </tr>
   
</table>

<h3>Actual Results</h3>

<?php if (!$actualresults) {
    echo ("There are no entries yet for for this state.<br /><br />");
} else {
  
}
?>

<table class="solid" style="width:20%">
   <tr>
    <th></th>
    <th>Merged</th> 
    <th>Distinct</th>
  </tr>
 
   <tr>
     <td>cot/caught</td>
         <?php foreach($actualresults as $row): ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
        <?php endforeach ?>
    </tr>
   <tr>
     <td>pin/pen</td>
         <?php foreach($actualresults as $row): ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
        <?php endforeach ?>
    </tr>
   <tr>
     <td>mary/merry/marry</td>
         <?php foreach($actualresults as $row): ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
    </tr>
</table>

<h3>Demographic Breakdown</h3>

<table class="solid" style="width:100%">
  <tr>
    <th>Gender</th>
    <th>Cot/Caught Merged</th>
    <th>Cot/caught distinct</th>
    <th>Pin/Pen merged</th>
    <th>Pin/pen distinct</th>
    <th>Mary/merry/marry merged</th>
    <th>Mary/merry/marry distinct</th>
  </tr>
  <tr>
    <?php foreach($maleresults as $row): ?>
            <?= "<td>Male</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
  </tr>
  <tr>
    <?php foreach($femaleresults as $row): ?>
            <?= "<td>Female</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
  </tr>
</table>

<h4>Race</h4>
<table class="solid" style="width:100%">
  <tr>
    <th>Race</th>
    <th>Cot/Caught Merged</th>
    <th>Cot/caught distinct</th>
    <th>Pin/Pen merged</th>
    <th>Pin/pen distinct</th>
    <th>Mary/merry/marry merged</th>
    <th>Mary/merry/marry distinct</th>
  </tr>
  <tr>
   <?php foreach($blackresults as $row): ?>
            <?= "<td>Black</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
  </tr>
  </tr>
  <tr>
     <?php foreach($whiteresults as $row): ?>
            <?= "<td>White</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
  </tr>
  <tr>
    <?php foreach($asianresults as $row): ?>
            <?= "<td>Asian</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
  </tr>
  <tr>
     <?php foreach($otherresults as $row): ?>
            <?= "<td>Other</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ccmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ccmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["ppmerge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["ppmerge2"]."%</td>" ?>
            <?= "<td style=\"background-color:#d3d3d3\">".$row["m3merge1"]."%</td>" ?>
            <?= "<td style=\"background-color:#fffc9e\">".$row["m3merge2"]."%</td>" ?>
        <?php endforeach ?>
  </tr>
</table>