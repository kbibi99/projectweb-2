<?php $test=""; ?>
<script language="JavaScript" type="text/JavaScript">

function flvFPW1(){

var v1=arguments,v2=v1[2].split(","),v3=(v1.length>3)?v1[3]:false,v4=(v1.length>4)?parseInt(v1[4]):0,v5=(v1.length>5)?parseInt(v1[5]):0,v6,v7=0,v8,v9,v10,v11,v12,v13,v14,v15,v16;v11=new Array("width,left,"+v4,"height,top,"+v5);for (i=0;i<v11.length;i++){v12=v11[i].split(",");l_iTarget=parseInt(v12[2]);if (l_iTarget>1||v1[2].indexOf("%")>-1){v13=eval("screen."+v12[0]);for (v6=0;v6<v2.length;v6++){v10=v2[v6].split("=");if (v10[0]==v12[0]){v14=parseInt(v10[1]);if (v10[1].indexOf("%")>-1){v14=(v14/100)*v13;v2[v6]=v12[0]+"="+v14;}}if (v10[0]==v12[1]){v16=parseInt(v10[1]);v15=v6;}}if (l_iTarget==2){v7=(v13-v14)/2;v15=v2.length;}else if (l_iTarget==3){v7=v13-v14-v16;}v2[v15]=v12[1]+"="+v7;}}v8=v2.join(",");v9=window.open(v1[0],v1[1],v8);if (v3){v9.focus();}document.MM_returnValue=false;return v9;

} 
</script> 
<br><input type="hidden" id="page" value="1"/>
<div class="row">    
     <div class="col-md-12" >
                            <div class="panel panel-default"> 
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Recherche'); ?></h3>
                                </div>
                                <div class="panel-body">
        <?php echo $this->Form->create('Mppiecereglement',array('autocomplete' => 'off','class'=>'form-horizontal ls_form')); ?>

            <div class="col-md-6">                  
              	<?php 
		
		echo $this->Form->input('Date_debut',array('label'=>'Date Remise','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
                echo $this->Form->input('Date_deb',array('label'=>'Echéance','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') ); 
       echo $this->Form->input('fournisseur_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
         //,'id'=>'BoncommandeClientId'  
	?></div>
  <div class="col-md-6"> 
       	<?php 
        echo $this->Form->input('Date_fin',array('label'=>'Et','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
        echo $this->Form->input('Date_fn',array('label'=>'Et','div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control datePickerOnly','required data-bv-notempty-message'=>'Champ Obligatoire','type'=>'text') );
       echo $this->Form->input('situation_id',array('div'=>'form-group','between'=>'<div class="col-sm-10">','after'=>'</div>','class'=>'form-control','empty'=>'Veuillez choisir') );
         //,'id'=>'BoncommandeClientId' 
        ?>
  </div>   

                <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">Afficher</button> 
                                                 <a href="<?php echo $this->webroot;?>mpreglements/cheque" class="btn btn-primary">Afficher Tout</a>
                                                 
                                                 <?php  
                  // debug($this->request->data['Mppiecereglement']['date1']);
                                if(@$this->request->data['Mppiecereglement']['fournisseur_id']=="")
                                $this->request->data['Mppiecereglement']['fournisseur_id']="0"; 
                                
                                
                                switch (@$this->request->data['Mppiecereglement']['situation_id']) {
    case "En attente": 
        $this->request->data['Mppiecereglement']['situation_id']="0";
        break;
    case "Preavis":
        $this->request->data['Mppiecereglement']['situation_id']="1";
        break; 
    case "Paye":
        $this->request->data['Mppiecereglement']['situation_id']="2";
        break; 
    case "Impaye":
        $this->request->data['Mppiecereglement']['situation_id']="3";
        break;  
    default:
        $this->request->data['Mppiecereglement']['situation_id']="4";
}
                                
                                if(@$this->request->data['Mppiecereglement']['situation_id']=="")
                                $this->request->data['Mppiecereglement']['situation_id']="0"; // à regler
                                    
                                $date1=@$this->request->data['Mppiecereglement']['Date_debut'];
                                $date2=@$this->request->data['Mppiecereglement']['Date_fin'];
                                    
                                $datea=@$this->request->data['Mppiecereglement']['Date_deb'];
                                $dateb=@$this->request->data['Mppiecereglement']['Date_fn'];
                                
                                if(($date1=="__/__/____")||($date1=="")) $date1="0"; 
                                else $date1 = str_replace('/', '98', $date1); 
                                
                                if(($date2=="__/__/____")||($date2=="")) $date2="0"; 
                                else $date2 = str_replace('/', '98', $date2); 
                                
                                if(($datea=="__/__/____")||($datea=="")) $datea="0"; 
                                else $datea = str_replace('/', '98', $datea); 
                                
                                if(($dateb=="__/__/____")||($dateb=="")) $dateb="0"; 
                                else $dateb = str_replace('/', '98', $dateb); 
                                
                                
                                
                                ?>
                        <a onClick="flvFPW1(wr+'mpreglements/imp_cheque?fournisseur_id='+<?php echo $this->request->data['Mppiecereglement']['fournisseur_id'];?>+'&situation_id='+<?php echo $this->request->data['Mppiecereglement']['situation_id'];?>+'&Date_debut='+<?php echo $date1; ?>+'&Date_fin='+<?php echo $date2; ?>+'&Date_deb='+<?php echo $datea; ?>+'&Date_fn='+<?php echo $dateb; ?>,'UPLOAD','width=800,height=1150,scrollbars=yes',0,2,2);return document.MM_returnValue" href="javascript:;" >
                            <button class='btn btn-primary' > Imprimer <i class='fa fa-print'></i></button></a>

                            
                            

                                         </div>
                                        </div>
 
<?php echo $this->Form->end();?>





</div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><?php echo __('Caisse chéques'); ?></h3>
                                </div>
                                <div class="panel-body">
                                    <div class="ls-editable-table table-responsive ls-table">
                  <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                      <thead>
	<tr>
	         
		<th style="display: none;"><?php echo  'Id' ; ?></th>
		<th><?php echo  'Fournisseur' ; ?></th> 
		<th><?php echo  'Num pièce' ; ?></th> 
		<th><?php echo  'Date Remise' ; ?></th>
		<th><?php echo  'Echéance' ; ?></th>
		<th><?php echo  'Montant' ; ?></th> 
                <th><?php echo  'Banque' ; ?></th>
                <th><?php echo  'Situation' ; ?></th> 
        </tr></thead><tbody>
	<?php //debug($mppiecereglements);die;
         foreach ($mppiecereglements as $k=>$mppiecereglement): ?>
	<tr>
		<td style="display: none;"><?php echo h($mppiecereglement['Mppiecereglement']['id']); ?></td>
		<td><?php echo h($mppiecereglement['Fournisseur']['raison_social']); ?></td> 
		<td><?php echo h($mppiecereglement['Mppiecereglement']['num_piece']); ?></td> 
                <td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($mppiecereglement['Mppiecereglement']['date']))))); ?></td>
                <td><?php echo h(date("d/m/Y",strtotime(str_replace('-','/',($mppiecereglement['Mppiecereglement']['echance']))))); ?></td>
                <td><?php echo h($mppiecereglement['Mppiecereglement']['montant']); ?></td> 
                <td>
                    <select class="select selectbanq" id="banque_id<?php echo $mppiecereglement['Mppiecereglement']['id'];?>" val="<?php echo $mppiecereglement['Mppiecereglement']['id'];?>" >
                    <option value="">Veuillez choisir</option>
                    <?php foreach($banques as $n=>$banq){?>
                    <option value="<?php echo $n ?>" <?php if($n==$mppiecereglement['Mppiecereglement']['banque_id']){?>selected="selected" <?php } ?>><?php echo $banq; ?></option>
                   <?php  }
?></select> 
                </td>
                 <td>
                    <select class="select selectstut" id="stut<?php echo $mppiecereglement['Mppiecereglement']['id'];?>" val="<?php echo $mppiecereglement['Mppiecereglement']['id'];?>" >
                    <option value="En attente" <?php if($mppiecereglement['Mppiecereglement']['situation']=='En attente'){?>selected="selected" <?php } ?>>En attente</option> 
                    <option value="Preavis"    <?php if($mppiecereglement['Mppiecereglement']['situation']=='Preavis'){?>selected="selected" <?php } ?>>Préavis</option>
                    <option value="Paye"       <?php if($mppiecereglement['Mppiecereglement']['situation']=='Paye'){?>selected="selected" <?php } ?>>Payé</option>
                    <option value="Impaye"     <?php if($mppiecereglement['Mppiecereglement']['situation']=='Impaye'){?>selected="selected" <?php } ?>>Impayé</option>
                    </select> 
                </td> 
	</tr>
<?php endforeach; ?>
                          </tbody>
	</table>
	
                                </div></div></div></div></div>	


