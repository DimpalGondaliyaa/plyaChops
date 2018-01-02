<div class="main">
<div class="container-fullwidth">
  <div class="row">
    <div class="circular-title">
      circular table
      <div class="circular-btn">
         <a  class="editt waves-effect waves-light btn addbtn" style="background: #0000ff99;"><i class="material-icons mainicon ">add</i></a>
      </div>
    </div>

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
</head>


<table>
  <tr>
    <th>id</th>
    <th>circular_id</th>
    <th>class</th>
    <th>division</th>
    <th>circular_name</th>
    <th>circular_title</th>
    <th>circular_date</th>
    <th>message</th>
    <th>attachment</th>
    <th>action</th>

  </tr>
  <?php foreach ($ress as $key => $value) {  ?>
 
  <tr data-id="<?php echo $value['id']; ?>">
    <td><?php echo $value['id']; ?></td>
    <td><?php echo $value['circular_id']; ?></td>
    <td><?php echo $value['class']; ?></td>
    <td><?php echo $value['division']; ?></td>
    <td><?php echo $value['circular_name']; ?></td>
    <td><?php echo $value['circular_title']; ?></td>
    <td><?php echo $value['circular_date']; ?></td>
    <td><?php echo $value['message']; ?></td>
    <td><?php echo $value['attachment']; ?></td>
    <td><a data-id="<?php echo $value['id']; ?>" class="editt waves-effect waves-light btn updateBtn"><i class="material-icons mainicon ">mode_edit</i></a>
    <a  data-id="<?php echo $value['id']; ?>" class="editt waves-effect waves-light btn deletebtn" style="background: #ff0000a6;"><i class="material-icons mainicon ">delete</i></a></td>
  </tr>
 <?php } ?>
 
</table>
</div>
</div>
</div>


 <!-- add circular Modal Structure -->
  <div id="addid" class="modal">
    <div class="modal-content">
      <?php $this->load->view("add_circular"); ?>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat adddata">Agree</a>
    </div>
  </div>


  <!-- update circular Modal Structure -->
  <div id="upid" class="modal">
    <div class="modal-content">
    
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat updata">Agree</a>
    </div>
  </div>