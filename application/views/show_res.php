

	
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th><div  style="color:green">School name</div></th>
      <th><div  style="color:green">School Board</div></th>
      <th><div  style="color:green">School City</div></th>
      <th><div  style="color:green">Admisssion form fees</div></th>
      <th><div  style="color:green">Path to download admisssion form</div></th>
    </tr>
  </thead>
  <tbody>
    
<?php 
foreach($results as $row)
{?>
	

    
	<tr>
      <td><div  style="color:black"><?php echo $row['sn']; ?></div></td>
      <td><div  style="color:black"><?php echo $row['bo']; ?></div></td>
      <td><div  style="color:black"><?php echo $row['sc']; ?></div></td>
      <td><div  style="color:black"><?php echo $row['fee']; ?></div></td>
     <td><div  style="color:black"> <?php echo $row['image_path']; ?></div></td>
    </tr>



	
<?php
}
?>
</tbody>
</table> 
