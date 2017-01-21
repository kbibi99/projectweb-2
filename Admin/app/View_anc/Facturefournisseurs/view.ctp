<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>facturefournisseurs/index"/> <i class="fa fa-reply"></i> Retour </a>
    <input type="hidden" class="ipage" value="bc"/>
    </div>

</div>
<br>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php
               // debug($facturefournisseur);
                echo __('Consultation Facture'); ?></h3>
            </div>
            <div class="panel-body">
         <?php echo $this->Form->create('Facturefournisseur',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); ?>
<?php //debug($facturefournisseur['Facturefournisseur'][]);die; ?>
                <div class="col-md-6">                         
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Fournisseur'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $facturefournisseur['Fournisseur']['raison_social']; ?>'>
                        </div>



                    </div>			 <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Date'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($facturefournisseur['Facturefournisseur']['Date']); ?>'>

                        </div>



                    </div>	</div><div class="col-md-6">     
                    <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Numero'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' class='input' value='<?php echo h($facturefournisseur['Facturefournisseur']['Numero']); ?>'>

                        </div>



                    </div>		
<!--                        <div class='form-group'>	
                        <label class='col-md-2 control-label'><?php echo __('Bon de livraison'); ?></label>	


                        <div class='col-sm-10'><input type='text'  class='form-control' readonly='readonly' value='<?php echo $bc['Bl']['numero']; ?>'>
                        </div>



                    </div>	-->
                    </div>


                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Ligne de facture</h3>


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
                                               <td   align="center" width="12%">Prix</td>
                                              
                                               <td   align="center" width="12%">Remise</td>
                                                <td   align="center" width="12%">TVA</td>
                                               <td   align="center" width="12%">THT</td>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                           <?php 
                                            
                                            
                                        foreach ($facturefournisseur['Lignefacturefournisseur'] as $key=>$Lclient){ //debug($f);
?>      
                                <tr >

                                    <td > 
                                    <?php echo $Lclient['Mpfournisseur']['Matierepremiere']['nom2'] ?>
                                    </td>
                                    <td > 

                                    <?php echo $Lclient['Qte']; ?>
                                    </td>
<td > 

                                    <?php echo $Lclient['Prix']; ?>
                                    </td>
                                     <td > 

                                    <?php echo $Lclient['Remise']; ?>
                                    </td>
                                     <td > 

                                    <?php echo $Lclient['Tva']; ?>
                                    </td>
                                     <td > 

                                    <?php echo $Lclient['Total_HT']; ?>
                                    </td>



                                </tr>
                                            <?php } ?>

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td colspan="3" align="left"> </td>
                                                <td colspan="2" align="left"> Total TVA </td>
                                                <td > <input type="text" class="form-control"  value="<?php echo  h($facturefournisseur['Facturefournisseur']['Tva']); ?>"> </td>
                                            </tr>
                                           <tr>
                                                <td colspan="3" align="left">  </td>
                                                <td colspan="2" align="left"> Total remise </td>
                                                <td > <input type="text" class="form-control" id="remise" name="data[Facturefournisseur][Remise]" value="<?php echo h( $facturefournisseur['Facturefournisseur']['Remise']); ?>"> </td>
                                            </tr>
                                           <tr>
                                                <td colspan="3" align="left">  </td>
                                                <td colspan="2" align="left"> Total HT </td>
                                                <td > <input type="text" class="form-control" id="Total_HT" name="data[Facturefournisseur][Total_HT]" value="<?php echo h($facturefournisseur['Facturefournisseur']['Total_HT']); ?>"> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="left"> </td>
                                                <td colspan="2" align="left"> Timbre </td>
                                                <td > <input type="hidden" class="form-control" id="timbre_id" name="data[Facturefournisseur][timbre_id]" value=""/>
                                                    <input type="text" class="form-control" id="timbre" name="data[Facturefournisseur][timbre]" value="<?php echo h($facturefournisseur['Facturefournisseur']['timbre']); ?>"> </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="left">  </td>
                                                <td colspan="2" align="left"> Total TTC </td>
                                                <td > <input type="text" class="form-control" id="Total_TTC" name="data[Facturefournisseur][Total_TTC]" value="<?php echo h($facturefournisseur['Facturefournisseur']['Total_TTC']); ?>" ></td>
                                            </tr>
                                            <tr >
                                                <td colspan="3" style="display:none">  </td>
                                                <td colspan="2" style="display:none"> Total fodec </td>
                                                <td  style="display:none"> <input type="text" class="form-control" id="fodec" name="data[Facturefournisseur][fodec]" </td>
                                            </tr>
                                            </tfoot>
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




