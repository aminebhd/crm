<div class="modal fade" id="categories" tabindex="-1" role="basic" aria-hidden="true">
  <form action="<?php echo base_url(); ?>pay/categories" class="json-form">
     <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">Ajouter une catégorie de cotisations</h4>
           </div>
           <div class="modal-body">
              <div class="tab-content">
                 <div class="tab-pane active" id="tab1">
                    <div class="row">
                       <div class="col-md-12">
                          <div class="form-group">
                             <label class="control-label">Nom de la catégorie</label>
                             <input type="text" name="cat_name" id="cat_name" class="form-control" placeholder="Ex:. Géneral">
                          </div>
                          <div class="form-group">
                             <div class="test" style="height:200px; overflow:auto;">
                                <div class="table-scrollable table-scrollable-borderless">
                                   <table class="table table-hover table-light">
                                      <thead>
                                         <tr class="uppercase">
                                            <th> Nom de la cotisation </th>
                                            <th>
                                                <input type="checkbox" class="checkall">
                                            </th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                         <?php foreach($query->result() as $value): ?>
                                         <tr>
                                            <td><?= $value->cot_description; ?></td>
                                            <td>
                                               <input type="checkbox" name="cat_value[<?= $value->cot_id; ?>]" value="<?= $value->cot_id; ?>">
                                            </td>
                                         </tr>
                                         <?php endforeach; ?>
                                      </tbody>
                                   </table>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <!--/row-->
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
   </form>
</div>
