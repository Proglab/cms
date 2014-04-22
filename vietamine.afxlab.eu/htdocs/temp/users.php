
<?php


// Reporte toutes les erreurs PHP (Voir l'historique des modifications)
error_reporting(E_ALL);
ini_set('display_errors', '1');


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<title>Vie tamine - Ecole de tennis</title>

<!-- Bootstrap core CSS -->
<link href="../themes/vietamine-btp3/css/bootstrap.css" rel="stylesheet">
<link href="../themes/vietamine-btp3/css/ui-lightness/jquery-ui-1.10.4.custom.min.css" rel="stylesheet">
<!-- jQuery load -->
<script src="js/jquery.min.js"></script>
<script src="../themes/vietamine-btp3/js/jquery-ui-1.10.4.custom.min.js"></script>


<!-- Custom styles for this template -->
<link href="../themes/vietamine-btp3/css/style.css" rel="stylesheet">
<link href="css/plugin.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="css/color/orange.css" rel="stylesheet">

<link href="css/datatables.css" rel="stylesheet">

<!-- Google -->
<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->

</head>

<body>
<header id="header">
  <div class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-3 top-header-left">
          <span><strong>AfxLab Dev:</strong> Pre Alpha</span>
        </div><!-- // .top-header-left -->

        <div class="col-lg-9 col-md-9 text-right top-header-right">

          <form id="header-login-form" class="pull-right" onsubmit="return false;">
            <input type="text" placeholder="Login"> <input type="text" placeholder="Pass"> <button type="submit"><i class="fa fa-hand-o-right"></i></button>
          </form>

          <div class="header-search pull-right visible-lg visible-md" id="header-search">
            <form method="get" id="searchform" action="#">
              <div class="header-search-input-wrap"><input class="header-search-input" placeholder="Tapez l'élément à rechecher..." type="text" value="" name="s" id="s"/></div>
              <input class="header-search-submit" type="submit" id="go" value=""><span class="header-icon-search"><i class="fa fa-search"></i></span>
            </form><!-- // #searchform -->
          </div><!-- // .header-search -->

          <ul class="social list-unstyled pull-right">
            <li class="facebook"><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="linkedin"><a data-toggle="tooltip" data-placement="bottom" title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="contact-us"><a data-toggle="tooltip" data-placement="bottom" title="Contactez-nous" href="#contact-firstname"><i class="fa fa-envelope"></i></a></li>
            <li class="shoping-cart"><a data-toggle="tooltip" data-placement="bottom" title="Votre panier" href="#"><i class="fa fa-shopping-cart"></i></a></li>
          </ul><!-- // .social -->

        </div><!-- // .top-header-right -->

      </div><!-- // .row -->
    </div><!-- // .container -->
  </div><!-- // .top-header -->

  <div class="main-header">
    <div class="container logo-area">

      <h1 class="logo">
        <a href="index.html">
          <img src="images/logo.png" alt="Vie tamine">
        </a>

        <span class="site-title">Vie tamine, école de tennis</span>

      </h1><!-- // #logo -->

      <div id="mainmenu" class="site-menu visible-lg visible-md style2 right-menu">

        <div class="left-menu hide">
          <div class="left-menu-info">
            <form action="post">
              <input type="text" placeholder="Type to search" name="s">
              <button><i class="fa fa-search"></i></button>
            </form>
          </div><!-- // .left-menu-info -->
        </div><!-- // .left-menu.hide -->

        <nav>
          <ul class="menu sf-menu list-unstyled clearfix">
            <li class="current">
              <a href="index.html">Accueil</a>
            </li>

            <li>
              <a href="page.html">Qui sommes-nous</a>
              <ul>
                <li><a href="">Notre pédagogie</a></li>
                <li><a href="">Coatchs Vie tamine</a></li>
                <li><a href="">Charte de qualité</a></li>
                <li><a href="">Conditions générales</a></li>
              </ul>
            </li>

            <li>
              <a href="features.html">Ecole de tennis</a>
              <ul>
                <li><a href="">Club Mini</a></li>
                <li><a href="">Club Junior</a></li>
                <li><a href="">Club Competition V Team</a></li>
                <li><a href="">Club Adulte</a></li>
                <li><a href="">Rassemblement Jeunes</a></li>
                <li><a href="">V Box</a></li>
                <li><a href="">Interclub Jeunes</a></li>
                <li><a href="">Evènements</a></li>
              </ul>
            </li>

            <li>
              <a href="">Stages sportifs</a>
              <ul>
                <li><a href="">Stages enfants</a>
                  <ul>
                    <li><a href="">Tennis découverte</a></li>
                    <li><a href="">Tennis multisports</a></li>
                    <li><a href="">Tennis compétition</a></li>
                    <li><a href="">Tennis football</a></li>
                    <li><a href="">Tennis natation</a></li>
                  </ul>
                </li>
                <li><a href="">Stages adultes</a>
                  <ul>
                    <li><a href="">Tennis initiation</a></li>
                    <li><a href="">Tennis perfectionnement</a></li>
                  </ul>
                </li>
                <li><a href="">Familles</a></li>
              </ul>
            </li>

            <li>
              <a href="">Terrains</a>
              <ul>
                <li><a href="">Park Wolu</a></li>
                <li><a href="">Euro Tennis Club</a></li>
              </ul>
            </li>

            <li><a href="">Anniversaires sportifs</a></li>

            <li><a href="">Photos</a></li>

            <li><a href="">Jobs</a></li>
          </ul>
        </nav><!-- // nav -->
      </div><!-- // .site-menu.right-menu -->

      <!-- Repsonsive Menu Trigger -->
      <a class="pull-right responsive-menu visible-sm visible-xs" href="#panel-menu" id="responsive-menu"><i class="fa fa-bars"></i></a>
      <!-- End Reposnvie Menu Trigger -->

    </div><!-- // .container -->
  </div><!-- // .main-header -->
