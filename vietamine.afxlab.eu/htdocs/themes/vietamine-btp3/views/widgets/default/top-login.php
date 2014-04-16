<?php
if(empty(Yii::app()->user->id)):
// Si non connecté
?>

<form id="header-login-form" class="form-inline pull-right" onsubmit="return false;" role="form"> 
  <div class="form-group">
    <label class="sr-only" for="header-form-login">Adresse mail</label>
    <input type="email" class="form-control" id="header-form-login" name="LoginForm[username]" placeholder="Adresse mail">
  </div>

  <div class="form-group">
    <label class="sr-only" for="header-form-pass">Mot de passe</label>
    <input type="password" class="form-control" id="header-form-pass" name="LoginForm[password]" placeholder="Mot de passe">
  </div>

  <div class="checkbox">
    <label>
     <input type="checkbox" id="remember" value="1"> Rester connecté
    </label>
  </div>

  <button type="submit"><i class="fa fa-hand-o-right"></i></button><span class="ajax-loader"></span>
</form>

<?php
// Si connecté
else:
?>

<div id="top-account-box" class="pull-right">
  <div class="btn-group">
    <button type="button" class="btn-xs btn" data-toggle="dropdown">Bonjour <strong><?= Yii::app()->user->getFirstName();?></strong></button>
    <button type="button" class="btn-xs btn dropdown-toggle" data-toggle="dropdown">
      <span class="caret"></span>
      <span class="sr-only">Toggle Dropdown</span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="/index.php?r=site/page&view=profile">Profile</a></li>
      <li><a href="#">Mot de passe</a></li>
      <li><a href="#">Panier</a></li>
      <li><a href="#">Commandes</a></li>
      <?php
      if(Yii::app()->user->isAdmin()):
      ?>
      <li class="divider"></li>
      <li><a href="#">Catalogue</a></li>
      <li><a href="#">Utilisateurs</a></li>
      <li><a href="#">Commandes</a></li>
      <li><a href="#">Slideshow</a></li>
      <?php
      endif;
      if(Yii::app()->user->isSuperAdmin()):
      ?>
      <li class="divider"></li>
      <li><a href="/index.php?r=pages/admin">Superadmin</a></li>
      <?php
      endif;
      ?>
      <li><a href="/index.php?r=site/logout">Déconnexion</a></li>
    </ul>
  </div>
</div>

<?php
endif;
?>