<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Utilisateurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Utilisateur'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Utilisateur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('name',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fonction_id',array('div'=>'form-group','empty'=>'Veuillez choisir','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('Login',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Pass',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
            
            
  </div>   
                                    
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading ">
                                    <h3 class="panel-title">Les droits</h3>
                                    <ul class="panel-control">
                                        <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a></li>
                                        <li><a class="refresh" href="javascript:void(0)"><i class="fa fa-refresh"></i></a></li>
                                        <li><a class="close-panel" href="javascript:void(0)"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs icon-tab">
                                        <li class="active"><a href="#vente" data-toggle="tab"><i ><img src="<?php echo $this->webroot;?>assets/images/vente.png" alt="" width="20px"/></i> <span>Vente</span></a></li>
                                        <li><a href="#achat" data-toggle="tab"><i ><img src="<?php echo $this->webroot;?>assets/images/achat.png" alt="" width="20px"/></i> <span>Achat</span></a></li>
                                        <li><a href="#personnel" data-toggle="tab"><i ><img src="<?php echo $this->webroot;?>assets/images/personnel.png" alt="" width="20px"/></i><span>Personnel</span></a></li>
                                        <li><a href="#stock" data-toggle="tab"><i ><img src="<?php echo $this->webroot;?>assets/images/stock.png" alt="" width="20px"/></i> <span>Stock</span></a></li>
                                        <li><a href="#production" data-toggle="tab"><i ><img src="<?php echo $this->webroot;?>assets/images/production.png" alt="" width="20px"/></i> <span>Production</span></a></li>
                                    </ul>

                                    <!-- Tab panes -->
                                    <div class="tab-content tab-border">
                                        <div class="tab-pane fade in active" id="vente">
                                            <table  cellpadding="4" cellspacing="1" class="table" width="100%">
                                                
                        <tbody><tr>
        
      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="ventetab" value="1"></td>
      <td align="center">Ajout</td>
      <td align="center">Modification</td>
      <td align="center">Suppression</td>
         </tr>
         <tr class="client">
      <td align="left">Client</td>
      <td align="center"><input type="checkbox" name="data[1][client][add]" id="client_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][client][edit]" id="client_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][client][delete]" id="client_sup" value="1"></td>
    </tr>
     <tr class="boncommande" >
      <td align="left">Bon de commande</td>
      <td align="center"><input type="checkbox" name="data[1][boncommande][add]" id="boncommande_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][boncommande][edit]" id="boncommande_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][boncommande][delete]" id="boncommande_sup" value="1"></td>
    </tr>
     <tr class="collection" >
      <td align="left">Collection</td>
      <td align="center"><input type="checkbox" name="data[1][collection][add]" id="collection_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][collection][edit]" id="collection_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][collection][delete]" id="collection_sup" value="1"></td>
    </tr>
       <tr class="bonlivraison">
      <td align="left">Bon de Livraison</td>
      <td align="center"><input type="checkbox" name="data[1][bonlivraison][add]" id="bonlivraison_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][bonlivraison][edit]" id="bonlivraison_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][bonlivraison][delete]" id="bonlivraison_sup" value="1"></td>
    </tr>
    </tr>
       <tr class="journal">
      <td align="left">Journal de Vente</td>
      <td align="center"><input type="checkbox" name="data[1][journal][add]" id="journal_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][journal][edit]" id="journal_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][journal][delete]" id="journal_sup" value="1"></td>
    </tr>
     <tr class="reglement" >
      <td align="left">Reglement</td>
      <td align="center"><input type="checkbox" name="data[1][reglement][add]" id="reglement_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][reglement][edit]" id="reglement_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][reglement][delete]" id="reglement_sup" value="1"></td>
    </tr>
     <tr class="entreecaisse" >
      <td align="left">Entrée Caisse</td>
      <td align="center"><input type="checkbox" name="data[1][entreecaisse][add]" id="entreecaisse_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][entreecaisse][edit]" id="entreecaisse_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][entreecaisse][delete]" id="entreecaisse_sup" value="1"></td>
    </tr>
    <tr class="validation" >
      <td align="left">Validation Caisse</td>
      <td align="center"><input type="checkbox" name="data[1][validation][add]" id="validation_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][validation][edit]" id="validation_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][validation][delete]" id="validation_sup" value="1"></td>
    </tr>
     <tr class="sortiecaisse" >
      <td align="left">Sortie Caisse</td>
      <td align="center"><input type="checkbox" name="data[1][sortiecaisse][add]" id="sortiecaisse_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][sortiecaisse][edit]" id="sortiecaisse_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][sortiecaisse][delete]" id="sortiecaisse_sup" value="1"></td>
    </tr>
     <tr class="especes" >
      <td align="left">Espéces</td>
      <td align="center"><input type="checkbox" name="data[1][especes][add]" id="especes_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][especes][edit]" id="especes_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][especes][delete]" id="especes_sup" value="1"></td>
    </tr>
    <tr class="cheque" >
      <td align="left">cheque</td>
      <td align="center"><input type="checkbox" name="data[1][cheque][add]" id="cheque_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][cheque][edit]" id="cheque_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][cheque][delete]" id="cheque_sup" value="1"></td>
    </tr>
    <tr class="traite" >
      <td align="left">traite</td>
      <td align="center"><input type="checkbox" name="data[1][traite][add]" id="traite_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][traite][edit]" id="traite_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][traite][delete]" id="traite_sup" value="1"></td>
    </tr>
    <tr class="banque" >
      <td align="left">banque</td>
      <td align="center"><input type="checkbox" name="data[1][banque][add]" id="banque_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][banque][edit]" id="banque_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[1][banque][delete]" id="banque_sup" value="1"></td>
    </tr>
</tbody>
</table>
</div>

                                        
                                        
                                        
                                        
                                        
<div class="tab-pane fade" id="achat">
    
      <table style="" cellpadding="4" cellspacing="1" class="table" width="100%">
                        <tbody><tr>
        
      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="achattab" value="2"></td>
      <td align="center">Ajout</td>
      <td align="center">Modification</td>
      <td align="center">Suppression</td>
         </tr>
         <tr class="gestionstock">
      <td align="left">Gestion du stock</td>
      <td align="center"><input type="checkbox" name="data[2][gestionstock][add]" id="gestionstock_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][gestionstock][edit]" id="gestionstock_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][gestionstock][delete]" id="gestionstock_sup" value="1"></td>
    </tr>
     <tr class="fournisseur" >
      <td align="left">Fournisseur</td>
      <td align="center"><input type="checkbox" name="data[2][fournisseur][add]" id="fournisseur_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][fournisseur][edit]" id="fournisseur_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][fournisseur][delete]" id="fournisseur_sup" value="1"></td>
    </tr>
     <tr class="depot" >
      <td align="left">Dépots</td>
      <td align="center"><input type="checkbox" name="data[2][depot][add]" id="depot_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][depot][edit]" id="depot_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][depot][delete]" id="depot_sup" value="1"></td>
    </tr>
       <tr class="entreemp">
      <td align="left">Entrée MP</td>
      <td align="center"><input type="checkbox" name="data[2][entreemp][add]" id="entreemp_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][entreemp][edit]" id="entreemp_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][entreemp][delete]" id="entreemp_sup" value="1"></td>
    </tr>
     <tr class="entreepr" >
      <td align="left">Entrée PR</td>
      <td align="center"><input type="checkbox" name="data[2][entreepr][add]" id="entreepr_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][entreepr][edit]" id="entreepr_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][entreepr][delete]" id="entreepr_sup" value="1"></td>
    </tr>
     <tr class="sortiemp" >
      <td align="left">Sortie MP</td>
      <td align="center"><input type="checkbox" name="data[2][sortiemp][add]" id="sortiemp_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][sortiemp][edit]" id="sortiemp_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][sortiemp][delete]" id="sortiemp_sup" value="1"></td>
    </tr>
     <tr class="sortiepr" >
      <td align="left">Sortie PR</td>
      <td align="center"><input type="checkbox" name="data[2][sortiepr][add]" id="sortiepr_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][sortiepr][edit]" id="sortiepr_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[2][sortiepr][delete]" id="sortiepr_sup" value="1"></td>
    </tr>
</tbody>
</table>                                      
</div>

                                        
                                        
<div class="tab-pane fade" id="personnel">
      <table style="; " cellpadding="4" cellspacing="1"  class="table" width="100%">
               <tbody><tr>
      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="personneltab" value="3"></td>
      <td align="center">Ajout</td>
      <td align="center">Modification</td>
      <td align="center">Suppression</td>
                            </tr>
    <tr class="personnel" >
      <td align="left">Personnel</td>
      <td align="center"><input type="checkbox" name="data[3][personnel][add]" id="personnel_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][personnel][edit]" id="personnel_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][personnel][delete]" id="personnel_sup" value="1"></td>
    </tr>
    <tr class="utilisateur" >
      <td align="left">Utilisateur</td>
      <td align="center"><input type="checkbox" name="data[3][utilisateur][add]" id="utilisateur_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][utilisateur][edit]" id="utilisateur_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][utilisateur][delete]" id="utilisateur_sup" value="1"></td>
    </tr>
    <tr class="fonction" >
      <td align="left">Fonction</td>
      <td align="center"><input type="checkbox" name="data[3][fonction][add]" id="fonction_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][fonction][edit]" id="fonction_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][fonction][delete]" id="fonction_sup" value="1"></td>
    </tr>
      <tr class="acompte" >
      <td align="left">Acompte</td>
      <td align="center"><input type="checkbox" name="data[3][acompte][add]" id="acompte_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][acompte][edit]" id="acompte_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][acompte][delete]" id="acompte_sup" value="1"></td>
    </tr>
    <tr class="paie" >
      <td align="left">Paie</td>
      <td align="center"><input type="checkbox" name="data[3][paie][add]" id="paie_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][paie][edit]" id="paie_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[3][paie][delete]" id="paie_sup" value="1"></td>
    </tr>
</tbody>
</table>                                      
</div>
                                        
                                        
<div class="tab-pane fade" id="stock">
    <table style="; " cellpadding="4" cellspacing="1"  class="table" width="100%">
               <tbody><tr>
      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="stocktab" value="4"></td>
      <td align="center">Ajout</td>
      <td align="center">Modification</td>
      <td align="center">Suppression</td>
                            </tr>
    <tr class="articleS" >
      <td align="left">Article</td>
      <td align="center"><input type="checkbox" name="data[4][articleS][add]" id="articleS_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][articleS][edit]" id="articleS_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][articleS][delete]" id="articleS_sup" value="1"></td>
    </tr>
    <tr class="depotS" >
      <td align="left">Dépot</td>
      <td align="center"><input type="checkbox" name="data[4][depotS][add]" id="depotS_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][depotS][edit]" id="depotS_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][depotS][delete]" id="depotS_sup" value="1"></td>
    </tr>
    <tr class="inventaireS" >
      <td align="left">inventaireS</td>
      <td align="center"><input type="checkbox" name="data[4][inventaireS][add]" id="inventaireS_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][inventaireS][edit]" id="inventaireS_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][inventaireS][delete]" id="inventaireS_sup" value="1"></td>
    </tr>
    <tr class="receptionS" >
      <td align="left">receptionS</td>
      <td align="center"><input type="checkbox" name="data[4][receptionS][add]" id="receptionS_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][receptionS][edit]" id="receptionS_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[4][receptionS][delete]" id="receptionS_sup" value="1"></td>
    </tr>
</tbody>
</table>                                            
</div>
                                        
                                        
<div class="tab-pane fade" id="production">
         <table style="; " cellpadding="4" cellspacing="1"  class="table" width="100%">
               <tbody><tr>
      <td align="center">Autorisation <input type="checkbox" name="acces[]" id="productiontab" value="5"></td>
      <td align="center">Ajout</td>
      <td align="center">Modification</td>
      <td align="center">Suppression</td>
                            </tr>
          <tr class="production" >
      <td align="left">Production</td>
      <td align="center"><input type="checkbox" name="data[5][production][add]" id="production_add" value="1"></td>
      <td align="center"><input type="checkbox" name="data[5][production][edit]" id="production_edit" value="1"></td>
      <td align="center"><input type="checkbox" name="data[5][production][delete]" id="production_sup" value="1"></td>
    </tr>  
</tbody>
</table>
</div>
                                    
                                    
                                    </div>

                                </div>
                            </div>
                        </div>
<div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

