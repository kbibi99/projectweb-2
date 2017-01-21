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
                                    <h3 class="panel-title"><?php echo __('Ajout Inventaire Famille'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Inventairefamille',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('date',array('div'=>'form-group','value'=>date('j/m/Y'),'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('label'=>'Numéro','value'=>$mm,'readonly'=>'readonly','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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
                                    <input type="hidden" value="0" class="index" id="index">
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
                                            <tr >
                                                
                                                <td > 
                                                    <div id="divarticle_id0" name='data[Ligneinventairefamille][0][divarticle_id]' index='0' table='Ligneinventairefamille' champ='divarticle_id'>
                                                        <select name="data[Ligneinventairefamille][0][famille_id]"  id="famille_id0" table="Ligneinventairefamille" champ="famille_id" index="0" class="select " >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                       
                        <option value="<?php echo $article['Famille']['id'];?>" ><?php echo $article['Marque']['name'].' : '.$article['Famille']['name']; ?></option>
                        <?php }?>
                                                    </select>
                                                    </div>
                                                   </td>
                                                          
                                                
                                                <td > 
                                                    <input name="data[Ligneinventairefamille][0][qte]"  id="qte0" table="Ligneinventairefamille" champ="qte" index="0" type="text" class="form-control" />        
                                                  </td>

                                                <td >
                                                   
                                                    <i index="0"  class="fa fa-times supg" style="color: #c9302c;font-size: 22px;"></i>
                                                    </td>
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