</header><!-- // header -->

<div class="heading-3" id="heading">
  <div class="container">
    <h2 class="page-heading">
      Utilisateurs du site
    </h2>
  </div><!-- // .container -->
  <div class="bgshadow"></div>
</div>


<div class="main-content" id="full-width">
  
  <section class="bottom-20">
    <div class="container">
      <h3 class="heading-block heading-style1">
        <span>Ajouter un utilisateur</span>
      </h3>
      <button type="button" class="button" id="add-user-btn">Ajouter<i class="fa fa-plus"></i></button>
    </div>
  </section>

  <section>
    <div class="container">
      <h3 class="heading-block heading-style1">
        <span>Liste des utilisateurs du site</span>
      </h3><!-- // .heading-block -->
      <table class="table table-bordered table-striped datatable">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Mail</th>
            <th>tel</th>
            <th>gsm</th>
            <th>Dernière connexion</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>qdqsdqs</td>
            <td>qsdqd</td>
            <td>qsdqs</td>
            <td>zerzr</td>
            <td>dfgdfg</td>
            <td>tyuty</td>
            <td>
              <span class="fa fa-pencil edit-user" title="Modifier l'utilisateur" onclick="editUser();"></span>
              <span class="fa fa-trash-o delete-user" title="Supprimer l'utilisateur" onclick="deleteUser();"></span>
              <span class="fa fa-eye consult-data-user" title="voir les données l'utilisateur" onclick="consultUserData();"></span>
            </td>
          </tr>
          <tr>
            <td>vbnv</td>
            <td>qsyutyydqd</td>
            <td>hgfseze</td>
            <td>xsgjkq</td>
            <td>dfhgtxxgdfg</td>
            <td>ioyifgys</td>
            <td>
              <span class="fa fa-pencil edit-user" title="Modifier l'utilisateur" onclick="editUser();"></span>
              <span class="fa fa-trash-o delete-user" title="Supprimer l'utilisateur" onclick="deleteUser();"></span>
            </td>
          </tr>
          <tr>
            <td>vbnv</td>
            <td>qsyutyydqd</td>
            <td>hgfseze</td>
            <td>xsgjkq</td>
            <td>dfhgtxxgdfg</td>
            <td>ioyifgys</td>
            <td>
              <span class="fa fa-pencil edit-user" title="Modifier l'utilisateur" onclick="editUser();"></span>
              <span class="fa fa-trash-o delete-user" title="Supprimer l'utilisateur" onclick="deleteUser();"></span>
            </td>
          </tr>
        </tbody>
      </table>
    </div><!-- // .container -->
  </section><!-- // section -->

