<?php
<table>
<?php foreach($results as $row){ ?>
    <tr>
        <td><?php echo $row->Company?></td>
        <td><?php echo $row->Source?></td>
        <td><?php echo $row->SavePitch?></td>
        <td><?php echo $row->Results?></td>
        <td><?php echo $row->Status?></td>
        <td><?php echo $row->user_id?></td>
    </tr>
<?php } ?>
</table>
?>