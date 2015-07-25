<div class="row">
	<div class="col-md-8 col-md-offset-2 box" style="margin-top:150px; margin-bottom:150px;">
		<div class="titre">Abonnement</div>
	</br>

	<div class="col-md-offset-2 col-md-8 infos alert alert-info " style="text-align: center;">
		<p>Vous êtes actuellement <?php if($_SESSION['statut']=='payant') echo 'abonné'; else echo 'non abonné'; ?></p>
	</div>
	<!-- Un peu de copier coller de temps en temps !-->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">
						Détails de paiement
						</h3>
					</div>
					<div class="panel-body">
						<form role="form" action="../fonctions/payer.php" method="post">
							<div class="form-group">
								<label for="cardNumber">
									Numéro de carte</label>
									<div class="input-group">
										<input type="text" class="form-control" id="cardNumber" placeholder="Numéro de carte valide"
										required autofocus />
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
									</div>
								</div>
								<div class="row">
									<div class="col-xs-7 col-md-7">
										<div class="form-group">
											<label for="expityMonth">
												Date d'expiration</label>
												<div class="col-xs-6 col-lg-6 pl-ziro">
													<input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
												</div>
												<div class="col-xs-6 col-lg-6 pl-ziro">
													<input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
												</div>
											</div>
											<div class="col-xs-5 col-md-5 pull-right">
												<div class="form-group">
													<label for="cvCode">
														Code</label>
														<input type="password" class="form-control" id="cvCode" placeholder="CV" required />
													</div>
												</div>
											</div>
										
									</div>
								</div>
								<ul class="nav nav-pills nav-stacked">
									<li class="active"><a href="#"><span class="badge pull-right">4000€</span> A payer</a>
									</li>
								</ul>
								<br/>
								<button type="submit" class="btn btn-success btn-lg btn-block" >Payer</button>
						</form>
								<br/><br/>
							</div>
						</div>
					</div>


				</div>
			</div>