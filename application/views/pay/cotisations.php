<div class="portlet box blue">
   <div class="portlet-title">
      <div class="caption">
         <i class="fa fa-cogs"></i>Taux de cotisations
      </div>
      <div class="tools">
         <a href="javascript:;" class="collapse"> </a>
         <a href="#cotisations" data-toggle="modal" class="config"> </a>
         <a href="javascript:;" class="reload"> </a>
         <a href="javascript:;" class="remove"> </a>
      </div>
   </div>
   <div class="portlet-body">
      <div class="table-responsive">
         <table class="text-center table table-striped table-hover table-bordered" id="sample_editable_1">
            <thead>
               <tr>
                  <th class="text-center"> Désignation </th>
                  <th class="text-center"> Plafond </th>
                  <th class="text-center"> Part Patronal </th>
                  <th class="text-center"> Part Salariale </th>
                  <th class="text-center"> Total </th>
                  <th class="text-center"> Edit </th>
                  <th class="text-center"> Delete </th>
               </tr>
            </thead>
            <tbody>
              <?php foreach($query->result() as $value): ?>
               <tr>
                  <td><?= $value->cot_description; ?></td>
                  <td><?= !empty($value->cot_plafond) ? $value->cot_plafond : 'Pas de plafond'; ?></td>
                  <td><?= !empty($value->cot_company) ? $value->cot_company.' %' : '-'; ?></td>
                  <td class="center"><?= !empty($value->cot_employee) ? $value->cot_employee.' %' : '-'; ?></td>
                  <td class="center"><?= (float) ($value->cot_company + $value->cot_employee); ?> %</td>
                  <td>
                     <a class="edit" href="javascript:;"> Modifier </a>
                  </td>
                  <td>
                     <a class="delete" href="javascript:;"> Supprimier </a>
                  </td>
               </tr>
             <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<div class="portlet box blue">
   <div class="portlet-title">
      <div class="caption">
         <i class="fa fa-cogs"></i>Liste des catégories
      </div>
      <div class="tools">
         <a href="javascript:;" class="collapse"> </a>
         <a href="#categories" data-toggle="modal" class="config"> </a>
         <a href="javascript:;" class="reload"> </a>
         <a href="javascript:;" class="remove"> </a>
      </div>
   </div>
   <div class="portlet-body">
      <div class="table-responsive">
         <table class="text-center table table-striped table-hover table-bordered" id="sample_editable_1">
            <thead>
               <tr>
                  <th class="text-center"> Nom </th>
                  <th class="text-center"> Cotisations </th>
                  <th class="text-center"> Nombre de bénéficier </th>
                  <th class="text-center"> Edit </th>
                  <th class="text-center"> Delete </th>
               </tr>
            </thead>
            <tbody>
              <?php foreach($categories->result() as $value): ?>
               <tr>
                  <td><?= $value->cat_name; ?></td>
                  <td class="center">110</td>
                  <td class="center"><?= $value->cat_name; ?></td>
                  <td>
                     <a href="#editcategories" class="data-values" data-values="<?= $value->cat_value; ?>" data-toggle="modal">Modifier</a>
                  </td>
                  <td>
                     <a class="edit" href="javascript:;"> Supprimier </a>
                  </td>
               </tr>
             <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>

<?php $this->load->view('modals/cotisations.php'); ?>
<?php $this->load->view('modals/edit_categories.php'); ?>
<?php $this->load->view('modals/categories.php'); ?>