</div><!-- // .main-content -->
<!-- Modal début -->
  <div class="modal fade" id="dialog-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="dialog-modal-title">Ajouter un utilisateur</h4>
        </div>
        <form id="modal-form" onsubmit="return false;">
          <div class="modal-body clearfix">
            <?php

            include("class/AfxBootstrapForm.php");
            $form = new AfxBootstrapForm(array('formElemIdPrefix'=>'form'));
            
            /*
            $form->openForm(array(
              'id'=>'test-form', 
              'onsubmit'=>'return false;', 
              'data'=> array(array('id', 'test'))
              )
            );
            */
            
            $form->addInput(array(
              'type'=> 'hidden',
              'name'=> 'user_id'
            ));

            $form->addInput(array(
              'name'=> 'firstname',
              'label'=> array('label'=> 'Prénom')
            ));

            $form->addInput(array(
              'name'=> 'lastname',
              'label'=> array('label'=> 'Nom')
            ));

            $form->addInput(array(
              'type'=> 'email',
              'name'=> 'mail',
              'label'=> array('label'=> 'Email')
            ));

            $form->addInput(array(
              'type'=> 'tel',
              'name'=> 'tel',
              'label'=> array('label'=> 'Téléphone')
            ));

            $form->addInput(array(
              'type'=> 'tel',
              'name'=> 'gsm',
              'label'=> array('label'=> 'Gsm')
            ));



            /*
            $form->addTextarea(array(
              'name'=> 'textarea',
              'label'=> array('label'=> 'Message')
            ));
            */

            $form->addSelect(array(
              'options'=> array(
                array('val'=> '1', 'label'=> 'Administrateur'),
                array('val'=> '2', 'label'=> 'Client', 'selected'=> true)
              ),
              'name'=> 'user_type',
              'label'=> array('label'=> 'Type')
            ));

            $form->addInput(array(
              'name'=> 'actif',
              'type'=> 'checkbox',
              'value'=> 1,
              'attr'=> array(array('checked', 'checked')),
              'label'=> array('label'=> 'Actif')
            ));

            /*
            $form->closeForm(array(
              'class'=> '',
              'buttons'=> array(
                array('type'=> 'submit', 'label'=> 'Sauver', 'in'=> 'i', 'inClass'=> 'fa fa-hand-o-right'),
                array('type'=> 'button', 'label'=> 'Annuler', 'class'=>'blue', 'in'=> 'i', 'inClass'=> 'fa fa-plus')
              )
            ));
            */
            echo $form->renderForm();

            ?>

          </div>
          <div class="modal-footer">
            <button type="button" id="modal-btn-rtn-false" class="btn btn-default" data-dismiss="modal">Annuler</button>
            <button type="submit" id="modal-btn-rtn-true" class="btn btn-primary">Ajouter</button>
            <span id="dialog-modal-loader" class="ajax-loader"></span>
          </div>
      </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<footer id="footer">

   <div id="breadcrumb">
    <div class="container">
      <ul class="clearfix list-unstyled">
        <li><span><a href="#">Accueil</a></span></li>
        <li><span>Profile</span></li>
      </ul><!-- // .list-unstyled -->
    </div><!-- // .container -->
  </div><!-- // #breadcrumb -->

  <div id="footer-1" class="widget-area">
    <div class="container">
      <div class="row">

        <div class="widget quick-contact col-lg-8 col-md-8 bottom-30-sm bottom-30-xs">
          <div class="widget-title">
            <h5>Contactez-nous</h5>
          </div><!-- // .widget-title -->

          <form id="contact-form" onsubmit="return false;">
            <input type="text" placeholder="Nom complet" id="contact-firstname"> <input type="text" placeholder="Mail" id="contact-name"><br>
            <textarea placeholder="Tapez votre message ici..." id="contact-message"></textarea><br>
            <button type="submit">Envoyer</button>
          </form>

        </div><!-- // .widget -->

        <div class="widget col-lg-4 col-md-4 bottom-30-sm bottom-30-xs">
          <img src="images/logo-footer.png" alt="">
          <ul class="list-unstyled contact-field-list top-10 clearfix">
            <li><i class="fa fa-home"></i>Chaussée de Louvain 803/2 1140 Bruxelles</li>
            <li><i class="fa fa-envelope"></i>info@vietamine.be</li>
            <li><i class="fa fa-mobile"></i>0476 / 337 852</li>
            <li><i class="fa fa-credit-card"></i>Fortis  001-5172500-51</li>
          </ul><!-- // .contact-field-list -->
        </div><!-- // .widget -->

      </div><!-- // .row -->
    </div><!-- // .container -->
  </div><!-- // .widget-area -->
  
  <div class="credit">
    <div class="container">
      <div class="row">

        <div class="col-lg-6 col-md-6">
          <span>Developed by <a href="#">AfxLab</a></span>
        </div><!-- // -->

        <div class="col-lg-6 col-md-6 text-right">
          <ul class="list-unstyled">
            <li><a href="#">Dislaimer</a></li>
            <li><a href="#">Conditions générales</a></li>
            <li><a href="#">Charte de la vie privée</a></li>
          </ul>
        </div><!-- // -->

      </div><!-- // .row -->
    </div><!-- // .container -->
  </div><!-- // .credit -->
