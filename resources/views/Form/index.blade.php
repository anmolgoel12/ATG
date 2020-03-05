<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v7 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="/css/style.css">
		<style>
table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th {
  height: 50px;
}
</style>
	</head>

	<body>
	
		<div class="wrapper">
			<div class="inner">
				<form action="/student/store">
					<h3>ATG Apply for Internship</h3>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>-->
					<?php if(isset($message)){?>
							<p>{{$message}} </p>
					<?php unset($message);	}
					?>
					@if ($errors->any())
    					<div class="alert alert-danger">
        					<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<label class="form-group">
						<input type="text"name='name' class="form-control"  required>
						<span>Your Name</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="email" name='email' class="form-control"  required>
						<span for="">Your Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group" >
						<input type="number" maxlength="6" name="pincode" id="pincode" class="form-control" required></input>
						<span for="">Your Pincode</span>
						<span class="border"></span>
					</label>
					<button>Submit 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
				<div style="padding:20px;">
				<table>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Pincode</th>
					</tr>
					@if(isset($all_stu))
						@foreach($all_stu as $rec)
					<tr>
						<td>{{$rec['name']}}</td>
						<td>{{$rec['email']}}</td>
						<td>{{$rec['pincode']}}</td>
					</tr>@endforeach
					@endif
					</table>
					</div>
			</div>
		
		</div>
		
	</body>
</html>
