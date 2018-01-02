<div class="main">
	<div class="attendance-area">
		<div class="row">
			<div class="attendance-box">
				<div class="atendance_title center">
					<h5>Attendance List</h5>
				</div>
				<div class="attendance-container">
					<div class="desc row">
						<div class="col s6 m4">Attendance by : John Doe</div>
						<div class="col s6 m4">Class : <?php echo $this->session->userdata('class'); ?> ( <?php echo $this->session->userdata('division'); ?> )</div>
						<div class="col s6 m4">Date : <?php echo date("d-m-y"); ?></div>
					</div>
					<table class="table centered highlight">
						<thead>
							<tr>
								<th>Roll No.</th>
								<th>Profile</th>
								<th colspan="2">Student Name</th>
								<th>Roll No.</th>
								<th>Class</th>
								<th>Div</th>
								<th>Mobile</th>
								<th>Address</th>
								<th>Acction</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							foreach ($stud as $key => $v) {
							?>
							<form id='<?php echo $v['id']; ?>'>
							<tr>
							<td><?php echo $v['rollno']; ?></td>
							<td><img src="<?php echo base_url() ?>html/images/student/<?php echo $v['images']; ?>" class="circle" height="80"></td>
							<td><input type="text" name="fname" value="<?php echo $v['fname']; ?>"> </td>&nbsp; 
							<td><input type="text" name="lname" value="<?php echo $v['lname']; ?>" ></td>
							<td><input type="text" name="rollno" value="<?php echo $v['rollno']; ?>"></td>
							<td><input type="text" name="class" value="<?php echo $v['class']; ?>"></td>
							<td><input type="text" name="division" value="<?php echo $v['division']; ?>"></td>
							<td><input type="text" name="mobile" value="<?php echo $v['mobile']; ?>"></td>
							<td><input type="text" name="address" value="<?php echo $v['address']; ?>"></td>
							
							<td>
								<p>
		      						<input name="status" type="radio" id="1" />
		      						<label for="1">1</label>
		    					</p>
		    					<p>
		      						<input name="status" type="radio" id="2" />
		      						<label for="2">2</label>
		    					</p>
							</td>
							<td><a href="#!"><button  class="btn btn-flat green white-text present">Present</button></a> &nbsp;
								<a href="#!"><button  class="btn btn-flat red white-text absent">Absent</button></a></td>

								</tr>
								</form>
							<?php
							}
							?>

							

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>