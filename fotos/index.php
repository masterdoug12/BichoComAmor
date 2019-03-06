<?php
include '../header.php';
?>
<style>
#inicio{
					width: auto;
					height: auto;
					margin: 0 auto;
					max-width:100px;
					max-height:75px;
					max-width: calc(100% - 4em);
				}
				body
				{
		       background-image: url(../images/banner.jpg);
		       background-position: center center;
		       background-size: cover;
		       height: 15em;
		       text-align: center;
		       position: relative;
					}

</style>

			<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">

					<span class="inicio"><img id="inicio" src="../images/bicho com amor escrita.png" alt="" /></span>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarCollapse">
						  <ul class="navbar-nav mr-auto">
							<li class="nav-item active">
							  <a class="nav-link" href="../">Início <span class="sr-only">(current)</span></a>
							</li>
							<li class="nav-item">
							  <a class="nav-link disabled" href="#">Galeria de Fotos</a>
							</li>
							<li class="nav-item">
							  <a class="nav-link" href="../#cta"> Informações de Contato</a>
							</li>

						  </ul>						 
						</div>
					  </nav>
					
	<link rel="stylesheet" href="./css/magnific.css">
	<link rel="stylesheet" href="./css/style.css">

						<div class="container">

<div id="instafeed" class="row gallery"></div>

</div>



<script src="./js/instafeed.min.js"></script>
<script src="./js/magnific.min.js"></script>
<script src="./js/custom.js"></script>
<?php
 
 


 
?>
<?php
	include '../footer.php';
?>