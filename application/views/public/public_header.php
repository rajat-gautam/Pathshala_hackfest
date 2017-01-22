<!DOCTYPE html>
<html lang='en'>
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/paper/bootstrap.min.css" rel="stylesheet" integrity="sha384-awusxf8AUojygHf2+joICySzB780jVvQaVCAt1clU3QsyAitLGul28Qxb2r1e5g+" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/header.css"/>
		<!--<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/header1.css"/>-->
	</head>
	<body >
		<nav class="navbar navbar-default" id='zxc'>
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" id="brand" href="#">Pathshala</a>
		    </div>

		    <div>
		      <!--<ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		      </ul> -->
		      
		      <form action='<?php echo base_url();?>index.php/searchResult/search_keyword' method = "post" class="navbar-form navbar-left" role="search" id="serForm">
				<div class="form-group">&nbsp;&nbsp;
		        
				<input type="text" name="keyword" class="form-control" placeholder="Search this City"/>
			</div>
				<button type="submit" class="btn btn-lg" id="searchButton">Go</button>
		      </form>







		      	<button onclick="location.href='<?php echo base_url();?>index.php/login/index'" type="submit" class="btn btn-lg pull-right" id="login" style="margin-top:14px">Login </button>
		      	<button onclick="location.href='<?php echo base_url();?>index.php/register/index'" type="submit" class="btn btn-lg pull-right" id="register" style="margin-top:14px">Register </button>
	
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</body>
</html>
