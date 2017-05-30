<!DOCTYPE html>
<html lang="es_CL">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{HTML::script('assets/js/jquery.js')}}
		{{HTML::script('assets/js/bootstrap.min.js')}}
		{{HTML::script('assets/js/jquery-ui.min.js')}}
		{{HTML::style('assets/css/eclass.css')}}
		{{HTML::style('assets/css/bootstrap.min.css')}}
		{{HTML::style('assets/css/jquery-ui.css')}}
		<title>Eclass - Coordinadoras</title>
	</head>
	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="#"><img src="https://cdn.eclass.com/apps/pagina-eclasscl-201311/img/logo-eclass.png"/></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav pull-right">
							<li {{{ isset($menu) && $menu=='vista1' ? 'class=active' : ''  }}}><a href="{{URL::route('ranking')}}">Vista 1</a></li>
							<li {{{ isset($menu) && $menu=='vista2' ? 'class=active' : ''  }}}><a href="{{URL::route('eficiencia',array(1))}}">Vista 2</a></li>
						</ul>
					</div>
				</div>
			</nav>
			@yield('content')
		</div>
	</body>
</html>