
<!-- Menu-->
<div class="col-sm-4">

<nav id="menu" class="navbar navbar-default">

	<div class="container-fluid">
	<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><?php echo $titreMenu ?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

			<div class="row nav navbar-nav">
				<div class="col-xs-12">
					<a href= <?php echo $linkAccueil ?> ><button class="btn btn-default btn-menu margTop-2"><b><?php echo $accueil ?></b></button></a>
				</div>
				<div class="col-xs-12">
					<a href= <?php echo $linkCompetences ?> ><button class="btn btn-default btn-menu margTop-2"><b><?php echo $competences ?></b></button></a>
				</div>
				<div class="col-xs-12">
					<a href= <?php echo $linkProjets ?> ><button class="btn btn-default btn-menu margTop-2"><b><?php echo $projets ?></b></button></a>
				</div>
				<div class="col-xs-12">
					<a href= <?php echo $linkParcours ?> ><button class="btn btn-default btn-menu margTop-2"><b><?php echo $parcours ?></b></button></a>
				</div>
				<div class="col-xs-12">
					<a href= <?php echo $linkContact ?> ><button class="btn btn-default btn-menu margTop-2"><b><?php echo $contact ?></b></button></a>
				</div>
			</div>
		        
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
</div><!-- /Menu -->