</footer><!-- // #footer -->

<script type="text/javascript">
$(document).ready(function(){
  $('.datatable').dataTable({
    "sPaginationType": "bs_full",
    "aaSorting": [[ 0, "asc" ]],
    "aoColumnDefs": [{aTargets: [6], bSortable: false}],
    "aoColumns": [
      {sWidth: ''},
      {sWidth: ''},
      {sWidth: ''},
      {sWidth: ''},
      {sWidth: ''},
      {sWidth: ''},
      {sWidth: ''}
    ],
    "oLanguage": {
                "sUrl": "../themes/vietamine-btp3/js/dt/fr.txt"
            }
  });

  $('#add-user-btn').click(function(){
    setModalForm('add');
    });
  });

});

function editUser()
{
  setModalForm('edit')
}

function setModalForm(type)
{
   $('#dialog-modal').modal({
      show:true
    });

   $('#modal-form').submit(function()
   {

    var postUrl = '';
    var postData = $('#modal-form').serialize();
    switch(type)
    {
      case 'add':
      postUrl = '/index.php?r=user/add';
      break;

      case 'edit':
      postUrl = '/index.php?r=user/edit';
      break;
    }

    $('#modal-footer button').hide();
    $('#modal-footer .aja-loader').css('display', 'inline-block');

    $.ajax({
      type: "POST",
      url: postUrl,
      data: postData,
      success: function(data)
      {
        console.log(data);
        $('#modal-form').reset();
        $('#modal-footer button').show();
        $('#modal-footer .aja-loader').css('display', 'none');
        $('#dialog-modal').modal('hide');

      },
      error: function(xhr, ajaxOptions, thrownError)
      {
        $('#modal-footer button').show();
        $('#modal-footer .aja-loader').css('display', 'none');
        console.log(xhr);
        console.log(thrownError);
      }
    });

    $('#dialog-modal').on('hide.bs.modal', function (e) {
      $('#modal-form').unbind('submit');
    });
}

jQuery.fn.reset = function ()
{
  $(this).each (function() { this.reset(); });
}

</script>

<!-- Core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/bootstrap.js"></script>
<script src="js/easing.js"></script>
<script src="js/superfish.js"></script>
<script src="js/fitvids.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/mediaelement.js"></script>
<script src="js/isotope.js"></script>
<script src="js/easypiechart.js"></script>
<script src="js/caroufredsel.js"></script>
<script src="js/jpanelmenu.js"></script>
<script src="js/magnific.js"></script>
<script src="js/functions.js"></script>
<script src="../themes/vietamine-btp3/js/dt/js/jquery.dataTables.min.js"></script>
<script src="../themes/vietamine-btp3/js/datatables.js"></script>

</body>
</html>