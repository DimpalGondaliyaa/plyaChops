 <div class="parallax-container userparall">
      <div class="parallax"><img src="<?php echo base_url(); ?>html/images/change.png"></div>
      <div class="back">
      <a class="btn go-btn" href="##" onClick="history.go(-1); return false;">Go back</a>
  </div>
      <div class="user-title">
      		student register data
      </div>
      <div class="card-panel user-card">
      
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>

<table>
  <tr>
    <th>id</th>
    <th>User Reg Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>RollNo</th>
    <th>Class</th>
    <th>Div</th>
    <th>Mobile</th>
     <th>User Id</th>
    <th>Password</th>
     <th>Images</th>
    <th>Address</th>
     <th>Action</th>
  </tr>
  <?php foreach ($data as $key => $value) {   ?>

     <td><?php echo $value['id']; ?></td>
    <td><?php echo $value['user_reg_id']; ?></td>
    <td><?php echo $value['fname']; ?></td>
    <td><?php echo $value['lname']; ?></td>
    <td><?php echo $value['rollno']; ?></td>
    <td><?php echo $value['class']; ?></td>
    <td><?php echo $value['div']; ?></td>
     <td><?php echo $value['mobile']; ?></td>
       <td><?php echo $value['user_id']; ?></td>
    <td><?php echo $value['password']; ?></td>
    <td><?php echo $value['images']; ?></td>
    <td><?php echo $value['address']; ?></td>
    <td><a data-id="<?php echo $value['id']; ?>" class="editt waves-effect waves-light btn updateBtn"><i class="material-icons mainicon ">mode_edit</i></a>
    <a data-id="<?php echo $value['id']; ?>" class="editt waves-effect waves-light btn deletebtn" style="background: #ff0000a6;"><i class="material-icons mainicon ">delete</i></a>

    <a data-viewid="<?php echo $value['user_reg_id']; ?>" href="<?php echo base_url(); ?>viewdata/viewdataa/<?php echo $value['user_reg_id'];  ?>" class="editt waves-effect waves-light btn viewbtn" style="background: #0e0ee45e;"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></td>
  </tr>

  <?php 
  } ?>
 
</table>
      </div>
    </div>


  <!-- Modal Structure -->
  <div id="upmodel" class="modal">
    <div class="modal-content">
     
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat updatemodel">Agree</a>
    </div>
  </div>   
        