<?php

namespace app\controllers;
use app\models\Studentdata;
use yii;

class DefaultController extends \yii\web\Controller
{
  public function actionIndex()
  {


   $result = null;
   $curr_id = 0;
   $id_number=null;

   if (isset($_GET['btnLoad'])){
    $id_number = $_GET['id_number'];
    $curr_id = $_GET['curr_id'];


     /*   	 //get student data
    $json_url = "http://localhost/api/checklist.php?id=".$id_number;
    $json = file_get_contents($json_url);
  
    $data = json_decode($json, TRUE);
    
    $result = [];
    $result = $data[0];
     foreach ($data as $key => $value) {
      array_push($result,$value);
     }
   
*/
     //get checklist


     //get subjects
     $sql = "select * from curriculumsubject X
     left join (select A.CreditedAs, A.UnitsEarned, B.SubjectID as XSubject  from checklist A
       join equivalent_subjects B on A.SubjectID = B.ESubjectID
       where A.StudID = :id_number and A.UnitsEarned > 0) Y on (X.SubjectID = Y.XSubject) 
       where X.CurrID = :curr_id ";
  //remove and CreditedAs is null

$connection = Yii::$app->getDb();
$command = $connection->createCommand($sql, [':id_number' => $id_number, ':curr_id'=>$curr_id]);

$result = $command->queryAll();


 


}

return $this->render('index',['id_number'=>$id_number,'result'=>$result, 'curr_id' => $curr_id]);

}

}
