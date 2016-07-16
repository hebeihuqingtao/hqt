<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\WxNum;
//---------------------主页展示的控制器--------------------------------------------->
 class IndexController extends Controller{

//构造函数
    public function init(){

        parent::init();
        $session = Yii::$app->session;
        $view = Yii::$app->getView();
        $view->params['name'] =$session->get('name');
        if (!$session->has('name')){
          return $this->redirect(['/login/index']);
        }
    }
    public  $enableCsrfValidation = false;
//进行首页的展示
    public $layout='left';
    public function actionList(){

        return $this->render('list');

    }
//退出
    public function actionLogout(){
        $session = Yii::$app->session;
        $session->remove('name');
        return $this->redirect(['/login/index']);
    }

//微信的添加页面展示
    public function actionAdd(){

        return $this->render('form_validation');
    }
//接值进行添加入库
    public function actionAddinfo(){
        $connection = Yii::$app->db;
        $request = Yii::$app->request;
    //生成url地址
    //生成token
        $num= $request->post();
        $num['w_token']= uniqid();
        $num['w_url']=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/index.php?token='.$num['w_token'];
        $re=$connection->createCommand()->insert('wx_num',$num)->execute();
        if($re){
            $this->redirect(['/index/numlist']);
        }else{
            echo "<script>alert('添加失败');location.href='index.php?r=index/add'</script>";
        }

    }

//列表展示

    public function actionNumlist(){
        $query = WxNum::find()->all();
        return $this->render('numlist', [
            'countries' => $query,
        ]);

    }
//删除
    public function actionDel_w(){

        $request = Yii::$app->request;
        $id= $request->get('w_id');       //接受要删除的id
        if(WxNum::deleteAll(['w_id'=>$id])){
          echo 1;
        }else{
          echo 2;
        }
    }
//微信号修改前的查询
     public function actionGetone(){
         $request = Yii::$app->request;
         $id= $request->get('w_id');       //接受要删除的id
         $info=WxNum::findOne(['w_id'=>$id])->oldAttributes;
         return $this->render('update',
                             ['info'=>$info]
             );
     }
//真正的接值修改入库
     public function actionUpdateok(){
       //  echo 1;die;
         $request = Yii::$app->request;
         $w_token=uniqid();
         $w_id = $request->post('w_id');
         $wx_num = WxNum::findOne($w_id);
         $wx_num->w_name=$request->post('w_name');
         $wx_num->w_appid=$request->post('w_appid');
         $wx_num->w_serveid=$request->post('w_serveid');
         $wx_num->w_token=$w_token;
         $wx_num->w_url=$_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/index.php?token='.$w_token;
         $wx_num->save();
         return $this->redirect(['/index/numlist']);
     }





}