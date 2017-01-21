<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>References/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modification Référence'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Reference',array('autocomplete' => 'off','type'=>'file','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php //debug($this->request->data);
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('reference',array('div'=>'form-group','label'=>'Référence','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
                
                ?>
                <div class ='imagediv' style='position: relative;left: 50%'><img src="<?php echo $this->webroot; ?>files/reference/<?php echo $this->request->data['Reference']['image']?>" class="file-preview-image" title="Desert.jpg" alt="Desert.jpg">
                    </div>
            </div><div class="col-md-6"><?php
		echo $this->Form->input('image',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control imagereference','type'=>'file','multiple'=>"true",'id'=>"file-3",'value'=>'files/reference'.$this->request->data['Reference']['image']) );
	?>

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

