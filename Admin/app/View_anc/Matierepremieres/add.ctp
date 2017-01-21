<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Matierepremieres/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Matière première'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Matierepremiere',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('typestock_id',array('div'=>'form-group','label'=>'Type stock','id'=>"typestock",'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('code',array('div'=>'form-group','label'=>'Référence','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('designation',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('prixachat',array('div'=>'form-group','label'=>'Prix achat','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		echo $this->Form->input('stockalert',array('div'=>'form-group','label'=>'Stock alerte','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                
		
	?></div><div class="col-md-6"><?php
//        echo $this->Form->input('type_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('unite_id',array('div'=>'form-group','label'=>'Unité','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('family_id',array('div'=>'form-group','label'=>'Famille','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		
                echo '<div id="tohide">';
		echo $this->Form->input('color_id',array('label'=> 'Couleur','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('dimension',array('div'=>'form-group','between'=>'<div class="col-sm-10">','id' => 'dimension','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('taille_id',array('div'=>'form-group','label'=>'Taille','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                echo $this->Form->input('famille_id',array('div'=>'form-group','label'=>'Famille Production','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                echo '</div>';
                 echo '<div id="toshow">';
		echo $this->Form->input('machine_id',array('div'=>'form-group', 'id' => 'machineid','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
		echo $this->Form->input('emplacement_id',array('div'=>'form-group', 'id' => 'emplacement','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                
                echo '</div>';
	?>
  </div>               

                 
                       <br>                              
                                    
     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Fournisseurs</h3>
                                    <a class="btn btn-danger ajouterligne" table='table' index='index' tr='type'  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                                    <input type="hidden" value="0" class="index" id="index">
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table nolabel">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Fournisseur</td>
                                                <td   align="center">Référence</td>
                                                <td   align="center">Prix achat</td>
                                               
                                                <td></td> 
                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important"> 
                                                <td align="center" > <?php echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Mpfournisseur','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );
                                                echo $this->Form->input('fournisseur_id', array('label' => '', 'id' => 'fournisseur_id', 'name' => 'data[Mpfournisseur][0][fournisseur_id]','table'=>'Mpfournisseur','champ'=>'fournisseur_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') ); ?></td>
                                                <td align="center"> <?php echo $this->Form->input('code',array('id' => 'code', 'name' => 'data[Mpfournisseur][0][code]','table'=>'Mpfournisseur','champ'=>'code','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('prix_achat',array('id' => 'prix_achat', 'name' => 'data[Mpfournisseur][0][prix_achat]','table'=>'Mpfournisseur','champ'=>'prix_achat','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                <td align="center"><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tr >
                                                
                                                <td align="center"> <?php 
                echo $this->Form->input('sup',array('name'=>'data[Mpfournisseur][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'Mpfournisseur','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                echo $this->Form->input('fournisseur_id',array('label' => '','id' => 'fournisseur_id', 'name' => 'data[Mpfournisseur][0][fournisseur_id]','table'=>'Mpfournisseur','champ'=>'fournisseur_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
                                                <td align="center"> <?php echo $this->Form->input('code',array('id' => 'code', 'name' => 'data[Mpfournisseur][0][code]','table'=>'Mpfournisseur','champ'=>'code','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('prix_achat',array('id' => 'prix_achat', 'name' => 'data[Mpfournisseur][0][prix_achat]','table'=>'Mpfournisseur','champ'=>'prix_achat','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) ); ?></td> 
                                                <td align="center"><i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>

                                           
                                           
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Table Wrapper Finish-->
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

