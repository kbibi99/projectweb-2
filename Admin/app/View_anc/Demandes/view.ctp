<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Demandes/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Consultation Demande'); ?></h3>
                                </div>
                                <div class="panel-body">
         <?php echo $this->Form->create('Demande',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
                           
           <div class="col-md-6">                         
               <div class='form-group' style="display: none">	
                                 <label class='col-md-2 control-label'><?php echo __('Id'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($demande['Demande']['id']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($demande['Demande']['date']); ?>'>

                                  </div>
			
		
                                 
</div>	</div><div class="col-md-6">     
              		 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	
                                  	
                                  
			<div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($demande['Demande']['numero']); ?>'>

                                  </div>
			
		
                                 
</div>			 <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Utilisateur'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $demande['Utilisateur']['id']; ?>'>
                                  </div>
			
		
                                 
                            </div>	</div>
<?php echo $this->Form->end();?>
	
</div></div></div></div>



<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Matières premières</h3>
            </div>
            <div class="panel-body">



                <div class="tab-content tab-border">

                                      <?php  $n=0; ?>
                    <div class="tab-pane fade in active" id="famille">
                        <table class="table" id="table" style="width: 100%">
                            <thead>
                                <tr>
                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 35%">Nom</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 15%">Référence</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Paquet</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" style="widtd: 25%">Qte Piéce</td>
                                </tr>
                            </thead>
                            <tbody>

                                                <?php 
                                                foreach ($lines as $key1 =>$value1 ) {
                                                    
                                                    
//                                                    print'<pre>'; print_r($matierepremieres);die;
                                                    ?>

                                                  
                                <tr>
                                    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremieres[$n]['Matierepremiere']['designation']?>
                                        <input type="hidden"  id="<?php echo $n;?>id<?php echo $key1?>" name="data[Lineinventory][<?php echo $n; ?>][matierepremieres_id]"  fam="<?php echo $n?>" lig="<?php echo $key1?>" value="<?php echo $value1['Lignedemande']['matierepremiere_id']?>"  ></td>
                                    <td style="border: 1px solid #ddd !important;"><?php echo $matierepremieres[$n]['Matierepremiere']['code']?></td>
                                    
                                    <td style="border: 1px solid #ddd !important;"><input readonly='readonly' type="text" class="form-control qte" id="<?php echo $n?>qte<?php echo $key1?>" name="data[Lines][<?php echo $n; ?>][qte_pqt]" index="qte_pqt" fam="<?php echo $n?>" lig="<?php echo $key1?>" value="<?php echo $value1['Lignedemande']['qte_pqt'] ;?>"></td>
                                    <td style="border: 1px solid #ddd !important;"><input readonly='readonly' type="text" class="form-control qte" id="<?php echo $n?>qte<?php echo $key1?>" name="data[Lines][<?php echo $n; ?>][qte_piece]" index="qte_piece" fam="<?php echo $n?>" lig="<?php echo $key1?>" value="<?php echo $value1['Lignedemande']['qte_piece'] ;?>"></td>
                                </tr>

                                                <?php $n++; }?>

                            </tbody>  
                        </table>

                    </div>

                </div></div></div></div></div>












	




	

