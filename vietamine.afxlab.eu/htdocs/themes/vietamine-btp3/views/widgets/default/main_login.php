<div class="container">
	
	<div class="row">

		<div class="col-lg-4 col-md-4 col-sm-4">
			<h3 class="heading-block heading-style1">
				<span>Login</span>
			</h3><!-- // .heading-block.heading-style1 -->

			<form id="form-signin" class="form-signin" role="form" onsubmit="return false;">
				<input type="mail" name="LoginForm[username]" class="form-control" placeholder="Adresse mail" required autofocus>
				<input type="password" name="LoginForm[password]" class="form-control" placeholder="Mot de passe" required>
				<input type="hidden" name="ajax" value="login-form">
				<label class="checkbox">
				  <input type="checkbox" id="remember" value="1"> Rester connecté
				</label>
				<button class="button" name="yt0" value="Connexion" type="submit">Connexion <i class="fa fa-hand-o-right"></i></button>
					
					<span class="ajax-loader"></span>
			</form>

		</div>

		<div class="col-lg-8 col-md-8 col-sm-8">
			<h3 class="heading-block heading-style1">
				<span>Enregistrez-vous</span>
			</h3><!-- // .heading-block.heading-style1 -->

			<div class="panel panel-default bottom-20">
	          <div class="panel-heading">Formulaire d'inscription</div>
	          <div class="panel-body">
	            <form id="profile-form">
	            
	              <div class="form-group">
	                <label class="control-label col-sm-3" for="">Nom</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <div class="form-group">
	                <label class="control-label col-sm-3" for="">Prénom</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <div class="form-group">
	                <label class="control-label col-sm-3" for="">Mail</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <div class="form-group">
	                <label class="control-label col-sm-3" for="">Téléphone</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <div class="form-group clearfix">
	                <label class="control-label col-sm-3" for="">GSM</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <hr>

	              <div class="form-group">
	                <label class="control-label col-sm-3" for="">Adresse</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <div class="form-group">
	                <label class="control-label col-sm-3" for="">Ville</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <div class="form-group clearfix">
	                <label class="control-label col-sm-3" for="">CP</label>
	                <div class="col-sm-9">
	                  <input type="text" id="" name="">
	                </div>
	              </div>

	              <hr>

	              <div class="form-group clearfix">
	                <div class="col-sm-offset-3 col-sm-9">
	                  <button type="submit" class="button">Inscription <i class="fa fa-save"></i></button>
	                </div><!-- // .field -->
	              </div>
	            </form>
	          </div>
	        </div>
			
		</div><!-- // column class -->

	</div><!-- // .row -->
</div><!-- // .container -->