
<br />
<div class="w3-container">
<form action="searchrecord.php" method="post">
	<div class="w3-row" style="width:80%;margin:auto;margin-left:40px;">

		<div class="w3-col m3 s3">&nbsp;</div>
		<div class="w3-col m6 s6"><input type="text" class="w3-input w3-border" name="r"placeholder="Enter Roll number"></div>
		<div class="w3-col m3 s3"><input type="submit" value="Search" class="w3-btn w3-blue" style="padding: 9px 16px!important;"></div>
	</div>
</form>

		<br />

</div><!--end of w3-container-->
<?php if (empty($rows)): ?>
			<p class="w3-text-red w3-center">Search your Result by Roll no.</p>
		<?php else: ?>
			<div class="w3-container">
<div class="w3-responsive">
<table class="w3-table w3-striped w3-border">
<thead>
<tr class="w3-blue-grey">
  <th>Roll</th>
  <th>Name</th>
  <th>Father Name</th>
  <th>Course Name</th>
  <th>Duration</th>
  <th>From</th>
  <th>To</th>
  <th>Grade</th>
  <th>Certificate Issue</th>
  <th>Certificate No.</th>
  <th>setting</th>
</tr>
</thead>


<?php foreach($get as $bit):?>



<tr>
  <td><?php echo $bit->r;?></td>
  <td><?php echo $bit->fname;?></td>
  <td><?php echo $bit->father;?></td>
  <td><?php echo $bit->coursen;?></td>
  <td><?php echo $bit->dur;?></td>
  <td><?php echo $bit->froms;?></td>
  <td><?php echo $bit->tos;?></td>
  <td><?php echo $bit->grade;?></td>
  <td><?php echo $bit->ci;?></td>
  <td><?php echo $bit->crno;?></td>
  <td>

    <a href="add_result.php?r=<?php echo $bit->r;?>" class="w3-text-green">Setting</a>
 
 
 </td>


</tr>

<?php endforeach;?>
</table>
</div>
</div>

		<?php endif ?>
