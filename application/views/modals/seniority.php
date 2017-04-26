<div class="modal fade bs-modal-lg" id="seniority" tabindex="-1" role="dialog" aria-hidden="true">
   <form action="<?php echo base_url(); ?>pay/seniority" class="json-form" id="rootwizard">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title pull-left" style="margin-top:10px;">Ajouter une règle d'ancienneté</h4>
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
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Tranche</label>
                              <input type="text" name="sen_year" id="sen_year" class="form-control" placeholder="xx">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Taux %</label>
                              <input type="text" name="sen_rate" id="sen_rate" class="form-control" placeholder="%">
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
