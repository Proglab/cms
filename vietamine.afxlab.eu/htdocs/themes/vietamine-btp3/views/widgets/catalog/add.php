<?php
$cs = Yii::app()->clientScript;

$cs->registerCSSFile('/themes/vietamine-btp3/css/bootstrap3-wysiwyg5.css');
$cs->registerCSSFile('/themes/vietamine-btp3/css/ui-lightness/jquery-ui-1.10.4.custom.min.css');
$cs->registerCSSFile('/themes/vietamine-btp3/css/afx/catalog/add.css');

$cs->registerScriptFile('/themes/vietamine-btp3/js/jquery-ui-1.10.4.custom.min.js',CClientScript::POS_END);
$cs->registerScriptFile('/themes/vietamine-btp3/js/jquery.form.js',CClientScript::POS_END);
$cs->registerScriptFile('/themes/vietamine-btp3/js/afx/catalog/add.js',CClientScript::POS_END);
$cs->registerScriptFile('/themes/vietamine-btp3/js/wysihtml5-0.3.0.js',CClientScript::POS_END);
$cs->registerScriptFile('/themes/vietamine-btp3/js/prettify.js',CClientScript::POS_END);
$cs->registerScriptFile('/themes/vietamine-btp3/js/bootstrap3-wysihtml5.js',CClientScript::POS_END);
$cs->registerScriptFile('/themes/vietamine-btp3/js/bootstrap-wysihtml5.fr-FR.js',CClientScript::POS_END);
?>

