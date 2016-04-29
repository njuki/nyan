<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


class HowitworksController extends Controller {

	public $layout = 'landing';
	
	
	public function actionCustomers() {
		return $this->render ( 'customers' );
	}
	
	public function actionBusiness() {
		return $this->render ( 'business' );
	}
	
	public function actionPricing() {
		return $this->render ( 'pricing' );
	}
	
	public function actionPayments() {
		return $this->render ( 'payments' );
	}
}
	