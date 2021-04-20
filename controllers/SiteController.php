<?php

namespace app\controllers;

use app\models\Waybill;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\providers;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\db\Query;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
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
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
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
        if($model->load(Yii::$app->request->post()) && $model->validate())
       {
            $waybill = waybill::find()
                ->select(['COUNT(id_providers) AS id_providers'  , 'date_waybill'])
                ->from('waybill')
                ->where(['and',['=', 'date_waybill', $model->date_waybill]])
                ->andWhere(['=', 'amount' , $model->amount])
                ->groupBy([ 'date_waybill'])
                ->all();
        } else
            $waybill = waybill::find()
                ->select(['COUNT(id_providers)', 'provider_price_piece'])
                ->from('waybill')
                ->where(['and',['=', 'date_waybill',  date('Y-m-d')]])
                ->andWhere([ 'amount' => 50])
                ->groupBy('date_waybill')
                ->all();

//        $waybill = waybill::find()->where(['and',['=', 'date_waybill', date('Y-m-d')]])->all();

        return $this->render('zaprosone', [
            'model' => $model,
            'waybill' => $waybill,
        ]);
    }
}

