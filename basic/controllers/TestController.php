<?php
/**
 * Created by PhpStorm.
 * User: XS-021
 * Date: 2017/11/6
 * Time: 17:50
 */

namespace app\controllers;


use yii\web\Controller;
use Yii;
class TestController extends Controller
{
    public function actionTest(){

            $mail = Yii::$app->mailer->compose()
                ->setFrom(['phper@253.com'=>'上海创蓝文化'])
                ->setTo('839368663@qq.com')
                ->setSubject('邮件发送配置')
                ->setHtmlBody("<br>Yii中文网教程真好！www.yii-china.com")    //发布可以带html标签的文本
                ->send();
            if($mail)
                echo 'success';
            else
                echo 'fail';
        }
}