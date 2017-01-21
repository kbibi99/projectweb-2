<input type="hidden" class="page" value="production">
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Productions/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<?php  //debug($v);die;?>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Production'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Production',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                 echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>' marquep select','empty'=>'Veuillez choisir') );
                ?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','label'=>'Numéro','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$mm) );
	?>
  </div>       
                                    <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Article production</h3>
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
                                                
                                                <th >Article</th>
                                             <th >Référence</th>
                                          
                                                <th ></th>

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important">
                                                
                                                <td > 
                                                    <div  name='' index='' table='Ligneproduction' champ='divarticle_id' id="divarticle_id">
                                                      <select name="" id="" table="Ligneproduction" champ="article_id" index="" class="uniform_select selectproduction" >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $article['Article']['id'];?>"><?php echo $article['Article']['name']; ?></option>
                        <?php }?>
                                                      </select></div>
                                                    <?php //echo $this->Form->input('Article', array('label' => '', 'id' => 'article_id0', 'name' => 'data[Ligneproduction][0][article_id]','table'=>'Ligneproduction','champ'=>'article_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>
                                                         
                                                <td > 
                                                    <div  name='' index='' table='Ligneproduction' champ='divreference' id="divreference">
                                                    <select  name="" id="" table="Ligneproduction" champ="reference" index="" class="uniform_select  selectproduction" >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($references as $reference){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $reference['Article']['id'];?>"><?php echo $reference['Article']['reference']; ?></option>
                        <?php }?>
                                                    </select>
                                                     </div>
                                                    <?php //echo $this->Form->input('Reference', array('label' => '', 'id' => 'refreence0', 'name' => 'data[Ligneproduction][0][refreence]','table'=>'Ligneproduction','champ'=>'refreence','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>

                                                <td ><i index=""  class="fa fa-times supg" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <tr >
                                                
                                                <td > 
                                                    <div id="divarticle_id0" name='data[Ligneproduction][0][divarticle_id]' index='0' table='Ligneproduction' champ='divarticle_id'>
                                                        <select name="data[Ligneproduction][0][article_id]"  id="article_id0" table="Ligneproduction" champ="article_id" index="0" class="select selectproduction" >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                       
                        <option value="<?php echo $article['Article']['id'];?>" ><?php echo $article['Article']['name']; ?></option>
                        <?php }?>
                                                    </select>
                                                    </div>
                                                   </td>
                                                          
                                                
                                                <td > 
                                                    <div id="divreference0" name='data[Ligneproduction][0][divreference]"' index='0' table='Ligneproduction' champ='divreference'>
                                                         
                                                       <select  name="data[Ligneproduction][0][reference]" id="reference0" table="Ligneproduction" champ="reference" index="0" class="select selectproduction " >
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($references as $reference){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $reference['Article']['id'];?>"><?php echo $reference['Article']['reference']; ?></option>
                        <?php }?>
                                                    </select>
                                                        </div>
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

<script lang="javascript">
  
    </script>