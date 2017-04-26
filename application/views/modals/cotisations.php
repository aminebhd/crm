<div class="modal fade bs-modal-lg" id="cotisations" tabindex="-1" role="dialog" aria-hidden="true">
   <form action="<?php echo base_url(); ?>pay/cotisations" class="json-form" id="rootwizard">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title pull-left" style="margin-top:10px;">Ajouter une cotisation</h4>
               <div class="portlet-title tabbable-line">
                  <ul class="nav nav-tabs pull-right hidden">
                     <li class="active">
                        <a href="#tab1" data-toggle="tab"> Fiche </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="modal-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="control-label">Désignation</label>
                              <input type="text" name="cot_description" id="cot_description" class="form-control" placeholder="Ex:. Indemnité pour perte d'emploi">
                           </div>
                        </div>
                     </div>
                     <!--/row-->
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Plafond</label>
                              <input type="text" name="cot_plafond" id="cot_plafond" class="form-control" placeholder="ex:. 6000">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Part Patronal %</label>
                              <input type="text" name="cot_company" id="cot_company" class="form-control" placeholder="4.2">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Part Salariale %</label>
                              <input type="text" name="cot_employee" id="cot_employee" class="form-control" placeholder="1.3">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Total %</label>
                              <input type="text" id="cot_total" class="form-control" value="part a + part b" disabled>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <ul class="pager wizard">
                  <li class="finish"><button type="submit" class="btn green pull-right">Enregistrer</button></li>
               </ul>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </form>
</div>
