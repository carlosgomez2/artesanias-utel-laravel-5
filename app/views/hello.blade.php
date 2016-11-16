<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Artesanías Utel</title>
	{{ HTML::style('assets/css/welcome.css') }}
	{{ HTML::style('assets/css/bootstrap.min.css') }}
	{{ HTML::style('assets/css/normalize.css') }}
</head>
<body>
	<header>
		<nav class="navbar">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Artesanias Utel</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Barro <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Jarrones</a></li>
		      </ul>
		      <form class="navbar-form navbar-left" role="search">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Buscar Artesania">
		        </div>
		        <button type="submit" class="btn btn-default">Buscar</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="{{ action('AuthController@logOut') }}" class="logout">Salir</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>
	</header>

	<section>

		<h1>Bienvenido a Artesanías Utel</h1>
		<hr>
		<div class="main-bg">
			<div class="bg bg1">
				<h3>Arbol de la vida</h3>
				<p>
					La alfarería en barro ha difundido el nombre de Metepec hasta sitios lejanos. Las reminiscencias históricas de esta actividad se remontan al periodo preclásico, cuando poblaron el valle asentamientos de filiación teotihuacana. De esta época se conservan algunas figurillas y restos de piezas de utilización doméstica.
				</p>
			</div>
			<br>
			<div class="bg bg2">
				<h3>Flores de maiz pintado</h3>
				<p>
					Flores de hoja de maíz, artesanía mexicana orgullosamente guerrerense, flores multicolores de hoja de maíz, flores de totomoxtle (hoja de maíz) multicolores
				</p>
			</div>
			<br>
			<div class="bg bg3">
				<h3>Marias</h3>
				<p>
					Estas piezas son elaboradas por manos y materiales mexicanos; con la vestimenta y los listones coloridos hacen alusión a los trajes típicos de las mujeres mazahuas, grupo étnico ubicado en Michoacán.
				</p>
			</div>
			<hr>
			<div>
				<div class="jumbotron">
				  <h2>Arte Huichol</h2>
				  <p>Descubre el Arte y Cultura de México a través de sus obras. Aútenticas obras hechas a mano por los huicholes (wirraritari) magia y color en cada detalle que nos brindan en el decorado de sus piezas</p>
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="contacto">
			<h4>Contacto</h4>
			<p>
				Artesanias Utel
			</p>
			<p>
				Calle Reforma #211 Cd. México
			</p>
		</div>
		<div class="tel">
			<h4>Telefono</h4>
			<p>
				01-55 1233 45678
			</p>
			<p>
				01-55 1233 45678
			</p>
		</div>
	</section>
	<hr>
	<footer>
		<h5>Artesanias Utel 2016 &copy; | Todos los derechos reservados.</h5>
	</footer>

</body>
</html>
