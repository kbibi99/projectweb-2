<script language="JavaScript" type="text/JavaScript">
function flvFPW1(){
var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;
}
</script>

<br><input type="hidden" id="page" value="1"/>

 <div class="row"><?php echo $this->Form->create('Paie',array('autocomplete' => 'off','class'=>'form-horizontal ls_form','id'=>'defaultForm','data-bv-message'=>'This value is not valid','data-bv-feedbackicons-valid'=>'fa fa-check','data-bv-feedbackicons-invalid'=>'fa fa-bug','data-bv-feedbackicons-validating'=>'fa fa-refresh')); 
?>
                        <div class="col-md-12" >
                            <div class="panel panel-default" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recherche</h3>
                                    
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-6">                  
                                        <?php 
                                       // $fn='aa';
               echo $this->Form->input('moi_id',array('empty'=>'Veuillez Choisir','value'=>$moi_id,'label'=>'Mois','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );      
               echo $this->Form->input('sexe',array('empty'=>'Veuillez Choisir','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );
               ?></div> 
                                    <div class="col-md-6">  
                                           <?php
                echo $this->Form->input('annee_id',array('empty'=>'Veuillez Choisir','value'=>$annee_id,'div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control') );

                                    ?>           

                                    
                                </div>
                                    <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
                                <input type="submit" value="Afficher" name="data[Paie][afficher]" id="afficher" class="btn btn-primary"/>
                                <a onClick="flvFPW1(wr+'Paies/imprimeretatpaiesalaire?annee_id=<?php echo @$annee_id;?>&moi_id=<?php echo @$moi_id;?>&&sexe=<?php echo @$sexe;?>','UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" ><button class="btn btn-primary">Imprimer</button> </a>
                                
                            </div>
                        </div> 
                                    <?php echo $this->Form->end();?>
                            </div>
                                
                        </div>
                            
                    </div>
 </div>




<div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Etat de Paie Salaire'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="">
                      <thead>
	<tr>     
               
		<td align="center"><?php echo ('Personnel'); ?></td>
	        <td align="center"><?php echo ('Salaire de Base'); ?></td>
                <td align="center"><?php echo ('Nbr J / H'); ?></td>
		<td align="center"><?php echo ('Montant J/H'); ?></td>
                <td align="center"><?php echo ('Nbr J/H Dim'); ?></td>
	        <td align="center"><?php echo ('Montant J/H Dim'); ?></td>
                <td align="center"><?php echo ('Acompte'); ?></td>
                <td align="center"><?php echo ('Salaire'); ?></td>
		<td align="center"><?php echo ('Montant a Payer'); ?></td>
        </tr></thead><tbody>
                          
	<?php 
        if(!empty($paies)){
        foreach ($paies as $paie): 
            $nbrjh=0;$Mjh=0;$nbrjhD=0;$MD=0;$style="";
            if($paie['Personnel']['Type']=="cadre"){
               $nbrjh=$paie['Paie']['Nbjour'];
               $Mjh=sprintf("%01.3f",round($paie['Paie']['Montantjour']));
               $nbrjhD=$paie['Paie']['Nbjourdimanche'];
               $MD=sprintf("%01.3f",round($paie['Paie']['Montantjdtaux']));
               $paie['Paie']['Totalpaie']=round($paie['Paie']['Totalpaie']);
               $style='style="background-color:#A2D4D2;"';
            }
            if($paie['Personnel']['Type']=="ouvrier"){
               $nbrjh=$paie['Paie']['Nbheur'];
               $Mjh=sprintf("%01.3f",$paie['Paie']['Montantheur']);
               $nbrjhD=$paie['Paie']['Nbheurdimanche'];
               $MD=sprintf("%01.3f",$paie['Paie']['Montanthdtaux']);
               $style='style="background-color:#E2B9BB;"';
            }
         //  $paie['Paie']['Montantheur']= sprintf("%01.3f",round($paie['Paie']['Montantheur']));
             ?>
        <tr>
            <td style="display: none"><?php echo h($paie['Paie']['id']); ?></td>
                <td align="center" <?php echo $style ?> ><?php echo $this->Html->link($paie['Personnel']['name'], array('controller' => 'personnels', 'action' => 'view', $paie['Personnel']['id'])); ?></td>
                <td align="center" <?php echo $style ?> ><?php echo sprintf("%01.3f",$paie['Paie']['Salairebase']); ?></td>
                <td align="center" <?php echo $style ?> ><?php echo $nbrjh ?></td>
                <td align="center" <?php echo $style ?> ><?php echo $Mjh ?></td>
                <td align="center" <?php echo $style ?> ><?php echo $nbrjhD ?></td>
                <td align="center" <?php echo $style ?> ><?php echo $MD ?></td>
                <td align="center" <?php echo $style ?> ><?php echo sprintf("%01.3f",$paie['Paie']['acompte']);?></td>
                <td align="center" <?php echo $style ?> ><?php echo sprintf("%01.3f",$paie['Paie']['Totalpaie']);?></td>
                <td align="center" <?php echo $style ?> ><?php echo sprintf("%01.3f",$paie['Paie']['Donne']);?></td>
               
	</tr>
<?php endforeach; 
        }?>
                          </tbody>
                          
                         
	</table>
	
                                </div></div></div></div></div>	


