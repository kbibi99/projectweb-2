<?php $test=""; ?>
<script language="JavaScript" type="text/JavaScript">

function flvFPW1(){

var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;

} 
</script>
<div class="row" >
    <div class="col-md-12" >
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><?php echo __('Tableau de bord Pièces de rechange'); ?></h3>
            </div>
            <div class="panel-body">
        <?php echo $this->Form->create('Inventory',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

                <div class="col-md-6">                  
              	<?php 
		echo $this->Form->input('date1',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','label'=>'Date de') ); 
                
		echo $this->Form->input('matselect_id',array('empty'=>'veuillez choisir','div'=>'form-group','label'=>'Matiéres premières','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'veuillez choisir'));
	?></div><div class="col-md-6"><?php
		echo $this->Form->input('date2',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text','label'=>"Jusqu'à") ); 
	?>
                </div>      

                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary" id="aff">Chercher</button>  
                 <a class="btn btn-primary" href="<?php echo $this->webroot;?>Inventories/bordpr"/>Afficher Tout </a>
                   
                        <a onClick="flvFPW1(wr+'Inventories/imp_bordpr?matselect_id=<?php echo @$this->request->data['Inventory']['matselect_id'];?>&date1=<?php echo @$date1; ?>&date2=<?php echo @$date2; ?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" >
                            <button class='btn btn-primary' > Imprimer <i class='fa fa-print'></i></button></a>

                    </div>
                </div>
            </div>
<?php echo $this->Form->end();?>
        </div>
    </div>
</div> 
<div class="row">

    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"> Piéces de Rechange </h3> 

            </div>
            <div class="panel-body"> 
                <div class="tab-content tab-border">

                    <div class="tab-pane fadein active" id="famille">
                        <table class="table" id="table" style="width: 100%">
                            <thead>
                                <tr>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Référence</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Désignation</td> 
                                     <td style="border: 1px solid #ddd !important;" align="center" >Prix</td> 
                                    <td style="border: 1px solid #ddd !important;" align="center" >Qte Entré</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Entré %</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Valeur entré</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Qte Sorti</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Sorti %</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Valeur sorti</td>
                                    <td style="border: 1px solid #ddd !important;" align="center" >Ecart</td>
                                </tr>
                            </thead>
                            <tbody>

                                       <?php 
                                       //debug($matierepremieres); die;
                                                $tot_qte=0;
                                               $tot_val_entr=0;
                                               $tot_qte_srt=0;
                                               $tot_val_srt=0;
                                               $tot_ecart=0;
                                       
                                       
                                       
                                       $qtetten=0;
                                       $qtettso=0;
                                       $valtt=0;
                                       $mat_id="";
                                       $art=array();
                                       
                                        foreach ($prentrees as $entre ) {
                                            $qtetten+=$entre[0]['sumqte'];
                                            $valtt+=$entre[0]['sumttc'];
                                        } 
                                       
                                        foreach ($prsortiee as $sorti ) {
                                            $qtettso+=$sorti[0]['sumqte'];
                                        } 

                                       foreach ($matierepremieres as $key =>$value ) {
                                             $sumqte_en=0;
                                             $sumttc=0;
                                             $pc_entre=0;
                                             $sumqte_so=0;
                                             $pc_sorti=0;   
                                             $ecart=0; 
                                             $pendr_en=0;
                                             $pendr_so=0;
                                           
                                           $mat_id=$value['Matierepremiere']['id'];
                                           $code=$value['Matierepremiere']['code'];
                                           $nom=$value['Matierepremiere']['designation'];
                                           $moyp=$value['Matierepremiere']['prixachat'];
                                           $art[$mat_id]=$moyp;
                                      //     debug($mat_id);
                                           foreach ($prentree as $entre ) {
                                               if($entre[0]['avgmat']==$mat_id){  
                                               $sumqte_en=$entre[0]['sumqte'];
                                               $sumttc=$entre[0]['sumttc'];
                                               $pendr_en=$sumttc;
                                               $pc_entre=$sumqte_en*100/$qtetten;
                                               $moyp=$sumttc/$sumqte_en;
                                               $art[$mat_id]=$moyp;
                                               } 
                                           } 
                                           //debug($qtettso);
                                           foreach ($prsorti as $sorti) {
                                               if($sorti[0]['avgmat']==$mat_id){ 
                                               $sumqte_so=$sorti[0]['sumqte']; 
                                               //debug($sumqte_so);
                                               $pc_sorti=$sumqte_so*100/$qtettso;
                                               $pendr_so=$sumqte_so*@$art[$mat_id];
                                               } 
                                           }
                                           $ecart=$sumqte_en-$sumqte_so;
                                          
                                           
                                           ?>  
                <tr>
                    <td style="border: 1px solid #ddd !important;"><?php echo $code ?></td>
                    <td style="border: 1px solid #ddd !important;"><?php echo $nom ?></td>
                    <td style="border: 1px solid #ddd !important;"><?php echo $moyp ?></td>
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo $sumqte_en ?></td> 
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo round($pc_entre)."%"; ?></td> 
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo @$pendr_en; ?></td>
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo $sumqte_so ?></td> 
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo round($pc_sorti)."%"; ?></td> 
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo @$pendr_so; ?></td> 
                    <td align="right"  style="border: 1px solid #ddd !important;"><?php echo $ecart; ?></td>
                </tr>  
                                             <?php 
                                               $tot_qte=$tot_qte+$sumqte_en;
                                               $tot_val_entr=$tot_val_entr+@$pendr_en;
                                               $tot_qte_srt=$tot_qte_srt+$sumqte_so;
                                               $tot_val_srt=$tot_val_srt+@$pendr_so;
                                               $tot_ecart=$tot_ecart+$ecart;
                                               } 
//                                               number_format($tot_qte,3)
                                               ?> 

                            </tbody> 
                            <tfoot>
                                <tr>
                                    <td colspan="3" style="border: 1px solid #ddd !important;" align="left" >Total</td> 
                                    <td style="border: 1px solid #ddd !important; " align="right" ><?php echo $tot_qte; ?></td>
                                    <td style="border: 1px solid #ddd !important; " align="right" ></td>
                                    <td style="border: 1px solid #ddd !important;" align="right" ><?php echo $tot_val_entr; ?></td>
                                    <td style="border: 1px solid #ddd !important;" align="right" ><?php echo $tot_qte_srt; ?></td>
                                    <td style="border: 1px solid #ddd !important;" align="right" ></td>
                                    <td style="border: 1px solid #ddd !important;" align="right" ><?php  echo $tot_val_srt;?></td>
                                    <td style="border: 1px solid #ddd !important;" align="right" ><?php  echo $tot_ecart;?></td>
                                </tr> 
                            </tfoot>
                        </table>

                    </div>

                </div>
                <br>

            </div></div></div></div>
