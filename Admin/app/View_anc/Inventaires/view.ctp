<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Inventaires/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Inventaire'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php
          echo $this->Form->create('Inventaire',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
<!--             		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($inventaire['Inventaire']['id']); ?>'>

                                  </div>
			
		
                                 
</div>		-->
               <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numéro'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($inventaire['Inventaire']['num']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Dépôt'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $inventaire['Depot']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>	</div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  <?php  $inventaire['Inventaire']['Date']=date("d/m/Y",strtotime(str_replace('-','/',$inventaire['Inventaire']['Date']))); ?>
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($inventaire['Inventaire']['Date']); ?>'>

                                  </div>
			
		
                                 
</div>	
                                 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Marque'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $inventaire['Marque']['name']; ?>'>
                                  </div>
			
		
                                 
                            </div>
<!--                                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Utilisateur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $inventaire['Utilisateur']['id']; ?>'>
                                  </div>
			
		
                                 
                            </div>	-->
                            </div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>
<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Articles</h3>
                                </div>
                                <div class="panel-body">
                                    
                                        <ul class="nav nav-tabs icon-tab">
                                            <?php
                                            foreach ($familles as $key =>$value ) { ?>
<!--                                            <li><a href="#famille<?php echo $key; ?>" title=""><?=$value['Famille']['name']?></a></li>-->
                                            <li <?php if($key==0){?>class="active"<?php }?>><a href="#famille<?php echo $key; ?>" data-toggle="tab"><span><?=$value['Famille']['name']?></span></a></li>
                                            <?php } ?> 
                                        </ul>

                                        <div class="tab-content tab-border">

                                      <?php  $n=0;
                                       foreach ($familles as $key =>$value ) { 
                                           ?>
                                            <div class="tab-pane fade <?php if($key==0){?>in active<?php }?>" id="famille<?php echo $key; ?>">
                                                   <table class="table" id="table<?php echo $key; ?>" style="width: 100%">
                                            <thead>
                                            <tr>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Paquet</td>
                                                <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <?php 
                                                
                                                 //   debug($inventaire);die;
                                                foreach ($value['Article'] as $key1 =>$value1 ) {
                                                    $paquet=0;
                                                    $qte=0;
                                                    foreach ($inventaire['Ligneinventaire'] as $ligne ) {
                                                        
                                                        if($ligne['article_id']==$value1['id']){
                                                        $paquet=$ligne['paquet'];
                                                        $qte=$ligne['qte'];
                                                    }}
//debug($value1);die;?>
                                                 <tr>
                                                <td style="border: 1px solid #ddd !important;"><?php echo $value1['name']?>
                                                    <input type="hidden"  id="<?php echo $key?>id<?php echo $key1?>" name="data[Ligneinventaire][<?php echo $n; ?>][article_id]"  fam="<?php echo $key?>" lig="<?php echo $key1?>" value="<?php echo $value1['id']?>"  ></td>
                                                <td style="border: 1px solid #ddd !important;"><?php echo $value1['reference']?></td>
                                                <td style="border: 1px solid #ddd !important;"><input type="text" class="form-control paq" id="<?php echo $key?>paq<?php echo $key1?>" name="data[Ligneinventaire][<?php echo $n; ?>][paquet]" index="paq" fam="<?php echo $key?>" lig="<?php echo $key1?>" value="<?php echo $paquet; ?>"   readonly='readonly' ></td>
                                                <td style="border: 1px solid #ddd !important;"><input readonly='readonly' type="text" class="form-control qte" id="<?php echo $key?>qte<?php echo $key1?>" name="data[Ligneinventaire][<?php echo $n; ?>][qte]" index="qte" fam="<?php echo $key?>" lig="<?php echo $key1?>" value="<?php echo $qte; ?>"></td>
                                            </tr>
                                                    
                                                <?php $n++; }?>
                                            
                                            </tbody>  
                                              </table>
                                               
                                            </div>
                                      <?php } ?>
                                        </div></div></div></div></div>


	

