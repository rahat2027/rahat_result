
<div class="form-box admin-form"  style="">


<form class="w3-container w3-card-4 w3-border" action="" method="post">

<h2 class="w3-text-grey">Student Update/modify Form</h2>
<p></p>

<p>
<label class="w3-text-blue"><b>roll number</b></label>
<input class="w3-input w3-border" name="r" type="text" value="<?php echo $get->r; ?>"></p>

<p>
<label class="w3-text-blue"><b>Name</b></label>
<input class="w3-input w3-border" name="n" value="<?php echo $get->n; ?>" type="text"></p>

<p>
<label class="w3-text-blue"><b>Father Name</b></label>
<input class="w3-input w3-border"  value="<?php echo $get->f; ?>" name="f" type="text"></p>
<p>

<label class="w3-text-blue"><b>dob</b></label>
<input class="w3-input w3-border" id="cal"  value="<?php echo $get->dob; ?>" name="dob" type="text"></p>
<p>

<label class="w3-validate">Male</label>
<input class="w3-radio" type="radio"  name="g" value="male" checked>

<label class="w3-validate">Female</label>

<input class="w3-radio" type="radio" name="g" value="female"></p>
<p>
<label class="w3-text-blue"><b>course </b></label>
<select type="select" class="w3-input w3-border" name="cn">
<option value="1">1</option>
<option value="2">2</option>
<option value="sac">sac</option>
</select></p>



<p>
<label class="w3-text-blue"><b>cc</b></label>
<input class="w3-input w3-border"  value="<?php echo $get->cc; ?>" name="cc" type="text"></p>
<input type="hidden" name="ad" value="<?php echo date('Y-M-D:H:I:S');?>" />
<p>
<label class="w3-text-blue"><b>Status</b></label>
<select type="select" class="w3-input w3-border" name="st">
<option value="apperaring">Apperaring</option>
<option value="completed">Completed</option>

</select></p>
<p>
<input type="submit" value="Update"  class="w3-btn w3-green" name="submit" />
</p>

</form>
</div><!--form-box-->
<br />
<br />
<br />