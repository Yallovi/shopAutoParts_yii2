<?php


namespace app\controllers;


use app\models\Orders;
use yii\base\Model;
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
            $waybill = [0=>['id_providers'=>null, 'date_waybill'=>null,'date_delivery'=>null]];

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
           $req = [0=>['id_providers'=>null, 'date_waybill'=>null,'provider_price_piece'=>null]];
//            $req = waybill::find()
//                ->select(['id_providers', 'date_waybill', 'provider_price_piece'])
//                ->from('waybill')
//                ->where(['id_detalis' => 1 ])
//                ->all();

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
            $req = [0=>['id_client'=>null, 'name_details'=>null]];
//            $req = Sale::find()
//                ->select(['COUNT(id_client) AS id_client','store.name_details'])
//                ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
//                ->where(['between', 'dateSale', 2021-04-15, 2021-06-10])
//                ->andWhere(['like', 'store.name_details', 'Рулевая'])
//                ->groupBy(['store.name_details'])
//                ->all();

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
    if($model->load(Yii::$app->request->post()) ){
//        if ($model->validate()) {
            $req = Sale::find()
                ->select(['id_detail','store.name_details','AVG(sale.saleAmount) AS saleAmount'])
                ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
                ->where(['between', 'dateSale', $model->dateStart, $model->dateEnd])
                ->andWhere([ 'id_detail' => $model->idDetails])
                ->groupBy(['id_detail','store.name_details'])
                ->asArray()
                ->all();
//            return $this->render('lab', [
//                'model' => $model,
//                'req' => $req,
//            ]);
        } else

        $req = [0=>['id_detail'=>null, 'name_details'=>null, 'saleAmount'=>null]];
//        $req = sale::find()
//            ->select(['id_detail','store.name_details','AVG(sale.saleAmount) AS saleAmount'])
//            ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis' )
//            ->where(['between', 'dateSale', $model->dateStart, $model->dateEnd])
//            ->andWhere([ 'id_detail' => $model->idDetails])
//            ->groupBy(['id_detail','store.name_details'])
//            ->asArray()
//            ->all();

        return $this->render('lab', [
            'model' => $model,
            'req' => $req,
        ]);
    }

    public function actionZaprosten()
    {
        $model = new Store();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $req = Store::find()
                ->select(['SUM(defectAmount) as defectAmount', 'name_details', 'waybill.id_providers'])
                ->leftJoin('waybill', 'store.id_autoDetalis = waybill.id_detalis')
                ->where(['=', 'waybill.date_delivery' , $model->dateStart])
                ->groupBy(['name_details', 'waybill.id_providers'])
                ->asArray()
                ->all();
        } else
            $req = [0=>['defectAmount'=>null, 'name_details'=>null, 'id_providers'=>null]];
//            $req = Store::find()
//                ->select(['SUM(defectAmount)', 'name_details', 'waybill.id_providers'])
//                ->leftJoin('waybill', 'store.id_autoDetalis = waybill.id_detalis')
//                ->where([ 'waybill.date_delivery' => 2007-06-20])
//                ->groupBy(['name_details', 'waybill.id_providers'])
//                ->asArray()
//                ->all();

        return $this->render('zaprosten', ['model' => $model, 'req'=>$req]);
    }
    public function actionZaproseleven(){
        $model = new Sale();
        if($model->load(Yii::$app->request->post()))
        {
            $req = sale::find()
                ->select(['SUM(amount) AS amount' , 'SUM(saleAmount) AS saleAmount'])
                ->where(['=', 'dateSale' , $model->dateStart])
                ->asArray()
                ->all();
        } else
            $req = [0=>['amount'=>null, 'saleAmount'=>null]];
//            $req = sale::find()
//                ->select(['SUM(amount) AS amount', 'SUM(saleAmount) AS saleAmount'])
//                ->where([ 'dateSale' => 2007-06-20])
//                ->asArray()
//                ->all();

        return $this->render('zaproseleven', ['model' => $model, 'req'=>$req]);
    }

    public function actionZaprossixteen()
    {
        $model = new Orders();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $req = orders::find()
                ->select(['COUNT(idOrder) AS idOrder', 'SUM(price) AS price'])
                ->where(['like', 'name_details', $model->nameDetails])
                ->asArray()
                ->all();
        } else
            $req = [0=>['idOrder'=>null, 'price'=>null]];
//            $req = orders::find()
//                ->select(['idOrder AS idOrder', 'price'])
//                ->asArray()
//                ->all();

            return $this->render('zaprossixteen', [
                'model' => $model,
                'req' => $req,
            ]);

    }
    public function actionZaprosfive()
    {
        $model = Sale::find()
            -> select(['store.name_details', 'MAX(amount) AS amount'])
            ->leftJoin('store', 'sale.id_detail = store.id_autoDetalis')
            ->groupBy('store.name_details')
            ->orderBy('MAX(amount) ASC')
            ->limit(2)
            ->asArray()
            ->all();

        $req =  Waybill::find()
            ->select(['providers.name','MIN(provider_price_piece) as provider_price_piece'])
            ->leftJoin('providers', 'waybill.id_providers = providers.id' )
            ->groupBy('providers.name')
            ->orderBy('MIN(provider_price_piece) ASC')
            ->limit(3)
            ->asArray()
            ->all();

        return $this->render('zaprosfive', ['model' => $model, 'req' => $req]);
    }

}