<html>
<head>
<script language="javascript" type="text/javascript" src="jquery-1.6.2.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<style type="text/css">
		.modal-body{
			text-align: center;
		}
		.body{
			text-align: center;
			padding-top: 55px;
			background-color:pink;
		}
		.btn1{
			position: relative;
			top: 40vh;
		}
	</style>

</head>
<body>
<nav class="navbar navbar-dark bg-primary navbar-expand-sm fixed-top">
		<a href="#" class="navbar-brand">GRYNOW</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hiddenContent" aria-controls="hiddenContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="hiddenContent">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a href="" target="frame" class="nav-link">Home</a>
				</li>
				<li class="nav-item"> 
					<a href="table.php" target="frame" class="nav-link">Table</a>
				</li>
			</ul>
			<form class="form-inline my-2 my-lg-0">
				<input type="search" class="form-control mr-sm-2" name="" placeholder="search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>
			<ul class="navbar-nav nav-right">
				<li class="nav-item">
					<button  class=" btn btn-primary " data-toggle="modal" data-target="#loginModal">Login  <i class="fas fa-sign-in-alt"></i></button>
				</li>
			</ul>
		</div>
	</nav>

	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title" id="loginModalLabel">Login</h3>
					<button class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">
					<form action="loginprocess.php" method="POST">
						<div class="input-group" >
							<div class="input-group-prepend">
								<label class="input-group-text">Username</label>
							</div>
							<input type="text" class="form-control" id="Username" placeholder="Username" name="Username">
						</div>
						<div class="input-group">
							<div class="input-group-prepend">
								<label class="input-group-text">Password</label>
							</div>
							<input type="password" class="form-control" id="Password" placeholder="Password" name="Password">
							</div>
					<div class="modal-footer">
						<button class="btn">Log in</button>
					</div>
				
					</form>
				</div>
				
			</div>
		</div>
	</div>
	<div class="body">
<div class="body" style="width:100%;height:100px;border:3px solid #000;background-color:#808080;">To fetch Table Student_info from student database click on "Print Table"<br> </div>
		<button class="btn1 btn" data-toggle="modal" data-target="#loginStatus" id="ajaxButton">Print Table.</button>
		<div class="modal fade" id="loginStatus">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body">
						<div id="result"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>
<script>
$(document).ready(function() {
	$("#ajaxButton").click(function() {
		$.ajax({
		        type: "Post",
		        url: "getData.php",
			success: function(data){
			$("#result").html(data);
			  }
		});	
	});
});
</script>