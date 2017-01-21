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
                                    <h3 class="panel-title"><?php echo __('Modification Matière première'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Matierepremiere',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
                echo $this->Form->input('id',array( 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('typestock_id',array( 'div'=>'form-group','label'=>'Type stock','between'=>'<div class="col-sm-10">','id' => 'typestockedit','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('code',array('div'=>'form-group','label'=>'Référence','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('designation',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('prixachat',array('div'=>'form-group','label'=>'Prix achat','type' => 'text', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		echo $this->Form->input('stockalert',array('div'=>'form-group','label'=>'Stock alerte','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                
		
	?></div><div class="col-md-6"><?php
//                echo $this->Form->input('type_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('unite_id',array('label' => 'Unité', 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('family_id',array('label' => 'Famille', 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		
                echo '<div id="tohide">';
		echo $this->Form->input('color_id',array('label'=> 'Couleur',  'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('dimension',array('div'=>'form-group' ,'id' => 'dimensionedit', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control $disp','required data-bv-notempty-message'=>'Champ Obligatoire') ); 
                echo $this->Form->input('famille_id',array('label' => 'Famille Production', 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo $this->Form->input('taille_id',array('label' => 'taille', 'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                echo '</div>';
                 echo '<div id="toshow">';
                echo $this->Form->input('machine_id',array('div'=>'form-group','id' => 'machineid', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('emplacement_id',array('div'=>'form-group','id' => 'emplacementedit', 'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                
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
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
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
                                                <td align="center" > <?php echo $this->Form->input('sup',array('name'=>'','id'=>'-1','champ'=>'sup','table'=>'Mpfournisseur','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','type'=>'hidden','class'=>'form-control','label'=>'') );
                                                echo $this->Form->input('fournisseur_id', array('label' => '', 'id' => '-1', 'name' => '','table'=>'Mpfournisseur','champ'=>'fournisseur_id','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','empty'=>'Veuillez choisir') ); ?></td>
                                               <?php echo $this->Form->input('id',array('label' => '','id' => '-1', 'name' => '','table'=>'Mpfournisseur','champ'=>'id','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control')); ?> 
                                                <td align="center"> <?php echo $this->Form->input('code',array('label' => '','id' => '-1', 'name' => '','table'=>'Mpfournisseur','champ'=>'code','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('prix_achat',array('label' => '','id' => '-1', 'name' => '','table'=>'Mpfournisseur','champ'=>'prix_achat','index'=>'','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') ); ?></td> 
                                                <td align="center"><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            
                                            <?php //  print'<pre>'; print_r($this->request->data['Mpfournisseur']);die;
                                            
                                            foreach($this->request->data['Mpfournisseur'] as $i =>$four){
                                            ?>
                                            <tr >
                                                
                                                <td align="center"> <?php 
                                               echo $this->Form->input('sup',array('label' => '','name'=>'data[Mpfournisseur]['.$i.'][sup]','id'=>'sup'.$i,'champ'=>'sup','table'=>'Mpfournisseur','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','type'=>'hidden','after'=>'</div>','class'=>'form-control','label'=>'Nom') );
                                               echo $this->Form->input('fournisseur_id',array('selected' => $four['fournisseur_id'],  'label' => '','id' => 'fournisseur_id'.$i, 'name' => 'data[Mpfournisseur]['.$i.'][fournisseur_id]','table'=>'Mpfournisseur','champ'=>'fournisseur_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir')); 
                                               echo $this->Form->input('id',array('label' => '','id' => 'id'.$i, 'name' => 'data[Mpfournisseur]['.$i.'][id]','table'=>'Mpfournisseur','champ'=>'id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control')); ?> 
                                                </td>
                                                <td align="center"> <?php echo $this->Form->input('code',array('label' => '','value' => $four['code'],'id' => 'code'.$i, 'name' => 'data[Mpfournisseur]['.$i.'][code]','table'=>'Mpfournisseur','champ'=>'code','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) ); ?></td> 
                                                <td align="center"> <?php echo $this->Form->input('prix_achat',array('label' => '','value' => $four['prix_achat'], 'id' => 'prix_achat'.$i, 'name' => 'data[Mpfournisseur]['.$i.'][prix_achat]','table'=>'Mpfournisseur','champ'=>'prix_achat','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control' ) ); ?></td> 
                                                <td align="center"><i index="<?php echo $i; ?>"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>

                                            <?php } ?>  
                                           
                                            </tbody>
                                        </table>
                                        <input type="hidden" value="<?php echo $i; ?>" class="index" id="index">
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

