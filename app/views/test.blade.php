<!doctype html>
<html>
<head>
	<title>Laravel Form Validation!</title>

	<!-- load bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
		body 	{ padding-bottom:40px; padding-top:40px; }
	</style>
</head>
<body class="container">

<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		
		<div class="page-header">
			<h1><span class="glyphicon glyphicon-flash"></span> Project Submit!</h1>
		</div>	
		<p>Here is your Projects</p>
		<table border ="1" style="width:100%">
			<tr>
        		<td>Project Name</td>
        		<td>Project Description</td>
    		</tr>
			@foreach($projects as $project)
			<tr>
        		<td>{{ $project->project_name }}</td>
        		<td>{{ $project->project_description }}</td>
    		</tr>
    		@endforeach
    	</table>
		<!-- FORM STARTS HERE -->
		<form method="POST" action="project">

			<div class="form-group">
				<label for="project_name">Project_Name</label>
				<input type="text" id="project_name" class="form-control" name="project_name" placeholder="Fill with your project name">
			</div>

			<div class="form-group">
				<label for="project_description">Project_Description</label>
				<input type="text" id="project_description" class="form-control" name="project_description" placeholder="Some text with your project">
			</div>

			<button type="submit" class="btn btn-primary">Go and Submit Projects!</button>

		</form>

	</div>
</div>

</body>
</html>