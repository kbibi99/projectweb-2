<input type="hidden" class="page" value="production">
<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Productions/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modidication Production'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Production',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
              //  debug($this->request->data );die;
                     $date2 = explode('-', $this->request->data['Production']['date']);
            $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
            //$this->request->data['Production']['date'] = $new_date1;
            //debug($new_date1);die;
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text','value'=>$new_date1) );
                echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>' marque select','empty'=>'Veuillez choisir','disabled'=>'disabled') );
                ?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','label'=>'Numéro','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
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
                                   
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                
                                                <th >Article</th>
                                                 <th >Référence</th>
                                                <th >Quantité packer</th>
                                                 <td >Quantité livré</td>
                                                 <td >Quantité restante</td>
                                                 <td >Quantité recu</td>
                                                
                                               
                                                <th ></th>

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                <tr class='type'  style="display: none !important">
                                                
                                                                                              <td >  <div  name='data[Ligneproduction][0][divarticle_id]' index='0' table='Ligneproduction' champ='divarticle_id'>
                                                      <select name="data[Ligneproduction][0][article_id]" id="article_id0" table="Ligneproduction"  Onchange="a(this.value,index,2)" champ="article_id" index="0" class="form-control uniform_select  selectproduction">
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $article['Article']['id'];?>"><?php echo $article['Article']['name']; ?></option>
                        <?php }?>
                                                      </select>
                                                                                                  </div>
                                                    <?php //echo $this->Form->input('Article', array('label' => '', 'id' => 'article_id0', 'name' => 'data[Ligneproduction][0][article_id]','table'=>'Ligneproduction','champ'=>'article_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?>
                                                                                                   <input type="hidden" name="data[Ligneproduction][0][id]" value="0" width="40" table="Ligneproduction" champ="id" index="0">
                                                                                              </td>
                                                         
                                                <td > <div  name='data[Ligneproduction][0][divreference]"' index='0' table='Ligneproduction' champ='divreference'>
                                                    <select  name="data[Ligneproduction][0][reference]" id="reference0" table="Ligneproduction" Onchange=a(this.value,index,1) champ="reference" index="0" class="form-control uniform_select selectproduction">
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($references as $reference){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $reference['Article']['id'];?>"><?php echo $reference['Article']['reference']; ?></option>
                        <?php }?>
                                                    </select></div>
                                                    <?php //echo $this->Form->input('Reference', array('label' => '', 'id' => 'refreence0', 'name' => 'data[Ligneproduction][0][refreence]','table'=>'Ligneproduction','champ'=>'refreence','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>

                                                <td >
                                                     <input name='data[Ligneproduction][0][qte]' id="qte0" index="0" value="0" class='form-control' table='Ligneproduction' champ='qte'  value='0'>
                                                   
                                                </td>
                                                <td >
                                                      <input name='data[Ligneproduction][0][qte_liv]' id="qte_liv0" index="0" value="0" class='form-control' table='Ligneproduction' champ='qte_liv' value='0' >
                                                    
                                                </td>
                                                <td >
                                                     <input name='data[Ligneproduction][0][qte_rest]' id='qte_rest0' index="0" value="0" class='form-control'table='Ligneproduction' champ='qte_rest'  value='0'>
                                                    </td>
                                               <td >
                                                     <input name='data[Ligneproduction][0][qte_recu]' id='qte_recu0' index="0" value="0" class='form-control'table='Ligneproduction' champ='qte_recu'  value='0'>
                                                    </td>
                                                <td ><i index=""  class="fa fa-times supg" style="color: #c9302c;font-size: 22px;"></td>
                                            </tr>
                                            <?php foreach($this->request->data['Ligneproduction'] as $i=>$li ){?>
                                            <tr >
                                                           <td > 
                                                                <input type="hidden" name="data[Ligneproduction][<?php echo $i ?>][id]" value="<?php echo $li['id']; ?>" width="40">
                                                               <div id="divarticle_id<?php echo $i ?>" name='data[Ligneproduction][<?php echo $i ?>][divarticle_id]' index='<?php echo $i ?>' table='Ligneproduction' champ='divarticle_id'>
                                                               
                                                      <select name="data[Ligneproduction][<?php echo $i ?>][article_id]" id="article_id0" table="Ligneproduction" champ="article_id" index="<?php echo $i ?>" class="form-control select selectproduction ">
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($articles as $article){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $article['Article']['id'];?>" <?php if($li['article_id']==$article['Article']['id']){?> selected="selected" <?php } ?>><?php echo $article['Article']['name']; ?></option>
                        <?php }?>
                                                      </select></div>
                                                    <?php //echo $this->Form->input('Article', array('label' => '', 'id' => 'article_id0', 'name' => 'data[Ligneproduction][0][article_id]','table'=>'Ligneproduction','champ'=>'article_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>
                                                         
                                                <td > 
                                                     <div id="divreference<?php echo $i ?>" name='data[Ligneproduction][<?php echo $i ?>][divreference]"' index='<?php echo $i ?>' table='Ligneproduction' champ='divreference'>
                                                    <select  name="data[Ligneproduction][<?php echo $i ?>][reference]" id="reference0" table="Ligneproduction" champ="reference" index="<?php echo $i ?>" class="form-control select  selectproduction">
                        <option value="">Veuillez choisir</option>
                        
                        <?php foreach($references as $reference){ //debug($depot['Depot']);die;  ?>
                        <option value="<?php echo $reference['Article']['id'];?>" <?php if($li['article_id']==$reference['Article']['id']){?> selected="selected" <?php } ?> ><?php echo $reference['Article']['reference']; ?></option>
                        <?php }?>
                                                    </select>
                                                     </div>
                                                    <?php //echo $this->Form->input('Reference', array('label' => '', 'id' => 'refreence0', 'name' => 'data[Ligneproduction][0][refreence]','table'=>'Ligneproduction','champ'=>'refreence','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') );
                        ?></td>
                                        
                                                 <td > 
                                                     <input name='data[Ligneproduction][<?php echo $i; ?>][qte]' id="qte<?php echo $i; ?>" index="<?php echo $i;?>" value="<?php echo sprintf('%.3f',$li['qte']);?>" class='form-control' >
                                                   
                                                </td>
                                                <td >
                                                      <input name='data[Ligneproduction][<?php echo $i; ?>][qte_liv]' id="qte_liv<?php echo $i;?>" index="<?php echo $i;?>" value="<?php echo sprintf('%.3f',$li['qte_liv']);?>" class='form-control' >
                                                    
                                                </td>
                                                <td >
                                                     <input name='data[Ligneproduction][<?php echo $i; ?>][qte_rest]' id='qte_rest<?php echo $i; ?>' index="<?php echo $i;?>" value="<?php echo $li['qte_rest'];?>" class='form-control'>
                                                    
                                                </td>
                                                <td >
                                                     <input name='data[Ligneproduction][<?php echo $i; ?>][qte_recu]' id='qte_recu<?php echo $i; ?>' index="<?php echo $i;?>" value="<?php echo $li['qte_recu'];?>" class='form-control'>
                                                    
                                                </td>
                                                <td >
                                                    <?php if($li['qte_recu']==0 || $li['qte_liv']==0 || $li['qte_rest']==0) {?>
                                                    <i index="<?php echo $i;?>"  class="fa fa-times supg" style="color: #c9302c;font-size: 22px;"></i>
                                                    <?php }?>
                                                </td>
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

