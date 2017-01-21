<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Boncommandes/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    <input type="hidden" value="commande" class="page"/>
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Boncommande'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php 
        echo $this->Form->create('Boncommande',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('Numero',array('div'=>'form-group','label'=>'Numéro','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=> $mm,'readonly') );
		echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
               
		//echo $this->Form->input('Total_HT',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Remise',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
                     <?php        echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>' marque select','empty'=>'Veuillez choisir') );
  ?>
            </div><div class="col-md-6"><?php
                 echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Tva',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Total_TTC',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('timbre_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('utilisateur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('ligneclient_id',array('div'=>'form-group','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir','label'=>'Adresse','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('Date_Livraison',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
		
	?>
  </div>        
                                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Article commande</h3>
                                    <a class="btn btn-danger ajouterligne" table='table' index='index' tr='type'  style="
                                    float: right; 
                                    position: relative;
                                    top: -25px;
                                "> <i class="fa fa-plus-circle"  ></i>Ajouter ligne</a>
                                    <input type="hidden" value="0" class="index" id="index">
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Famille</td>
                                                <td   align="center">Qte</td>
                                                 <td   align="center">Observation</td>
                                               
                                                <td></td> 
                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important"> 
                                                <td > <?php 
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Lignecommande','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'') );
                ?> <div id="familletype" >
                   <?php
                echo $this->Form->input('famille_id', array('label' => '', 'id' => 'famille_id0', 'name' => 'data[Lignecommande][0][famille_id]','table'=>'Lignecommande','champ'=>'famille_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','empty'=>'Veuillez choisir') ); ?>
                                                  </div>   </td>
                                           <td > <?php echo $this->Form->input('Qte',array('id' => 'Qte0', 'name' => 'data[Lignecommande][0][Qte]','table'=>'Lignecommande','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                                                 <td > <?php echo $this->Form->input('observation',array('id' => 'observation0','label'=>'', 'name' => 'data[Lignecommande][0][observation]','table'=>'Lignecommande','champ'=>'observation','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'textarea','rows'=>2) ); ?></td> 
                                                <td ><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tr >
                                                
                                                <td > <?php 
                echo $this->Form->input('sup',array('name'=>'data[Lignecommande][0][sup]','id'=>'sup0','champ'=>'sup','table'=>'Lignecommande','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                ?> <div id="familleindex" ><?php echo $this->Form->input('famille_id',array('label' => '','id' => 'famille_id0', 'name' => 'data[Lignecommande][0][famille_id]','table'=>'Lignecommande','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></div></td>
                                                <td > <?php echo $this->Form->input('Qte',array('id' => 'Qte0','label'=>'', 'name' => 'data[Lignecommande][0][Qte]','table'=>'Lignecommande','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) ); ?></td>
                                                  <td > <?php echo $this->Form->input('observation',array('id' => 'observation0','label'=>'', 'name' => 'data[Lignecommande][0][observation]','table'=>'Lignecommande','champ'=>'observation','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'textarea','rows'=>2 ) ); ?></td> 
                                                <td ><i index="0"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
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
                                                <button type="submit" class="btn btn-primary tire">Enregistrer</button>
                                            </div>
                                        </div>
<?php echo $this->Form->end();?>
</div>
                            </div>
                        </div>
</div>

