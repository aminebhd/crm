<div class="tadddbs" id="">
   <div class="portlet box blue">
      <div class="portlet-title">
         <div class="caption">
            <i class="fa fa-gift"></i>Dossier de la société
         </div>
         <div class="tools">
            <a href="javascript:;" class="collapse"> </a>
            <a href="#portlet-config" data-toggle="modal" class="config"> </a>
            <a href="javascript:;" class="reload"> </a>
            <a href="javascript:;" class="remove"> </a>
         </div>
      </div>
      <div class="portlet-body form">
         <!-- BEGIN FORM-->
         <form action="<?php echo base_url(); ?>companies/add_company" class="json-form horizontal-form" id="rootwizard">
            <div class="form-wizard">
               <div class="form-body">
                  <ul class="nav nav-pills nav-justified steps hide">
                     <li>
                        <a href="#tab1" data-toggle="tab" class="step">
                        <span class="number"> 1 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Account Setup </span>
                        </a>
                     </li>
                     <li>
                        <a href="#tab2" data-toggle="tab" class="step">
                        <span class="number"> 2 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Profile Setup </span>
                        </a>
                     </li>
                     <li>
                        <a href="#tab3" data-toggle="tab" class="step active">
                        <span class="number"> 3 </span>
                        <span class="desc">
                        <i class="fa fa-check"></i> Billing Setup </span>
                        </a>
                     </li>
                  </ul>
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab1">
                        <h3 class="form-section">Informations juridique</h3>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Raison Sociale</label>
                                 <input type="text" value="Dothostia" name="com_name" id="com_name" class="form-control" placeholder="Nom de l'entreprise">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Acitivité Principal</label>
                                 <input type="text" value="java" name="com_activity" id="com_activity" class="form-control" placeholder="Télécommunication, Assurance">
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">
                                 Forme Juridique</label>
                                 <input type="text" value="sarl" name="com_type" id="com_type" class="form-control" placeholder="Sarl">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Identifiant Fiscal</label>
                                 <input type="text" value="12344567" name="com_if" id="com_if" class="form-control" placeholder="4135632">
                              </div>
                           </div>
                        </div>
                        <!--/row-->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Taxe Professionnelle</label>
                                 <input type="text" value="1234567" name="com_tp" id="com_tp" class="form-control" placeholder="6342132">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Registre de Commerce</label>
                                 <input type="text" value="1234567" name="com_rc" id="com_rc" class="form-control" placeholder="7632132">
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                        <!--/row-->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Affiliation à la CNSS</label>
                                 <input type="text" value="123224234645734" name="com_cnss" id="com_cnss" class="form-control" placeholder="93832132">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Numéro ICE</label>
                                 <input type="text" value="753562475357546356" name="com_ice" id="com_ice" class="form-control" placeholder="632143563356732">
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                     </div>
                     <div class="tab-pane" id="tab2">
                        <h3 class="form-section">Adresse</h3>
                        <div class="row">
                           <div class="col-md-12 ">
                              <div class="form-group">
                                 <label>Boulevard</label>
                                 <input type="text" value="najd 1" name="com_address" id="com_address" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Ville</label>
                                 <input type="text" value="el jadida" name="com_city" id="com_city" class="form-control">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Province</label>
                                 <input type="text" value="doukalla" name="com_state" id="com_state" class="form-control">
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Code Postal</label>
                                 <input type="text" value="24000" name="com_postal" id="com_postal" class="form-control">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Pays</label>
                                 <select name="com_country" id="com_country" class="form-control">
                                    <option value="MA">MAROC</option>
                                 </select>
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <h3 class="form-section">Banque</h3>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Nom de la Banque</label>
                                 <input name="com_bank" id="com_bank" value="attijari" type="text" class="form-control">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>N° de RIB</label>
                                 <input name="com_rib" id="com_rib" value="5463574734562356645645" type="text" class="form-control">
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                     </div>
                     <div class="tab-pane" id="tab3">
                        <h3 class="form-section">Modèle Comptable</h3>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Secteur d'activité</label>
                                 <input name="com_sector" id="com_sector" value="informatique" type="text" class="form-control">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Modèle Comptable</label>
                                 <input name="com_accounting" id="com_accounting" value="normal" type="text" class="form-control">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Année</label>
                                 <input name="com_year" value="31/01/2017" type="text" class="form-control" id="com_year">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Message sur Bulletin de paie</label>
                                 <input type="text" value="merci" name="com_note" id="com_note" class="form-control">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="form-actions">
                  <div class="row">
                     <div class="col-md-6">
                       <ul class="pager wizard">
                          <li class="previous"><a href="javascript:;">Précedent</a></li>
                       </ul>
                     </div>
                     <div class="col-md-6">
                       <ul class="pager wizard pull-right">
                          <li class="next"><a href="javascript:;">Suivant</a></li>
                          <li class="finish"><button type="submit" class="btn green pull-right">Enregistrer</button></li>
                       </ul>
                     </div>
                  </div>
               </div>
            </div>
         </form>
         <!-- END FORM-->
      </div>
   </div>
</div>
