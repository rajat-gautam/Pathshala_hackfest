<?php include_once('admin_header.php'); ?>
<div class="container">
	<div class="row">
		<div class="col-lg-6 col-lg-offset-6">
		<?= anchor('admin/store_article','Edit Your School Details',['class'=>'btn btn-lg  pull-right']) ?>
		</div>
	</div>
	<?php if($feedback = $this->session->flashdata('feedback')){
	?>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
		<div class="alert alert-dismissible alert-success">
		<?=  $feedback ?>
		</div>
		</div>
	</div>
	<?php } ?>
	<table class="table">
		<thead>
			<th>#</th>
			<th><strong>School Details</strong></th>
			
		</thead>
	<tbody>
		<?php 
		$i = 1;
		if( count($articles) ) :
		 	foreach($articles as $article): 
		 		if($this->session->userdata('user_id')==$article->user_id) :

		 		?>
			<tr>
			<td><strong>School Name</strong></td>
			
			<td><?= $article->sn ?></td>
			
			</tr>
			<tr class="success">
			<td><strong>City</td>
			
			<td><?= $article->sc ?></td>
			
			</tr>
			<tr>
			<td><strong>Board</strong></td>
			
			<td><?= $article->bo?></td>
			
			</tr>
			<tr class="success">
			<td><strong>About</strong></td>
			
			<td><?= $article->ab ?></td>
			
			</tr>
			<tr>
			<td><strong>Admission form Fees</strong></td>
			
			<td><?= $article->fee ?></td>
			
			</tr>
			<tr class="success">
			<td><strong>School Fee [Class 1]</strong></td>
			
			<td><?= $article->sf1 ?></td>
			</tr>
			<tr>
			
			<td><strong>School Fee [Class 2]</strong></td>
			
			<td><?= $article->sf2 ?></td>
			</tr>
			<tr class="success">
			
			<td><strong>School Fee [Class 3]</strong></td>
			
			<td><?= $article->sf3 ?></td>
			</tr>
			<tr>
			
			<td><strong>School Fee [Class 4]</strong></td>
			
			<td><?= $article->sf4 ?></td>
			
			</tr>
			<tr class="success">
			<td><strong>School Fee [Class 5]</strong></td>
			
			<td><?= $article->sf5 ?></td>
			</tr>
			<tr>
			<td><strong>School Fee [Class 6]</strong></td>
			
			<td><?= $article->sf6 ?></td>
			</tr>
			<tr class="success">
			<td><strong>School Fee [Class 7]</strong></td>
			
			<td><?= $article->sf7 ?></td>
			</tr>
			<tr>
			<td><strong>School Fee [Class 8]</strong></td>
			
			<td><?= $article->sf8 ?></td>
			</tr>
			<tr class="success">
			<td><strong>School Fee [Class 9]</strong></td>
			
			<td><?= $article->sf9 ?></td>
			</tr>
			<tr>
			<td><strong>School Fee [Class 10]</strong></td>
			
			<td><?= $article->sf10 ?></td>
			</tr>
			<tr class="success">
			<td><strong>School Fee [Class 11]</strong></td>
			
			<td><?= $article->sf11 ?></td>
			</tr>
			<tr class="success">
			<td><strong>School Fee [Class 12]</strong></td>
			
			<td><?= $article->sf12 ?></td>
			
			</tr >
			
			
			</tr>
		<?php 
		endif;
		endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="3">
				<h1>Kindly fill your school's details.</h1>
				</td>
			</tr>
		<?php endif;	?>
	</tbody>
	</table>
</div>
<?php include_once('admin_footer.php'); ?>