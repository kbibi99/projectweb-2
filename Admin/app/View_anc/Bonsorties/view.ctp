<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bonsorties/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Consultation Bon de sortie'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Bonsorty',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                         
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Demande'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bonsorty['Demande']['id']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bonsorty['Bonsorty']['date']); ?>'>

                        </div>



                    </div>	</div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bonsorty['Bonsorty']['numero']); ?>'>

                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Utilisateur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bonsorty['Utilisateur']['id']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Lot'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bonsorty['Lot']['id']; ?>'>
                        </div>



                    </div>	
                </div>







                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Matière premiére</h3>

                        </div>
                        <div class="panel-body">
                            <!--Table Wrapper Start-->
                            <div class="table-responsive ls-table">
                                <table id="table" class="table" >
                                    <thead>
                                        <tr >
                                            <td   align="center">Nom</td>
                                            <td   align="center">Référence</td>  
                                            <td   align="center">Qte Pièce</td>  
                                            <td   align="center">Lots</td>  
                                        </tr>
                                    </thead> 
                                    <tbody> 
                                        <?php // print'<pre>'; print_r($result);die;?>
                                        <?php foreach($result as $key => $value){ ?>
                                        <tr>
                                            <td align="center"><?php echo $value['Matierepremiere']['designation']?></td>
                                            <td align="center"><?php echo $value['Matierepremiere']['code'] ?></td>
                                            <td align="center"><?php echo $value['Matierepremiere']['qte_piece'] ?></td>
                                            <td align="center">
                                                <table  class="table">
                                                    <tr>
                                                        <td>Lot</td>
                                                        <td>Qte Paquet</td>
                                                        <td>Qte Pièce</td>
                                                    </tr>
                                                    
                                                
                                                    <?php foreach($value['Matierepremiere']['Lignesorty'] as $k => $v){ ?>
                                                    <?php foreach($v['Lot'] as $l => $m){ ?>
                                                    <tr>
                                                        <td><?php echo $m['numero'].' Le '.$m['date']?></td>
                                                        <td><?php echo $v['qte_pqt'] ?></td>
                                                        <td><?php echo $v['qte_piece'] ?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    <?php } ?>
                                                </table>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            <!--Table Wrapper Finish-->
                        </div>
                    </div>
                </div>



<?php echo $this->Form->end();?>

            </div></div></div></div>




