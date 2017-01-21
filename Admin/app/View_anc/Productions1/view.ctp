<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Productions/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Production'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Production',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
             			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($production['Production']['date']); ?>'>

                                  </div>
			
		
                                 
</div>	
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Marque'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($production['Marque']['name']); ?>'>

                                  </div>
			
		
                                 
</div>
           </div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numéro'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($production['Production']['numero']); ?>'>

                                  </div>
			
		
                                 
</div>	</div>
                                     <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Article production</h3>
                                   
                                   
                                </div>
                                <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                      <div class="panel-body">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs icon-tab">
                                        <?php foreach($familles as $vc=>$f){ //debug($f);
                                            ?>
                                        <li class="<?php if($vc==0){?> active <?php } ?>"><a href="#famille<?php echo $vc;?>" data-toggle="tab"> <span><?php echo $f['name'];?> </span></a></li>
                                        <?php }?>
                                    </ul>
                                    <div class="tab-content tab-border">
                                     
                                    <?php 
                                    $i=0;
                                    foreach($familles as $vc=>$f){ //debug($f);
                                        $f_id=$f['id'];
                                            ?>
                                           <div class="tab-pane fade<?php if($vc==0){?> in active <?php } ?>"   id="famille<?php echo $vc;?>">
                                    <div class="table-responsive ls-table">
                                        
                                        <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                
                                                <td >Nom</td>
                                                 <td >Référence</td>
                                                
                                                <td >Production</td>
                                                  <td >Quantité livré</td>
                                                    <td >Quantité non livré</td>
                                                 <td >Quantité restante</td>
                                                

                                        </tr>
                                            </thead>
                                                  
                                            <tbody>
                                                
                                            <?php foreach($this->request->data['Ligneproduction'] as $g=>$li ){
                                                if($li['Article']['famille_id']==$f['id']){?>
                                            <tr >
                                                
                                                <td > 
                                                    <?php //echo $this->Form->input('Article', array('label' => '', 'id' => 'article_id'.$i, 'name' => 'data[Ligneproduction]['.$i.'][article_id]','table'=>'Ligneproduction','champ'=>'article_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control  select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','value'=>$li['Article']['name']) );
                                                    ?><?php echo $li['Article']['name'];?>
                                                    <input type="hidden" name="data[Ligneproduction][<?php echo $i ?>][id]" value="<?php echo $li['id']; ?>" id="id<?php echo $i; ?>">
                                                </td>
                                                <td > 
                                                    <?php //echo $this->Form->input('Article', array('label' => '', 'id' => 'article_id'.$i, 'name' => 'data[Ligneproduction]['.$i.'][article_id]','table'=>'Ligneproduction','champ'=>'article_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control  select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir','value'=>$li['Article']['reference']) );
                                                    ?>
                                                    
                                                    <?php echo $li['Article']['reference'];?>
                                                </td>
                                                 
                                                 <td > 
                                                    <?php //echo $this->Form->input('qte', array('label' => '', 'id' => 'qte'.$i, 'name' => 'data[Ligneproduction]['.$i.'][qte]','table'=>'Ligneproduction','champ'=>'qte','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control   ','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$li['qte']) );
                                                    ?> 
                                                      <?php echo sprintf('%.3f',$li['qte']);?>
                                                </td>
                                                <td > 
                                                   
                                                     <?php echo sprintf('%.3f',$li['qte_liv']);?>
                                                </td>
                                                <td > 
                                                   
                                                    <?php echo sprintf('%.3f',$li['qte']-$li['qte_liv']);?>
                                                </td>
                                                <td > 
                                                    <?php echo $li['qte_rest'];?>
                                                   
                                                </td>

                                               
                                            </tr>
  <?php $i++; } ?>
                                            <?php } ?>
                                            
                                            </tbody>
                                        </table>
                                         <input type="hidden" value="<?php echo $i; ?>" class="index" id="index">
                                    </div>
                                           </div>
                                    <?php }?>
                                    </div>
                                    <!--Table Wrapper Finish-->
                                </div>
                            </div>
                        </div>
                                     <div class="panel-body">
                                    <!-- Nav tabs -->
                                   

                                    <!-- Tab panes -->
<!--                                   
<div class="form-group">
    
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </div>-->
<?php echo $this->Form->end();?>
</div>
                            </div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>


	

