<?php
	session_start();
?>
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="row mt-5">
		<div class="col-2"></div>
		<div class="col-2">
			<p class="text-left pb-0 mb-0" style="position:relative; top : -15px;">
				<img src="https://www.enabel.be/sites/default/files/enabel_logo_70.png" class="align-top img-fluid">
			</p>
		</div>		
		<div class="col-4" id="module">
			<p class="text-center font-weight-bold">
				<i class="fa fa-database"></i>  PARERBA - OUTIL DE COLLECTES ET SUIVI
			</p>
		</div>
		<div class="col-2">
			<p class="text-right pb-0 mb-0" style="position:relative; top : -15px;">
				<img src="https://ewz6546.phpnet.org/union-europe%CC%81enne-1.jpg" width=70 height=70 class="align-top img-fluid">
			</p>
		</div>		
		<div class="col-2"></div>
		<div class="col-2"></div><div class="col-8"><hr /></div><div class="col-2"></div>
	</div>	
	<div class="row mt-3">
		<div class="col-3"></div>
		<div class="col-6" id="form">	
			<div class="card pb-0 pt-0 mt-5">
				<div class="card-body pb-0 pt-0 mt-0">
					<form name="f" action="auth.php" method="post"> 
						<p class="font-weight-bold text-center pt-2"><i class="fa fa-lock"></i> AUTHENTIFICATION</p>
						<hr/>
						<p class="text-danger"><?php if(isset($_SESSION['errMsg'])) echo $_SESSION['errMsg']; unset($_SESSION['errMsg']); ?></p>
						<!-- Champ Date Fin -->
						<div class="form-group">
							<label for="username">Nom d'utilisateur</label>
							<input class="form-input form-control" type="text" id="username" name="username" required /> 
						</div>
						
						<!-- Champ Date Fin -->
						<div class="form-group">
							<label for="password">Mot de passe</label>
							<input class="form-input form-control" type="password" id="password" name="password" required /> 
						</div>
								
						<div class="form-actions form-footer form-group" id="form-action-create">
							<button type="submit" class="form-control btn btn-warning">Connexion</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-3"></div>
		<div class="col-3"></div>
		<div class="col-6 mt-3 text-right"><p style="font-size : 0.7em"><i>* Si vous n'avez pas d'acc&egrave;s ou avez oubliez vos acc&egrave;s, veuillez contacter l'Administrateur.</i></p></div>
		<div class="col-3"></div>
	</div>
</div>   
</body>
</html>