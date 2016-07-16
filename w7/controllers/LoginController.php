<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\WxAdmin;
//---------------------登录的控制器--------------------------------------------->
class LoginController extends Controller
{
//    public function init()
//    {
//        parent::init();
//        $session = Yii::$app->session;
//        if ($session->has('name')){
//            return $this->redirect(['/index/list']);
//        }
//    }

    public  $enableCsrfValidation = false;

 /*
  *判断登录展示
  */
    public function actionIndex(){
        $session = Yii::$app->session;
        $request= yii::$app->request;
            if(!$request->isPost){
               return $this->renderPartial('login');
            }
        $u_name=$request->post('u_name');
        $u_pwd= md5($request->post('u_pwd'));
        $login=WxAdmin::find()->where(['u_name'=>$u_name,'u_pwd'=>$u_pwd])->asArray()->one();
            if($login){
     //存session
              $session->set('name',$login['u_name']);
               return $this->redirect(['/index/list']);
            }else{
                echo "<script>alert('账号或密码不正确');location.href='index.php?r=login/index'</script>";
            }
    }

}