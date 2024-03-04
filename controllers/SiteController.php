<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Car;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $cars = Car::find()->all();
        return $this->render('index', ['cars' => $cars]);
    }

    public function actionAdd(){
        $car = new Car();
        $formData = Yii::$app->request->post();
        if($car->load($formData)){
            if($car->save()){
                Yii::$app->getSession()->setFlash('message','Auto added successfully.');
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','Failed to add.');
            }
        }
        return $this->render('add', ['car' => $car]);
    }

    public function actionUpdate($id){
        $car = Car::findOne($id);
        if($car->load(Yii::$app->request->post()) && $car->save()){
            Yii::$app->getSession()->setFlash('message','Auto updated successfully');
            return $this->redirect(['index', 'id' => $car->id]);
        }
        else{
            return $this->render('update', ['car' => $car]);
        }
        return $this->render('update', ['car' => $car]);
    }

}
