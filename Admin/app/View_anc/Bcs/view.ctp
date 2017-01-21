<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bcs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Consultation Bon de commande'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Bc',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>

                <div class="col-md-6">                         
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bc['Fournisseur']['raison_social']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bc['Bc']['date']); ?>'>

                        </div>



                    </div>	</div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($bc['Bc']['numero']); ?>'>

                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Bon de livraison'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bc['Bl']['numero']; ?>'>
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

                                <div class="tab-content tab-border">
                                    <div class="table-responsive ls-table">

                                        <table id="table" class="table" >


                                            <thead>
                                                <tr >

                                                    <td >Matiére première</td>
                                                    <td >Qté</td>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                           <?php 
                                            
                                            
                                        foreach ($lcs as $key=>$Lclient){ //debug($f);
?>      
                                                <tr >

                                                    <td > 
                                                    <?php echo $Lclient['Matierepremiere']['designation'] ?>
                                                    </td>
                                                    <td > 

                                                    <?php echo $Lclient['Lc']['qte_piece']; ?>
                                                    </td>




                                                </tr>
                                            <?php } ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!--Table Wrapper Finish-->
                        </div>
                    </div>

                    <div class="panel-body">

<?php echo $this->Form->end();?>
                    </div>
                </div>
<?php echo $this->Form->end();?>

            </div></div></div></div>




