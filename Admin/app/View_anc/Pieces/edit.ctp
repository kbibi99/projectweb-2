<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Pieces/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Piece'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Piece',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
        $this->request->data['Piece']['echance'] = date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Piece']['echance'])));
        
       //debug($this->request->data['Piecereglement'][0]['Reglement']['Date']);die;
     //  debug($this->request->data['Piecereglement'][0]);die;
        ?>

            <div class="col-md-6">                  
              	<?php
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		//echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','readonly'=>'readonly') );
		?>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Client'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $this->request->data['Client']['Raison_Social']; ?>'>
                                  </div>
			
		
                                 
                            </div>
                <?php $daterg=(date("d/m/Y",strtotime(str_replace('-','/',$this->request->data['Piecereglement'][0]['Reglement']['Date']))));
                $idreg=$this->request->data['Piecereglement'][0]['Reglement']['id'];
                if($this->request->data['Piecereglement'][0]['Paiement']['id']!=1){
                echo $this->Form->input('echance',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly') );} 
                //echo $this->Form->input('echance',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('montant',array('type'=>'text','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','readonly'=>'readonly') );  
                echo $this->Form->input('datereg',array('type'=>'text','label'=>'Date REG','div'=>'form-group','value'=>$daterg,'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly') );
                echo $this->Form->input('idreg',array('type'=>'hidden','div'=>'form-group','value'=>$idreg,'between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
                ?>
                
            </div>
                <div class="col-md-6"><?php
                 if($this->request->data['Piecereglement'][0]['Paiement']['id']!=1){
		echo $this->Form->input('num',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                 }echo $this->Form->input('num_recu',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?>
                <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Type'); ?></label>
                                 <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($this->request->data['Piecereglement'][0]['Paiement']['name']); ?>'>

                                  </div>
	</div>
                    <div class='form-group'>	
                                 <label class='col-md-2 control-label'><?php echo __('Banque'); ?></label>	
                                  
			
                                  <div class='col-sm-10'><input type='text'  class='form-control' name="data[Piece][banque]" value='<?php echo h($this->request->data['Piecereglement'][0]['Piece']['banque']); ?>'>
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

