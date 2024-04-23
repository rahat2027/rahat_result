
<div class="form-box admin-form"  style="">


<form class="w3-container w3-card-4 w3-border" action="" method="post">

<h2 class="w3-text-grey">Result Update Form</h2>
<p class="w3-text-blue-grey">some field cannot be update from here. like(roll,name,fthername) if you really want to change then <a href="update.php?r=<?php echo  $Readingfetch->r;?>"><span class="w3-text-red">click here</span></a></p>

<p>
<label class="w3-text-blue"><b>roll number</b></label>
<input class="w3-input w3-border" name="r" type="hidden"
 value="<?php echo $Readingfetch->r; ?>"></p>
<label class="w3-input w3-border w3-border-red w3-text-red"><b><?php echo $Readingfetch->r; ?></b></label>
<p>
<label class="w3-text-blue"><b>Name</b></label>
<input class="w3-input w3-border" name="n" value="<?php echo $Readingfetch->n; ?>" type="hidden">
<label class="w3-input w3-border w3-border-red w3-text-red"><b><?php echo $Readingfetch->n; ?></b></label>
</p>

<p>
<label class="w3-text-blue"><b>Father Name</b></label>
<input class="w3-input w3-border" name="f" value="<?php echo $Readingfetch->f; ?>" type="hidden">
<label class="w3-input w3-border w3-border-red w3-text-red"><b><?php echo $Readingfetch->f; ?></b></label>
</p>

<p>
<label class="w3-text-blue"><b>Course Name</b></label>
<input class="w3-input w3-border" name="cn" value="<?php echo $Readingfetch->cn; ?>" type="hidden">
<label class="w3-input w3-border w3-border-red w3-text-red"><b><?php echo $Readingfetch->cn; ?></b></label>
</p>

<p>
<label class="w3-text-blue"><b>Duration </b></label>
<select type="select" class="w3-input w3-border" name="dur">
<option value="Short Term">Short Term</option>
<option value="Three Months">Three Months</option>
<option value="Six Months">Six Months</option>
<option value="One Year">One Year</option>
</select></p>



<p>
<div class="w3-row-padding rows">
	<p>
		<div class="w3-col m6"><label class="w3-text-blue"><b>From</b></label>
		<input class="w3-input w3-border " name="froms" id="ccal" value="<?php echo $fetchz->froms; ?>" type="text"></div>
<div class="w3-col m6"><label class="w3-text-blue"><b>To</b></label>
<input class="w3-input w3-border" name="tos"  id="ccal2"  value="<?php echo $fetchz->tos; ?>"  type="text"></div>
	</p>

</div>

</p>


<p>
<label class="w3-text-blue"><b>Grade </b></label>
<select type="select" class="w3-input w3-border" name="grade">
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">E</option>
</select></p>


<p>
<label class="w3-text-blue"><b>Certificate Issue </b></label>
<select type="select" class="w3-input w3-border" name="ci">
<option value="Complete">Complete</option>
<option value="Appearing"> Appearing</option>

</select></p>

<p>
<label class="w3-text-blue"><b>Certificate No.</b></label>
<input type="text" value="<?php echo $fetchz->crno; ?>" class="w3-input w3-border" name="crno" />
</p><p>
<input type="submit" value="Update Reseult"  class="w3-btn w3-orange w3-text-white" name="update_result" />
</p>

</form>
</div><!--form-box-->
<br />
<br />
<br />