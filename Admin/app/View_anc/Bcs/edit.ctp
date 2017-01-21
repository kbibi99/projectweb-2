<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bcs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>
    
</div>
<br>
<div class="row" >
                        <div class="col-md-12" >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Modidication bon de commande'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Bc',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

            <div class="col-md-6">                  
              	<?php
                $date2 = explode('-', $this->request->data['Bc']['date']);
                $new_date1 = $date2[2] . '/' . $date2[1] . '/' . $date2[0];
		echo $this->Form->input('id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('date',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly', 'type'=>'text','required data-bv-notempty-message'=>'Champ Obligatoire','value'=>$new_date1) );
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('numero',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
		echo $this->Form->input('bl_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') );
	?>
  </div>          
 <br>                              
                                    
     <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Ligne de commande</h3>
                <a class="btn btn-danger ajouterligne" table='table' index='index' tr='type'  style="
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
                            <td   align="center">Matiére premiére</td>
                            <td   align="center">Qté</td>

                            <td></td> 
                    </tr>
                        </thead>

                        <tbody>
                            <tr class='type'  style="display: none !important"> 
                            <td align="center" > <?php echo $this->Form->input('matierepremiere_id', array('label' => '', 'id' => 'matierepremiere_id', 'name' => 'data[Lc][0][matierepremiere_id]','table'=>'Lc','champ'=>'matierepremiere_id','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control uniform_select ','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir') ); ?></td>
                            <td align="center"> <?php echo $this->Form->input('qte_piece',array('id' => 'qte_piece', 'name' => 'data[Lc][0][qte_piece]','table'=>'Lc','champ'=>'qte_piece','index'=>'0','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','required data-bv-notempty-message'=>'Champ Obligatoire') ); ?></td> 
                            <td align="center"><i index=""  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                        </tr>
                        
                        
                        <?php foreach($this->request->data['Lc'] as $i => $lc){?>
                        <tr >

                            <td align="center"> <?php 
echo $this->Form->input('matierepremiere_id',array('label' => '', 'selected'=> $lc['matierepremiere_id'], 'id' => 'matierepremiere_id', 'name' => 'data[Lc]['.$i.'][matierepremiere_id]','table'=>'Lc','champ'=>'matierepremiere_id','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','label'=>'Matiére premiére','required data-bv-notempty-message'=>'Champ Obligatoire','empty'=>'Veuillez choisir')); ?></td>
                            <td align="center"> <?php echo $this->Form->input('qte_piece',array('id' => 'qte_piece', 'name' => 'data[Lc]['.$i.'][qte_piece]','table'=>'Lc','champ'=>'qte_piece','index'=>$i,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control', 'value' => $lc['qte_piece']) ); ?></td> 
                            <td align="center"><i index="<?php echo $i;?>"  class="fa fa-times sup" style="color: #c9302c;font-size: 22px;"></td>
                        </tr>
                        <?php } ?>


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

