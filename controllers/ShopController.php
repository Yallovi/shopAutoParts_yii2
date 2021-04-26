<?php


namespace app\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\providers;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Waybill;
use app\models\Sale;
use app\models\Store;
use Yii;

class ShopController extends Controller
{
    public function actionInfo()
    {
        return $this->render('info');
    }
    public function actionProviders()
    {
        $providers = new providers();
        $providers = $providers->getAllProviders();
        return $this-> render('providers', compact('providers'));
    }
    public function actionZaprosone()
    {
        $model = new Waybill();
        if($model->load(Yii::$app->request->post()) )
        {
            $waybill = waybill::find()
                ->select(['COUNT(id_providers) AS id_providers'  , 'date_waybill', 'date_delivery'])
                ->from('waybill')
                ->where(['and',['>=', 'date_waybill', $model->date_w],['<=', 'date_delivery', $model->date_d]])
                ->andWhere(['=', 'amount' , $model->amount])
                ->groupBy([ 'date_waybill', 'date_delivery'])
                ->all();
        } else
            $waybill = waybill::find()
                ->select(['COUNT(id_providers)', 'waybill.date_waybill', 'date_delivery'])
                ->from('waybill')
                ->where(['and',['>=', 'waybill.date_waybill',  date('Y-m-d')],['>=', 'date_delivery',  date('Y-m-d')]])
                ->andWhere([ 'amount' => 50])
                ->groupBy(['waybill.date_waybill', 'date_delivery'])
                ->all();

//        $waybill = waybill::find()->where(['and',['=', 'date_waybill', date('Y-m-d')]])->all();

        return $this->render('zaprosone', [
            'model' => $model,
            'waybill' => $waybill,
        ]);

    }
    public function actionRequesttwo()
    {
        $model = new Waybill();
        if($model->load(Yii::$app->request->post()) ){
            $req = waybill::find()
                ->select(['id_providers', 'date_waybill', 'provider_price_piece'])
                ->from('waybill')
                ->where(['id_detalis' => $model->id_detalis ])
                ->all();
        }
        else
            $req = waybill::find()
                ->select(['id_providers', 'date_waybill', 'provider_price_piece'])
                ->from('waybill')
                ->where(['id_detalis' => 1 ])
                ->all();

        return $this->render('requesttwo', [
                'model' => $model,
                'req' => $req,
            ]
        );
    }
    public function actionZaprosthree()
    {
        $model = new Sale();
        if($model->load(Yii::$app->request->post()) ) {
            $req = sale::find()
                ->select(['COUNT(id_client) AS id_client','store.name_details'])
                ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
                ->where(['between', 'dateSale', $model->dateStart, $model->dateEnd])
                ->andWhere(['like', 'store.name_details', $model->nameDetails])
                ->groupBy(['store.name_details'])
                ->asArray()
                ->all();

        }
        else
            $req = Sale::find()
                ->select(['COUNT(id_client) AS id_client','store.name_details'])
                ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
                ->where(['between', 'dateSale', 2021-04-15, 2021-06-10])
                ->andWhere(['like', 'store.name_details', 'Рулевая'])
                ->groupBy(['store.name_details'])
                ->all();

        return $this->render('zaprosthree', [
            'model' => $model,
            'req' => $req,
        ]);
    }
    public function actionZaprosfour(){
        $model = new Store();
        $req = store::find()
            ->select(['amountDetalis', 'cell_number'])
            ->from('store')
            ->all();

        return $this->render('zaprosfour',[
            'model' => $model,
            'req' => $req,
        ]);
    }
    public function actionLab(){

        $model = new Sale();
        $model->load(Yii::$app->request->post());
        if ($model->validate()) {
            $req = Sale::find()
                ->select(['id_detail','store.name_details','AVG(sale.saleAmount) AS saleAmount'])
                ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
                ->where(['between', 'dateSale', $model->dateStart, $model->dateEnd])
                ->andWhere([ 'id_detail' => $model->idDetails])
                ->groupBy(['id_detail','store.name_details'])
                ->asArray()
                ->all();
        }

        $req = sale::find()
            ->select(['id_detail','store.name_details','AVG(sale.saleAmount) AS saleAmount'])
            ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
            ->where(['between', 'dateSale', $model->dateStart, $model->dateEnd])
            ->andWhere([ 'id_detail' => $model->idDetails])
            ->groupBy(['id_detail','store.name_details'])
            ->asArray()
            ->all();

        return $this->render('lab', [
            'model' => $model,
            'req' => $req,
        ]);
    }

}