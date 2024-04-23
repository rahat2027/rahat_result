<br />
<div class="w3-container">
<form action="searchrecord.php" method="get">
	<div class="w3-row" style="width:80%;margin:auto;margin-left:40px;">

		<div class="w3-col m3 s3">&nbsp;</div>
		<div class="w3-col m6 s6"><input type="text" class="w3-input w3-border" name="r"placeholder="Enter Roll number"></div>
		<div class="w3-col m3 s3"><input type="submit" value="Search" class="w3-btn w3-blue" style="padding: 9px 16px!important;"></div>
	</div>
</form>

		<br />
</div><!--end of w3-container-->
<div class="w3-container">
<div class="w3-container w3-light-grey"><h3 class="w3-center">All Registerd Students</h3></div>
<div class="w3-responsive">
<table class="w3-table w3-striped w3-border">
<thead>
<tr class="w3-indigo">
  <th>Roll</th>
  <th>Name</th>
  <th>Father Name</th>
  <th>DOB</th>
  <th>Gender</th>
  <th>Course Name</th>
  <th>Course c</th>
  <th>Status</th>
  <th>Result</th>
  <th>Update</th>
  <th>Delete</th>
</tr>
</thead>



<?php foreach($get as $bit):?>



<tr>
  <td><?php echo $bit->r;?></td>
  <td><?php echo $bit->n;?></td>
  <td><?php echo $bit->f;?></td>
  <td><?php echo $bit->dob;?></td>
  <td><?php echo $bit->g;?></td>
  <td><?php echo $bit->cn;?></td>
  <td><?php echo $bit->cc;?></td>
  <td><?php echo $bit->st;?></td>
  
  <td>

    <a href="add_result.php?r=<?php echo $bit->r;?>" class="w3-text-green">Result</a>
 
 
 </td>
  <td><a class="w3-text-blue" href="update.php?r=<?php echo $bit->r;?>">update</a></td>
  <td><a class="w3-text-red"  href="delete.php?r=<?php echo $bit->r;?>">Delete</a></td>

</tr>

<?php endforeach;?>
</table>
</div>
<br><br>
<ul class="w3-pagination w3-border w3-round w3-right">

<?php
    if($page>1){?>
 <li><a  class="w3-blue-grey"  href="setting.php?page=<?php echo $page-1;?>">&#10094; Previous</a></li>
 
 <?php }
    if($page!=$total){
      ?>
 <li><a  class="w3-blue" href="setting.php?page=<?php echo $page+1;?>"> Next &#10095;</a></li>
      <?php
    }
    ?>

   
  

<?php for($i=1;$i<=$total;$i++):?>
<?php endfor; ?>

</ul>
<br><br><br>
</div>