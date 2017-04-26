<div class="tadddbs" id="">
   <div class="portlet box blue">
      <div class="portlet-title">
         <div class="caption">
            <i class="fa fa-gift"></i>Paramètres de finance
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
         <form action="<?php echo base_url(); ?>pay/finance" class="json-form horizontal-form" id="rootwizard">
            <div>
               <div class="form-body">
                  <div class="tab-content">
                     <div class="tab-pane active" id="tab1">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">SMIG</label>
                                 <input type="text" value="2500.00" name="set_smig" id="set_smig" class="form-control" placeholder="Nom de l'entreprise">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Charges de familles</label>
                                 <input type="text" value="30.00" name="set_allocation" id="set_allocation" class="form-control" placeholder="Télécommunication, Assurance">
                              </div>
                           </div>
                           <!--/span-->
                        </div>
                        <!--/row-->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">
                                 Frais professionnels</label>
                                 <input type="text" value="20.00" name="set_charge_professional" id="set_charge_professional" class="form-control" placeholder="Sarl">
                              </div>
                           </div>
                           <!--/span-->
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">Plafond</label>
                                 <input type="text" value="2500.00" name="set_charge_plafond" id="set_charge_plafond" class="form-control" placeholder="4135632">
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="form-actions">
                  <div class="row">
                     <div class="col-md-12">
                       <ul class="pull-right">
                          <li class=""><button type="submit" class="btn green pull-right">Enregistrer</button></li>
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
