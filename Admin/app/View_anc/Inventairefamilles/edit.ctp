<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventairefamilles/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modidication Inventaire Familles'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Inventairefamille',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>      
                                      <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"> Lignes Inventaires</h3>
                                    <a class="btn btn-danger ajouterligne2" table='table' index='index' tr='type'  style="
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
                                             <td align="center">Famille</td>
                                             <td align="center">Qte</td>
                                             <td></td>

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important">
                                                
                                                <td > 
                                                    <div  name='' index='' table='Ligneinventairefamille' champ='divarticle_id' id="divarticle_id">
                                                      <select name="" id="" table="Ligneinventairefamille" champ="famille_id" index="" class="uniform_select " >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $article['Famille']['id'];?>"><?php echo $article['Marque']['name'].' : '.$article['Famille']['name']; ?></option>
                        <?php }?>
                                                      </select></div>
                                                    <?php //echo $this->Form->input('Article', array('label' => '', 'id' => 'article_id0', 'name' => 'data[Ligneproduction][0][article_id]','table'=>'Ligneproduction','champ'=>'article_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>
                                                         
                                                <td > 
                                                    <input  table="Ligneinventairefamille" champ="qte" index="0" type="text" class="form-control" />        
                                                    <?php //echo $this->Form->input('Reference', array('label' => '', 'id' => 'refreence0', 'name' => 'data[Ligneinventairefamille][0][refreence]','table'=>'Ligneinventairefamille','champ'=>'refreence','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>

                                                <td ><i index=""  class="fa fa-times supg" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <?php //debug($this->request->data['Ligneinventairefamille']);die;
                                            foreach($this->request->data['Ligneinventairefamille'] as $k=>$ligne){
                                            //debug($ligne);die;
                                                ?>
                                            <tr >
                                                
                                                <td > 
                                                    <div id="divarticle_id<?php echo $k;?>" name='data[Ligneinventairefamille][<?php echo $k;?>][divarticle_id]' index='<?php echo $k;?>' table='Ligneinventairefamille' champ='divarticle_id'>
                                                        <select name="data[Ligneinventairefamille][<?php echo $k;?>][famille_id]"  id="famille_id<?php echo $k;?>" table="Ligneinventairefamille" champ="famille_id" index="<?php echo $k;?>" class="select " >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                       
                        <option value="<?php echo $article['Famille']['id'];?>"<?php if($article['Famille']['id']==$ligne['famille_id']){?> selected="selected"<?php }?> ><?php echo $article['Marque']['name'].' : '.$article['Famille']['name']; ?></option>
                        <?php }?>
                                                    </select>
                                                    </div>
                                                   </td>
                                                          
                                                
                                                <td > 
                                                    <input value="<?php echo $ligne['qte'];?>" name="data[Ligneinventairefamille][<?php echo $k;?>][qte]"  id="qte<?php echo $k;?>" table="Ligneinventairefamille" champ="qte" index="<?php echo $k;?>" type="text" class="form-control" />        
                                                  </td>

                                                <td >
                                                   
                                                    <i index="<?php echo $k;?>"  class="fa fa-times supg" style="color: #c9302c;font-size: 22px;"></i>
                                                    </td>
                                            </tr>
                                            <?php } ?>
                                           
                                           
                                            </tbody>
                                        </table>
                                        <input type="hidden" value="<?php echo $k;?>" class="index" id="index">
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

