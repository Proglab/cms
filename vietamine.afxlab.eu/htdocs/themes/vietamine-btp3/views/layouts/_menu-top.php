<div class="col-lg-3 col-md-3 top-header-left">
  <span><strong>AfxLab Dev:</strong> Pre Alpha</span>
</div><!-- // .top-header-left -->

<div class="col-lg-9 col-md-9 text-right top-header-right">
  <?php
  $this->renderPartial('webroot.themes.vietamine-btp3.views.widgets.default.top-login');
  ?>
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