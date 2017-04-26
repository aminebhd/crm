<div class="portlet light portlet-fit portlet-datatable bordered">
   <div class="portlet-title">
      <div class="caption">
         <i class="icon-settings font-green"></i>
         <span class="caption-subject font-green sbold uppercase">Liste des Entreprises</span>
      </div>
      <div class="actions">
         <div class="btn-group btn-group-devided">
            <label class="btn btn-transparent grey-salsa btn-outline btn-circle btn-sm active">
            <a href="<?= base_url(); ?>companies/add_company">Ajouter une société</a></label>
         </div>
         <div class="btn-group">
            <a class="btn red btn-outline btn-circle" href="javascript:;" data-toggle="dropdown">
            <i class="fa fa-share"></i>
            <span class="hidden-xs"> Options </span>
            <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu pull-right" id="sample_3_tools">
               <li>
                  <a href="javascript:;" data-action="0" class="tool-action">
                  <i class="icon-printer"></i> Imprimer</a>
               </li>
               <li>
                  <a href="javascript:;" data-action="1" class="tool-action">
                  <i class="icon-check"></i> Copier</a>
               </li>
               <li>
                  <a href="javascript:;" data-action="2" class="tool-action">
                  <i class="icon-doc"></i> Exporter en PDF</a>
               </li>
               <li>
                  <a href="javascript:;" data-action="3" class="tool-action">
                  <i class="icon-paper-clip"></i> Exporter en Excel</a>
               </li>
               <li>
                  <a href="javascript:;" data-action="4" class="tool-action">
                  <i class="icon-cloud-upload"></i>Exporter en CSV</a>
               </li>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="portlet-body">
      <div class="table-container">
         <table class="table table-striped table-bordered table-hover" id="sample_3">
            <thead>
               <tr>
                  <th> Identifiant </th>
                  <th> Raison Social </th>
                  <th> Forme </th>
                  <th> RC </th>
                  <th> Patente </th>
                  <th> CNSS </th>
                  <th> Nbr d'employés </th>
                  <th> Action </th>
               </tr>
            </thead>
            <tbody>
              <?php foreach($query->result() as $value): ?>
               <tr>
                  <td><?= $value->com_if; ?></td>
                  <td><?= $value->com_name; ?></td>
                  <td><?= strtoupper($value->com_type); ?></td>
                  <td><?= $value->com_rc; ?></td>
                  <td><?= $value->com_tp; ?></td>
                  <td><?= $value->com_cnss; ?></td>
                  <td><?= 10; ?></td>
                  <td> Action </td>
               </tr>
             <?php endforeach; ?>
            </tbody>
         </table>
      </div>
   </div>
</div>
<!--- Ajouter un nouveau salarié modal -->
<?php $this->load->view('modals/add_employee'); ?>
