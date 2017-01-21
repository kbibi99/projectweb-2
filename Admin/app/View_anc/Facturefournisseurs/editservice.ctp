<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>facturefournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification facture fournisseur'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Facturefournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php //debug($this->request->data['Facturefournisseur']['Date']);die;
                $date2 = explode('-', $this->request->data['Facturefournisseur']['Date']);
                $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control select','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Facturefournisseur']['fournisseur_id'],'disabled'=>"disabled") );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly', 'type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$new_date1) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Facturefournisseur']['Numero'],'type'=>'text') );
                echo $this->Form->input('Type',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>'1','type'=>'hidden') );
                echo $this->Form->input('Total_TTC',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$this->request->data['Facturefournisseur']['Total_TTC'],'type'=>'text') );
		
	?>
  </div>          
 <br>                              
                                    
    





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

