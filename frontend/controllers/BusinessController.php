<?php

namespace frontend\controllers;

use Yii;
use app\models\Businesses;
use app\models\Users;
use app\models\Worktypes;
use app\models\Businessworktypes;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BusinessController implements the CRUD actions for Businesses model.
 */
class BusinessController extends Controller {
	
	public $layout = 'landing';
	public function behaviors() {
		return [ 
				'verbs' => [ 
						'class' => VerbFilter::className (),
						'actions' => [ 
								'delete' => [ 
										'post' 
								] 
						] 
				] 
		];
	}
	
	/**
	 * Lists all Businesses models.
	 * 
	 * @return mixed
	 */
	public function actionIndex() {
		$dataProvider = new ActiveDataProvider ( [ 
				'query' => Businesses::find () 
		] );
		
		return $this->render ( 'index', [ 
				'dataProvider' => $dataProvider 
		] );
	}
	
	/**
	 * Displays a single Businesses model.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionView($id) {
		return $this->render ( 'view', [ 
				'model' => $this->findModel ( $id ) 
		] );
	}
	
	public function actionSuccess($id) {
		return $this->render ( 'success', [
				'model' => $this->findModel ( $id )
		] );
	}
	
	
	/**
	 * Creates a new Businesses model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @return mixed
	 */
	public function actionCreate() {
		$model = new Businesses ();
		$user = new Users ();
		$bWorks = new Businessworktypes ();
		$no_employees_list = Businesses::$NO_OF_EMPLOYEES;
		
		if ($model->load ( Yii::$app->request->post () )) {
			$model->status = $model::$ACTIVE;
			if ($model->validate ()) {
				// Do the required updates in a transaction
				$connection = \Yii::$app->db;
				$transaction = $connection->beginTransaction ();
				try {
					if(! $model->save()) {
						return $this->render ( 'create', [
								'model' => $model,
								'user' => $user,
								'bWorks' => $bWorks,
								'no_employees_list' => $no_employees_list
						] );
					}
					$user->load ( Yii::$app->request->post());
					$user->businessID = $model->id;
					$user->isActive = 1;
					$user->password = md5($user->password);
					if (! $user->save ()) {
						$transaction->rollBack ();
						return $this->render ( 'create', [ 
								'model' => $model,
								'user' => $user,
								'bWorks' => $bWorks,
								'no_employees_list' => $no_employees_list 
						] );
					}
					if (isset ( $_POST ['Businessworktypes'] ) && is_array ( $_POST ['Businessworktypes']['workTypeID'] )) {
						foreach ( $_POST ['Businessworktypes']['workTypeID'] as $key => $value ) {
							$bwork = new Businessworktypes ();
							$bwork->workTypeID = $value;
							$bwork->businessID = $model->id;
							
							if (! $bwork->save ()) {
								$transaction->rollBack ();
								return $this->render ( 'create', [ 
										'model' => $model,
										'user' => $user,
										'bWorks' => $bwork,
										'no_employees_list' => $no_employees_list 
								] );
							}
						}
					}
					
					$transaction->commit ();
					return $this->redirect ( [
							'view',
							'id' => $model->id
					] );
				} catch ( Exception $e ) {
					$transaction->rollBack ();
				}
			} else {
			return $this->render ( 'create', [ 
					'model' => $model,
					'user' => $user,
					'bWorks' => $bWorks,
					'no_employees_list' => $no_employees_list 
			] );
		}
		} else {
			return $this->render ( 'create', [ 
					'model' => $model,
					'user' => $user,
					'bWorks' => $bWorks,
					'no_employees_list' => $no_employees_list 
			] );
		}
	}
	
	/**
	 * Updates an existing Businesses model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionUpdate($id) {
		$model = $this->findModel ( $id );
		
		if ($model->load ( Yii::$app->request->post () ) && $model->save ()) {
			return $this->redirect ( [ 
					'view',
					'id' => $model->id 
			] );
		} else {
			return $this->render ( 'update', [ 
					'model' => $model 
			] );
		}
	}
	
	/**
	 * Deletes an existing Businesses model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 * 
	 * @param integer $id        	
	 * @return mixed
	 */
	public function actionDelete($id) {
		$this->findModel ( $id )->delete ();
		
		return $this->redirect ( [ 
				'index' 
		] );
	}
	
	/**
	 * Finds the Businesses model based on its primary key value.
	 * If the model is not found, a 404 HTTP exception will be thrown.
	 * 
	 * @param integer $id        	
	 * @return Businesses the loaded model
	 * @throws NotFoundHttpException if the model cannot be found
	 */
	protected function findModel($id) {
		if (($model = Businesses::findOne ( $id )) !== null) {
			return $model;
		} else {
			throw new NotFoundHttpException ( 'The requested page does not exist.' );
		}
	}
}
