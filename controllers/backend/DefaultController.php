<?php
namespace kouosl\duyuru\controllers\backend;

use kouosl\duyuru\models\Duyurular;
use Yii;
/**
 * Default controller for the `duyuru` module
 */
class DefaultController extends \kouosl\base\controllers\backend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
     	$model = new Duyurular();
     	$duyurular = Yii::$app->db->createCommand('SELECT * FROM duyurular order by tarih desc limit 0,20')->queryAll();
         if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                  
                     if ($model->save()) {
                        Yii::$app->session->setFlash('success', 'Başarılı. Duyuru eklendi.');
                        } else {
                            Yii::$app->session->setFlash('error', 'Hata. Bir sorun meydana geldi.');
                        }      
                
            return $this->refresh();
        } else {
            return $this->render('_index', [
            	'duyurular' => $duyurular,
                'model' => $model
   
            ]);
        }
    }
}