<div class="panel panel-default bottom-20" id="all-forms-panel">
  <div class="panel-heading">Créer un élément dans le catalogue</div>
    <div class="panel-body">
      <div class="accordion" id="accordion">

      <div class="panel accordion-item" data-cat="general-infos">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion">
              <i class="icon-accordion"></i>Informations générales
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;">

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-title">Titre</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-title" name="title">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-sub_cat_2">Catégorie</label>
                <div class="col-sm-9">
                  <div class="tree">
                    <ul>
                      <li><a>Catalogue</a>
                        <ul></ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 ">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="form-limited_stock" name="limited_stock" value="1"> Places limitées
                      <input type="hidden" name="limited_stock" value="0">
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group afx-hidden">
                <label class="control-label col-sm-3" for="form-stock">Places</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-stock" name="stock" placeholder="Places disponibles">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 ">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="form-active" name="active" checked="checked" value="1"> Actif
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Suivant <i class="fa fa-hand-o-right"></i></button>
                </div><!-- // .field -->
              </div>

            </form>
          </div>
        </div><!-- // .accordion-collapse -->
      </div><!-- // .accordion-item -->

      <div class="panel accordion-item afx-hidden" data-cat="descriptions">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion">
              <i class="icon-accordion"></i>Descriptions
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;">
              <div class="form-group">
                <label class="control-label col-sm-3" for="form-description_short">Description courte</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="form-description_short" name="description_short"></textarea>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-description">Description</label>
                <div class="col-sm-9">
                  <textarea class="form-control rte" style="height: 300px;" id="form-description" name="description"></textarea>
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Suivant <i class="fa fa-hand-o-right"></i></button>
                </div><!-- // .field -->
              </div>

            </form>
          </div>
        </div><!-- // .accordion-item -->
      </div><!-- // .accordion-item -->

      <div class="panel accordion-item afx-hidden" data-cat="images">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion">
              <i class="icon-accordion"></i>Images
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;" enctype="multipart/form-data">
              
              <div class="form-group clearfix">
                <label class="control-label col-sm-3" for="form-images">Images</label>
                <div class="col-sm-9">
                  <input type="hidden" name="do" value="upload"/>
                  <input type="file" id="form-images" name="images" >
                </div>
              </div>
              <div id='form-images-list'></div>
              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Suivant <i class="fa fa-hand-o-right"></i></button><span class="ajax-loader"></span>
                </div><!-- // .field -->
              </div>

            </form>
          </div>
        </div><!-- // .accordion-item -->
      </div><!-- // .accordion-item -->

      <div class="panel accordion-item afx-hidden" data-cat="dates">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion">
              <i class="icon-accordion"></i>Dates & heure
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;">

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-diffusion_start_date">Début de diffusion</label>
                <div class="col-sm-9">
                  <input class="form-control datepicker" type="text" id="form-diffusion_start_date" name="diffusion_start_date" placeholder="Début de diffusion sur le site">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-diffusion_end_date">Fin de diffusion</label>
                <div class="col-sm-9">
                  <input class="form-control datepicker" type="text" id="form-diffusion_end_date" name="diffusion_end_date" placeholder="Fin de diffusion sur le site">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 ">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="form-precise_period" name="precise_period" value="1"> Période précise
                      <input type="hidden" name="precise_period" value="0">
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-start_date">Date de début</label>
                <div class="col-sm-9">
                  <input class="form-control datepicker" type="text" id="form-start_date" name="start_date" placeholder="Date du premier jour">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-end_date">Date de fin</label>
                <div class="col-sm-9">
                  <input class="form-control datepicker" type="text" id="form-end_date" name="end_date" placeholder="Date du dernier jour">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 ">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="form-precise_timtable" name="precise_timtable" value="1"> Horraire précis
                      <input type="hidden" name="precise_timtable" value="0">
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-start_hour">Heure de début</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-start_hour" name="start_hour" placeholder="de... (ex: 08h30)">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-end_hour">Heure de fin</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-end_hour" name="end_hour" placeholder="à... (ex: 17h00)">
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Suivant <i class="fa fa-hand-o-right"></i></button>
                </div><!-- // .field -->
              </div>

            </form>
          </div>
        </div><!-- // .accordion-item -->
      </div><!-- // .accordion-item -->

      <div class="panel accordion-item afx-hidden" data-cat="geolocalisation">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion">
              <i class="icon-accordion"></i>Geolocalisation
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;"> 

              <div class="form-group">
                <label for="pick-label" class="col-sm-3 control-label">Adresses prédéfinies</label>
                <div class="col-sm-9">
                  <select class="form-control" id="address-memo">
                    <option value="">Choisir...</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="form-label" class="col-sm-3 control-label">Libellé</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-label" name="label" placeholder="Libeller l'adresse">
                </div>
              </div>

              <div class="form-group">
                <label for="form-address" class="col-sm-3 control-label">Adresse</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-address" name="address" placeholder="Rue, n°">
                </div>
              </div>

              <div class="form-group">
                <label for="form-zip" class="col-sm-3 control-label">Code postal</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-zip" name="zip" placeholder="Code postal">
                </div>
              </div>

              <div class="form-group">
                <label for="form-city" class="col-sm-3 control-label">Ville</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-city" name="city" placeholder="Ville">
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Suivant <i class="fa fa-hand-o-right"></i></button>
                </div><!-- // .field -->
              </div>

            </form>
          </div>
        </div><!-- // .accordion-item -->
      </div><!-- // .accordion-item -->

      <div class="panel accordion-item afx-hidden" data-cat="formules">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" >
              <i class="icon-accordion"></i>Formules
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;">

              <div class="form-group">
                <label for="form-formula_title" class="col-sm-3 control-label">Titre</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-formula_title" name="formula_title" placeholder="Titre descriptif de la formule">
                </div>
              </div>

              <div class="form-group">
                <label for="form-formula_price" class="col-sm-3 control-label">Prix</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-formula_price" name="formula_price" placeholder="Prix de la formule">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 ">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="form-formula_discount" name="formula_discount" checked="checked" value="1"> Réduction carte de membre
                      <input type="hidden" name="formula_discount" value="0">
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="form-formula_discount_amount" class="col-sm-3 control-label">Réducton</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="form-formula_discount_amount" name="formula_discount_amount" value="10" placeholder="Réduction en %">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9 ">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" id="form-limited_age" name="limited_age" value="1"> Limite d'âge
                      <input type="hidden" name="limited_age" value="0">
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-minimum_age">Age minimum</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-minimum_age" name="minimum_age" placeholder="de...">
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-maximum_age">Age maximum</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-maximum_age" name="maximum_age" name="" placeholder="à...">
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="button" class="button blue" id="add-formula">Ajouter <i class="fa fa-plus"></i></button>
                </div><!-- // .field -->
              </div>

              <hr>

              <div class="form-group clearfix">
                <div class="col-sm-12">
                  <ul class="list-group" id="product-details-list"></ul>
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Suivant <i class="fa fa-hand-o-right"></i></button>
                </div><!-- // .field -->
              </div>

            </form>
          </div>
        </div><!-- // .accordion-item -->
      </div><!-- // .accordion-item -->

      <div class="panel accordion-item afx-hidden" data-cat="seo">
        <div class="accordion-heading">
          <h5 class="accordion-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion">
              <i class="icon-accordion"></i>SEO
            </a>
          </h5><!-- // .accordion-title -->
        </div><!-- // .accordion-heading -->

        <div class="accordion-collapse collapse">
          <div class="accordion-body">
            <form onsubmit="return false;">
              <div class="form-group">
                <label class="control-label col-sm-3" for="form-seo_title">Titre</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-seo_title" name="seo_title">
                </div>
              </div>

              <div class="form-group clearfix">
                <label class="control-label col-sm-3" for="">Description</label>
                <div class="col-sm-9">
                  <textarea class="form-control" type="text" id="form-seo_description" name="seo_description"></textarea>
                </div>
              </div>
              <!--
              <hr>

              <div class="form-group">
                <label class="control-label col-sm-3" for="form-seo_tags">Tags</label>
                <div class="col-sm-9">
                  <input class="form-control" type="text" id="form-seo_tags" name="seo_tags">
                </div>
              </div>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="button" class="button blue">Ajouter <i class="fa fa-plus"></i></button>
                </div><
              </div>

              <div class="form-group clearfix">
                <label class="col-sm-3 control-label">Liste des tags</label>
                <div class="col-sm-9">
                  <span class="badge">Stage</span> <span class="badge">Tennis découverte</span>
                </div>
              </div>
              -->
              <hr>

              <div class="form-group clearfix">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="button">Ajouter <i class="fa fa-plus"></i></button>
                </div>
              </div>

            </form>
          </div>
        </div><!-- // .accordion-item -->
      </div><!-- // .accordion-item -->

    </div><!-- // .accordion -->
  </div>
</div>