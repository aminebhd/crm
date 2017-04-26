<div class="modal fade bs-modal-lg" id="scale_ir" tabindex="-1" role="dialog" aria-hidden="true">
   <form action="<?php echo base_url(); ?>pay/scale_ir" class="json-form" id="rootwizard">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title pull-left" style="margin-top:10px;">Ajouter une règle IR</h4>
               <div class="portlet-title tabbable-line hidden">
                  <ul class="nav nav-tabs pull-right">
                     <li class="active">
                        <a href="#tab1" data-toggle="tab"> Barème </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="modal-body">
               <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Début de tranche</label>
                              <input type="text" name="igr_start" id="igr_start" class="form-control" placeholder="xxxxx">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Fin de tranche</label>
                              <input type="text" name="igr_end" id="igr_end" class="form-control" placeholder="xxxxx">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Taux d'impôt</label>
                              <input type="text" name="igr_rate" id="igr_rate" class="form-control" placeholder="%">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Déduction</label>
                              <input type="text" name="igr_deduction" id="igr_deduction" class="form-control" placeholder="xxxxx">
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
