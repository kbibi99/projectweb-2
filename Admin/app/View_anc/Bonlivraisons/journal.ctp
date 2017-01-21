<div class="row">
    <div class="col-md-12">
        <a class="btn btn btn-danger" href="<?php echo $this->webroot;?>Bonlivraisons/index"/> <i class="fa fa-reply"></i> Retour </a>
    </div>
    
</div>
<br>
<div class="row" >
   
                        <div class="col-md-12" >
                            <div class="panel panel-default"> 
                                <div class="panel-body">
        <?php echo $this->Form->create('Bonlivraison',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text') );
		 echo $this->Form->input('famille_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
                
		echo $this->Form->input('marque_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
		
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','type'=>'text') );
	echo $this->Form->input('client_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir','id'=>'BoncommandeClientId') );
         echo $this->Form->input('ligneclient_id',array('div'=>'form-group','label'=>'Adresse','between'=>'<div class="col-sm-10 adrcli">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );       
			
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button>   
<?php 
// debug($mar);

if(@$req_journals!=null){ 
?>
<button type="submit" class="btn btn-primary"  onClick="flvFPW1(wr+'bonlivraisons/imprimer?fam=<?php echo $fam ; ?>&mar=<?php echo $mar ; ?>&cli=<?php echo @$cli ; ?>&contact=<?php echo @$ligneclient_id ; ?>&Date_d=<?php echo @$Date_d ; ?>&Date_f=<?php echo @$Date_f ; ?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;">Imprimer</button>
<?php 
}
?>

                                            </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
<?php 
if(@$req_journals!=null){ 
?>                             
              <div class="col-md-12">
                            <div class="panel panel-default">
                                    <div class="panel-body">
                                        <center> Journal des ventes </center>
                                    <div class="table-responsive ls-table">
                                     <table id="table" class="table" >
                                            <thead> 
                                             <tr>
                                                 <td align="center">Date</td>
                                                 <td align="center">Client</td>
                                                  <td align="center">N° BL</td>
                                                 <td align="center">Designation</td>
                                                 <td align="center">PU</td>
                                                 <td align="center">Qte</td>
                                                 <td align="center">Remise</td>
                                                 <td align="center">Montant</td>
                                             </tr> 
                                            </thead>
                                            <tbody>
                                                <?php 
                                                $sqte=0;
                                                $smnt=0;
                                                $sremise=0;
                                                $sremisel=0;
                                                 $sqtel=0;
                                                $smntl=0;
                                                $s=1;
// CakeSession::write('imp_laiv',$req_journals);
                                                $nbl=$req_journals[0]['Bonlivraison']['Numero'];
                                                foreach ($req_journals as $lig_liv){ 
                                                   // debug($lig_liv);die;
                                                    if($lig_liv['Bonlivraison']['Numero']!=$nbl){
                                                        $s=1;?>
                                                <tr><td colspan="5" align="center" ><strong>Total <?php echo $nbl; ?> </strong></td><td align="right"><strong><?php echo sprintf("%01.3f",$sqtel); ?></strong></td><td align="right"><strong><?php echo sprintf("%01.3f",$sremisel); ?></strong></td><td align="right"><strong><?php echo sprintf("%01.3f", $smntl); ?></strong></td></tr> 
                                                <?php
                                                 $sqtel=0;
                                                $smntl=0;
                                                $sremisel=0;
                                                $nbl=$lig_liv['Bonlivraison']['Numero'];
                                                    }
                                                $mnt=$lig_liv['Lignebonlivraison']['Total_HT'];
                                                ?>
                                                <tr>
                                                    <td valign="middle" <?php if($s==1){ ?> style="border-top:none!important" <?php } ?>> <?php  if($s==1){echo date("d/m/Y",strtotime(str_replace('-','/',$lig_liv['Bonlivraison']['Date']))); } ?> </td>
                                                    <td valign="middle" <?php if($s==1){ ?> style="border-top:none!important" <?php } ?>> <?php if($s==1){echo $lig_liv['Bonlivraison']['Ligneclient']['name'] ;  }?>  </td>
                                                    <td valign="middle" <?php if($s==1){ ?> style="border-top:none!important" <?php } ?>> <?php if($s==1){echo $lig_liv['Bonlivraison']['Numero'] ;  }?>  </td>
                                                    <td> <?php echo $lig_liv['Famille']['name'] ; ?> </td>
                                                    <td align="right"> <?php echo $lig_liv['Lignebonlivraison']['Prix'] ; ?> </td>
                                                    <td align="right"> <?php echo $lig_liv['Lignebonlivraison']['Qte'] ; ?> </td>
                                                      <td align="right"> <?php echo sprintf("%01.3f",@$lig_liv['Lignebonlivraison']['Qte']*$lig_liv['Lignebonlivraison']['Remise'] ); ?> </td>
                                                    <td align="right"> <?php echo @$mnt; ?> </td>
                                                </tr> 
                                                <?php
                                                $sqte+=$lig_liv['Lignebonlivraison']['Qte'] ;
                                                $smnt+=$mnt;
                                                 $sqtel+=$lig_liv['Lignebonlivraison']['Qte'] ;
                                                $smntl+=$mnt;
                                                $sremisel+=$lig_liv['Lignebonlivraison']['Qte']*$lig_liv['Lignebonlivraison']['Remise'] ;
                                                 $sremise+=$lig_liv['Lignebonlivraison']['Qte']*$lig_liv['Lignebonlivraison']['Remise'] ;
                                                $s=0;
                                                } ?>
                                               <tr><td colspan="5" align="center" ><strong>Total <?php echo $nbl; ?> </strong></td><td align="right"><strong><?php echo sprintf("%01.3f",$sqtel); ?></strong></td><td align="right"><strong><?php echo sprintf("%01.3f",$sremisel); ?></strong></td><td align="right"><strong><?php echo sprintf("%01.3f", $smntl); ?></strong></td></tr>
                                            </tbody>
                                            <tfoot> 
                                                <tr><td colspan="5">Total</td><td align="right"><?php echo sprintf("%01.3f",$sqte); ?></td><td align="right"><?php echo sprintf("%01.3f",$sremise); ?></td><td align="right"><?php echo sprintf("%01.3f", $smnt); ?></td></tr> 
                                            </tfoot>
                                     </table>
                                    </div>

                                        
                                    </div>
                                 </div>
                                    </div> 
<?php 
}
?>
</div>
 <?php // debug($req_journals); ?>


<script language="JavaScript" type="text/JavaScript">

function flvFPW1(){

var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;

} 
</script>

