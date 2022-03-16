<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap4\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'DRUGS-2';
$this->params['breadcrumbs'][] = $this->title;
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">       
	   <div class="row">
            <div class="col-md-12 offset-md-2 box">
                <div class="viewRender">
				<h1 style="text-align:center"><?= Html::encode($this->title) ?></h1>
				<form class="form-horizontal" action="">           
				<?php foreach($model as $item=>$value ){?>
					<div class="form-group">									
					<label class="control-label col-sm-4"> <?= $value['label'] ?></label>
					<div class="col-sm-4">
						<?php if($value['type'] != 'dropdown'){?>
							<input type= <?= $value['type']  ?> class="form-control drug-<?=$item ?>" name="<?= $value['key'] ?>" requiredkey ="<?= $value['isRequired'] ?>" readonlykey = "<?= $value['isReadonly'] ?>">	
						
						<?php }else{?>
						<select class="form-control drug-<?=$item ?>" name="<?= $value['key'] ?>" requiredkey ="<?= $value['isRequired'] ?>" readonlykey = "<?= $value['isReadonly'] ?>">
							<option value="">Gender</option>
							<?php if($value['items'] != []){
								foreach ($value['items'] as $i=>$v ){?>
							<option value="<?= $v['value'] ?>"><?= $v['text'] ?></option>
						<?php }}?>
						</select>
						<?php }?>
					</div>
					<div class="col-sm-1"><?= $value['unit'] ?></div>
					</div>
				<?php }?>
            
        
    </div>
</div>
</div>
<script src="//code.jquery.com/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
	var count = '<?php echo count($model);?>';
    for(var i=0;i<count;i++)
	{
		requiredkey = $('.drug-'+i).attr('requiredkey');
		readonlykey = $('.drug-'+i).attr('readonlykey');
		if(requiredkey == 1)
		{
			$('.drug-'+i).prop('required',true);
		}
		if(readonlykey == 1)
		{
			$('.drug-'+i).prop('readonly',true);
		}		
	}
});

</script>