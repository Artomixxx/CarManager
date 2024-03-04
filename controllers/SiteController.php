<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\Car;

class SiteController extends Controller
{

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // Fetch all cars from the database and render index view with the fetched cars.
        $cars = Car::find()->all();
        return $this->render('index', ['cars' => $cars]);
    }

    /**
     * Adds a new car.
     *
     * @return string
     */
    public function actionAdd()
    {
        // Create a new instance of the Car model and fetch form data from the request.
        $car = new Car();
        // Validate if the request is a POST request
        if(Yii::$app->request->isPost){
            // Load the form data into the Car model and save it to the database.
            if($car->load(Yii::$app->request->post()) && $car->save()){
                Yii::$app->getSession()->setFlash('message','Auto added successfully.');
                return $this->redirect(['index']);
            }
            else{
                Yii::$app->getSession()->setFlash('message','Failed to add.');
            }
        }
        // Render add view with the car model.
        return $this->render('add', ['car' => $car]);
    }

    /**
     * Updates an existing car.
     *
     * @param integer $id
     * @return string
     */

    public function actionUpdate($id)
    {
        // Find the car model by its ID.
        $car = Car::findOne($id);
        //Validate if the request is a POST request
        if(Yii::$app->request->isPost){
            //Update the car model and save it to the database.
            if($car->load(Yii::$app->request->post()) && $car->save()){
                Yii::$app->getSession()->setFlash('message','Auto updated successfully');
                return $this->redirect(['index', 'id' => $car->id]);
            }
        }
        // Render update view with the car model.
        return $this->render('update', ['car' => $car]);
    }

}
