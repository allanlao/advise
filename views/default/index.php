<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use app\models\Curriculum;
use app\models\Student;
?>
<?php 
  $currentCurriculum = 0;

?>

<?= Html::beginForm(['default/index'], 'get', ['class' => 'form-inline well']) ?>
<div class="form-group form-group-sm">
  <label for="id_number">Id Number</label>
  <?= Html::dropDownList('id_number', $id_number, ArrayHelper::map(Student::find()->orderby('LastName')->all(), 'StudID', 'fullname'),['class'=>'form-control']); ?>

</div>

<div class="form-group form-group-sm">
  <label for="curr_id">Curriculum</label>
  <?= Html::dropDownList('curr_id', $curr_id, ArrayHelper::map(Curriculum::find()->all(), 'CurrID', 'fullDescription'),['class'=>'form-control']); ?>

</div>


<button type="submit" class="btn btn-default btn-sm" name="btnLoad">Load</button>
<?php echo Html::endForm(); ?>


<?php
  if (is_null($result)){
  	return;
  }
?>


<table>
   <th>
    <td>Subject ID</td>
    <td>Description</td>
    <td>Units</td>
   </th>
  <?php
    $semester = null;
    $subject = null;
    $units = null;
   foreach ($result as $row) {
     foreach ($row as $value) {
          $semester = $row['Semester'];
          $CreditedAs = $row['SubjectID'];
          $units = $row['UnitsEarned'];
        }   
  ?>
   <tr>

    <td><?=$semester; ?></td>  
    <td><?=$CreditedAs; ?></td>      
    <td><?=$units; ?></td>
   

   </tr>
 <?php  } 
?>
</table>




