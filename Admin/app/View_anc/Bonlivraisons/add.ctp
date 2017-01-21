<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bonlivraisons/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Ajout Bonlivraison'); //debug($Boncommande[0]['Client']);die; ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Bonlivraison',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('Numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$mm) );
		
		echo $this->Form->input('Date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
		
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'hidden','value'=>$Boncommande[0]['Client']['id']) );
                echo $this->Form->input('client',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text','value'=>$Boncommande[0]['Client']['Raison_Social']) );
		 echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','type'=>'text','value'=>$marque_id,'type'=>'hidden') );
//echo $this->Form->input('Montant_Regler',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('timbre_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('utilisateur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('ligneclient_id',array('div'=>'form-group','label'=>'Adresse','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>   
                                       <div class="col-md-12">
                            <div class="panel panel-default">
                                    <div class="panel-body">
                                    <!--Table Wrapper Start-->
                                    <div class="table-responsive ls-table">
                                     <table id="table" class="table" >
                                            <thead>
                                            <tr >
                                                <td   align="center">Famille</td>
                                                <td   align="center">Qte</td>
                                                 <td   align="center">Prix</td>
                                               
                                                 <td   align="center">Remise</td>
                                                  
                                                <td  align="center"> TTC</td> 
                                        </tr>
                                            </thead>
                                            <tbody>
                                                <?php $tttva=0;
                                                $ttht=0;
                                                $tttc=0;
                                                
                                                foreach($ligne as $i=>$li){
                                                  // debug($li);die;
                                                  $ttht=$ttht+sprintf('%.3f',$li[0]['prix']*$li[0]['qte']);
                                                    $tttva= 0;  ?>
                                            <tr >
                                                <td   align="center"><input name='data[Lignebonlivraison][<?php echo $i;?>][famille]'  index='<?php echo $i;?>' id='' value="<?php echo $li['Famille']['name'];?>" class="form-control" readonly="readonly">
                                                  <input name='data[Lignebonlivraison][<?php echo $i;?>][famille_id]'  index='<?php echo $i;?>' id='' value="<?php echo $li['Famille']['id'];?>" class="form-control" type='hidden' >                          
                                                </td>
                                                <td   align="center"><input name='data[Lignebonlivraison][<?php echo $i;?>][Qte]' index='<?php echo $i;?>' id='Qte<?php echo $i;?>' value="<?php echo $li[0]['qte'];?>" class="form-control calcule" ></td>
                                                 <td   align="center"><input name='data[Lignebonlivraison][<?php echo $i;?>][Prix]' index='<?php echo $i;?>' id='Prix<?php echo $i;?>' value="<?php echo sprintf('%.3f', $li[0]['prix']);?>" readonly="readonly"  class="form-control calcule"></td>
                                                
                                                 <td   align="center"><input name='data[Lignebonlivraison][<?php echo $i;?>][Remise]' index='<?php echo $i;?>'  id='Remise<?php echo $i;?>' value="0.000" class="form-control calcule" ></td>
                                                
                                                 <td  align="center"> <input name='data[Lignebonlivraison][<?php echo $i;?>][Total_HT]' index='<?php echo $i;?>'  id='Total_HT<?php echo $i;?>' value="<?php echo sprintf('%.3f',$li[0]['prix']*$li[0]['qte']);?>" class="form-control calcule" readonly="readonly"></td> 
                                        </tr>
                                                <?php } ?>
                                            <input type="hidden" name="max" value="<?php echo $i;?>" id="max">
                                            </tbody>
                                            <tfoot>
                                              
                                                  <tr >
                                                      <td   align="right" colspan="4">Remise</td>
                                               
                                                <td  align="center"> <?php
                                               // echo $this->Form->input('Remise',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control deltebefore','required data-bv-notempty-message'=>'Champ Obligatoire','label'=>'','value'=>'0.000','type'=>'text') );
                                                ?>
                                                <input name="data[Bonlivraison][Remise]" class="form-control deltebefore" required="" data-bv-notempty-message="Champ Obligatoire" value="0.000" type="text" id="BonlivraisonRemise" data-bv-field="data[Bonlivraison][Remise]">
                                                </td> 
                                        </tr>
                                             
                                             
                                              <tr >
                                                      <td   align="right" colspan="4">Total TTC</td>
                                               
                                                <td  align="center"> <?php
                                              // echo $this->Form->input('Total_TTC',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control deltebefore','required data-bv-notempty-message'=>'Champ Obligatoire' ,'label'=>'','type'=>'text','value'=>  sprintf('%.3f',$ttht+$tttva)) );
                                                ?>
                                                <input name="data[Bonlivraison][Total_TTC]" class="form-control deltebefore" required="" data-bv-notempty-message="Champ Obligatoire" value="<?php echo   sprintf('%.3f',$ttht+$tttva); ?>" type="text" id="BonlivraisonTotalTTC" data-bv-field="data[Bonlivraison][Total_TTC]">
                                                </td> 
                                        </tr>
                                            </tfoot>
                                     </table>
                                    </div>
                                    </div>
                                 </div>
                                    </div>
                                    
 <?php 
  
  
                                    
		
		
                
                
?>
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

