<form name='eduvcationform' id='eduvcationform'>
<div class="row">

<div class="col s12 m6">
	<div class="postContent">
		<div class="Hobbies-title">
			<label>college</label>
			<input placeholder="college" id="college" name='college' value="<?php echo $pro_data['college']; ?>" type="text" class="validate">

			</div>
		<div class="education-date">
			<label>college_start_year</label>
			<input placeholder="college_start_year" id="college_start_year" name='college_start_year' value="<?php echo $pro_data['college_start_year']; ?>" type="text" class="validate"> <label>college_end_year</label> <input placeholder="college_end_year" id="college_end_year" name='college_end_year' value="<?php echo $pro_data['college_end_year']; ?>" type="text" class="validate"></div>
		
	</div>
</div>

<div class="col s12 m6">
	<div class="postContent">
		<div class="Hobbies-title">
				<label>primaryschool</label>
			<input placeholder="primaryschool" id="primaryschool" name='primaryschool' value="<?php echo $pro_data['primaryschool']; ?>" type="text" class="validate"></div>
		<div class="education-date">
				<label>start_primary_year</label>
			<input placeholder="start_primary_year" id="start_primary_year" name='start_primary_year' value="<?php echo $pro_data['start_primary_year']; ?>" type="text" class="validate"> 	<label>end_primary_year</label>
			<input placeholder="end_primary_year" id="end_primary_year" name='end_primary_year' value="<?php echo $pro_data['end_primary_year']; ?>" type="text" class="validate"></div>
	</div>
</div>

<div class="col s12 m6">
	<div class="postContent">
			<label>highersecondary</label>
		<div class="Hobbies-title"><input placeholder="highersecondary" id="highersecondary" name='highersecondary' value="<?php echo $pro_data['highersecondary']; ?>" type="text" class="validate"></div>
		<div class="education-date">
				<label>start_higher_year</label>
			<input placeholder="start_higher_year" id="start_higher_year" name='start_higher_year' value="<?php echo $pro_data['start_higher_year']; ?>" type="text" class="validate"> <label>end_higher_year</label><input placeholder="end_higher_year" id="end_higher_year" name='end_higher_year' value="<?php echo $pro_data['end_higher_year']; ?>" type="text" class="validate"> </div>
	</div>
</div>

</div>
</form>

