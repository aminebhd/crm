<div class="modal fade bs-modal-lg" id="add_employee" tabindex="-1" role="dialog" aria-hidden="true">
   <form action="<?php echo base_url(); ?>rh" class="json-form" id="rootwizard">
      <div class="modal-dialog modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title pull-left" style="margin-top:10px;">Ajouter un nouveau salarié</h4>
               <div class="portlet-title tabbable-line">
                  <ul class="nav nav-tabs pull-right">
                     <li class="active">
                        <a href="#tab1" data-toggle="tab"> Fiche </a>
                     </li>
                     <li>
                        <a href="#tab2" data-toggle="tab"> Paiement </a>
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
                              <label class="control-label">Matricule</label>
                              <input type="text" name="emp_number" id="emp_number" class="form-control" placeholder="Matricule de l'employé">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Civilité</label>
                              <select class="form-control" id="emp_civility" name="emp_civility">
                                <option value="1">Monsieur</option>
                                <option value="2">Madame</option>
                              </select>
                           </div>
                        </div>
                        <!--/span-->
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Adresse</label>
                              <input type="text" name="emp_address" id="emp_address" class="form-control" placeholder="Adresse postale">
                           </div>
                        </div>
                        <!--/span-->
                     </div>
                     <!--/row-->
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Nom</label>
                              <input type="text" name="emp_fname" id="emp_fname" class="form-control" placeholder="Nom">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Prénom</label>
                              <input type="text" name="emp_lname" id="emp_lname" class="form-control" placeholder="Prénom">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Ville</label>
                              <input type="text" name="emp_city" id="emp_city" class="form-control" placeholder="Ville">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Code Postale</label>
                              <input type="text" name="emp_postal" id="emp_postal" class="form-control" placeholder="24000">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">N° CIN</label>
                              <input type="text" name="emp_cin" id="emp_cin" class="form-control" placeholder="MXXXX">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">N° CE / PPR</label>
                              <input type="text" name="emp_ce" id="emp_ce" class="form-control" placeholder="XXXXXXX">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">N° CNSS</label>
                              <input type="text" name="emp_cnss" id="emp_cnss" class="form-control" placeholder="XXXXXXXXX">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">N° Police (AT)</label>
                              <input type="text" name="emp_police" id="emp_police" class="form-control" placeholder="XXXXXXXXX">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Date de Naissance</label>
                              <input type="text" name="emp_birthday" id="emp_birthday" class="form-control" placeholder="jj/mm/yyyy">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Date d'entrée</label>
                              <input type="text" name="emp_entry" id="emp_entry" class="form-control" placeholder="jj/mm/yyyy">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Situation Familiale</label>
                              <select class="form-control" id="emp_fsituation" name="emp_fsituation">
                                <option value="1">Célibataire</option>
                                <option value="2">Marié</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Nombre d'enfant</label>
                              <input type="text" name="emp_childs" id="emp_childs" class="form-control" placeholder="X">
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Fonction</label>
                              <input type="text" name="emp_function" id="emp_function" class="form-control" placeholder="Gerant par exemple">
                           </div>
                        </div>
                        <!--/span-->
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Nationalité</label>
                              <input type="text" name="emp_nationality" id="emp_nationality" class="form-control" placeholder="Marocain">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Allocations</label>
                              <input type="text" name="emp_benifits" id="emp_benifits" class="form-control" placeholder="X">
                           </div>
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="control-label">Nombre Déduction</label>
                              <input type="text" name="emp_deduction" id="emp_deduction" class="form-control" placeholder="X">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab2">
                     <div class="row">
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Mode de paiement</label>
                              <select class="form-control" id="emp_paiement" name="emp_paiement">
                                <option value="1">Espèce</option>
                                <option value="2">Cheque</option>
                                <option value="3">Virement Bancaire</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Banque</label>
                              <input type="text" name="emp_bank" id="emp_bank" class="form-control" placeholder="Attijari">
                           </div>
                        </div>
                        <!--/span-->
                        <!--/span-->
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">Agence</label>
                              <input type="text" name="emp_bankagence" id="emp_bankagence" class="form-control" placeholder="Agence Bouchrite">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="control-label">N° RIB</label>
                              <input type="text" name="emp_rib" id="emp_rib" class="form-control" placeholder="XXXXXXXXXXXXXXXXXXXXXXXXXXXXx">
                           </div>
                        </div>
                        <!--/span-->
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <ul class="pager wizard">
                  <li class="previous"><a href="javascript:;">Précedent</a></li>
                  <li class="next"><a href="javascript:;">Suivant</a></li>
                  <li class="finish"><button type="submit" class="btn green pull-right">Enregistrer</button></li>
               </ul>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
   </form>
</div>
