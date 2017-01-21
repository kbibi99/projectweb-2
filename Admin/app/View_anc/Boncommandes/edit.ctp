<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Boncommandes/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Boncommande'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Boncommande',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
                 $this->request->data['Boncommande']['Date']=date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Boncommande']['Date'])));
         $this->request->data['Boncommande']['Date_Livraison']=date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Boncommande']['Date_Livraison'])));

        ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Numero',array('div'=>'form-group','label'=>'Numéro','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','readonly') );
		echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Total_HT',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Remise',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
 	?>
                 <?php        echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control marque select','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
  ?></div><div class="col-md-6"><?php
//		echo $this->Form->input('Tva',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('Total_TTC',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('timbre_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
//		echo $this->Form->input('utilisateur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
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
                echo $this->Form->input('sup',array('name'=>'','id'=>'','champ'=>'sup','table'=>'Lignecommande','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'Nom') );
                echo $this->Form->input('famille_id', array('label' => '', 'id' => 'famille_id0', 'name' => 'data[Lignecommande][0][famille_id]','table'=>'Lignecommande','champ'=>'famille_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') ); ?></td>
                                                <td > <?php echo $this->Form->input('Qte',array('label' => '','id' => 'Qte0', 'name' => 'data[Lignecommande][0][Qte]','table'=>'Lignecommande','champ'=>'Qte','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td>
                                                <td > <?php echo $this->Form->input('observation',array('label' => '','id' => 'observation0', 'name' => 'data[Lignecommande][0][observation]','table'=>'Lignecommande','champ'=>'observation','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'textarea','rows'=>2) ); ?></td> 
                                                <td ><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            
                                                  
                                         <?php
                                       //  debug($this->request->data['Lignecommande']); die ;
                       foreach ($this->request->data['Lignecommande'] as $key=>$Lcom){ 
                          // debug($Lclient); die; 
                        $id=$Lcom['id'];
                        $qte=$Lcom['Qte'];
                         $observation=$Lcom['observation'];
                        $famille_id=$Lcom['famille_id']; 
                        
            ?>
                                            <tr >
                                                
                                                <td > 
                                                    <?php echo $this->Form->input('id',array('label' => '','id' => 'id'.$key, 'name' => 'data[Lignecommande]['.$key.'][id]','table'=>'Lignecommande','champ'=>'id','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$id, 'hidden')); ?>
                                                    <?php 
                echo $this->Form->input('sup',array('name'=>'data[Lignecommande]['.$key.'][sup]','id'=>'sup'.$key,'champ'=>'sup','table'=>'Lignecommande','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'id','value'=>'','type'=>'hidden') );
                echo $this->Form->input('famille_id',array('label' => '','id' => 'famille_id'.$key, 'name' => 'data[Lignecommande]['.$key.'][famille_id]','table'=>'Lignecommande','champ'=>'Qte','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','value'=>$famille_id)); ?></td>
                                                <td > <?php echo $this->Form->input('Qte',array('label' => '','id' => 'Qte'.$key, 'name' => 'data[Lignecommande]['.$key.'][Qte]','table'=>'Lignecommande','champ'=>'Qte','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$qte ) ); ?></td> 
                                                 <td > <?php echo $this->Form->input('observation',array('label' => '','id' => 'observation'.$key, 'name' => 'data[Lignecommande]['.$key.'][observation]','table'=>'Lignecommande','champ'=>'observation','index'=>$key,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','value'=>$observation ,'type'=>'textarea','rows'=>2) ); ?></td> 
                                                <td ><i index="<?php echo $key ?>"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                       <?php } ?> 
                                    <input type="hidden" value="<?php echo $key ?>" class="index" id="index">

                                           
                                           
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

