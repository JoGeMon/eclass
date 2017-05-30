<!DOCTYPE html>
<html lang="es_CL">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{HTML::script('assets/js/jquery.js')}}
		{{HTML::style('assets/css/bootstrap.min.css')}}
		<title>Eclass - Coordinadoras</title>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#">Eclass</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav pull-right">
							<li class="active"><a href="#">Vista 1</a></li>
							<li><a href="#">Vista 2</a></li>
						</ul>
					</div>
				</div>
			</nav>
			@yield('content')
		</div>
	</body>
</html>