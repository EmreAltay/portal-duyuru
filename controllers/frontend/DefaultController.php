<?php
namespace kouosl\duyuru\controllers\frontend;
use Yii;		

/**
 * Default controller for the `duyuru` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        $duyurular = Yii::$app->db->createCommand('SELECT * FROM duyurular order by tarih desc limit 0,20')->queryAll();
        return $this->render('_index',['duyurular' => $duyurular]);
    }
}
