<?php

namespace backend\controllers;

use common\models\query\SoNganhQuery;
use Yii;
use common\models\SoNganh;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SoNganhController implements the CRUD actions for SoNganh model.
 */
class SoNganhController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all SoNganh models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SoNganh::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SoNganh model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new SoNganh model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SoNganh();
//thêm mới -> get, vào create, chạy model trong view songanh,
        //dòng 2, thêm mới thì bỏ qua, save -> if submit
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->geom = Yii::$app->db->createCommand("UPDATE so_nganh SET geom = ST_SetSRID(ST_MakePoint($model->lon,$model->lat), 4326) where so_id=$model->so_id;")->queryAll();

            return $this->redirect(['view', 'id' => $model->so_id]);
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SoNganh model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->so_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SoNganh model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionSearch($keyword){
        $query = SoNganh::find();
        if ($keyword){
            $query->byKeyword($keyword);
        }
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('search', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Finds the SoNganh model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SoNganh the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SoNganh::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
