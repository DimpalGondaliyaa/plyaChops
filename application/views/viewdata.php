<div class="container">
	
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
  <tr>
    <td><?php echo $fetched_view['id']; ?></td>
    <td><?php echo $fetched_view['user_reg_id']; ?></td>
    <td><?php echo $fetched_view['fname']; ?></td>
    <td><?php echo $fetched_view['lname']; ?></td>
    <td><?php echo $fetched_view['rollno']; ?></td>
    <td><?php echo $fetched_view['class']; ?></td>
    <td><?php echo $fetched_view['div']; ?></td>
    <td><?php echo $fetched_view['mobile']; ?></td>
    <td><?php echo $fetched_view['user_id']; ?></td>
    <td><?php echo $fetched_view['password']; ?></td>
    <td><?php echo $fetched_view['images']; ?></td>
    <td><?php echo $fetched_view['address']; ?></td>
  </tr>
  
  
</table>

</div> 