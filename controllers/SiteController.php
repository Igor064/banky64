<?php

namespace app\controllers;

use app\models\Blacklist;
use app\models\MiniGallery;
use app\models\Room;
use app\models\Services;
use app\models\SmsaeroApiV2;
use app\models\SmsForm;
use Yii;
use yii\filters\AccessControl;
use yii\httpclient\Client;
use yii\web\Controller;
use yii\web\HttpException;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

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
                'only' => ['index', 'about', 'service', 'contact'],
                'rules' => [
                    [
                        'actions' => ['index', 'about', 'service', 'contact'],
                        'allow' => true,
                        'roles' => ['?', '@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'index' => ['get'],
                    'about' => ['get'],
                    'service' => ['get'],
                    'contact' => ['get'],
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
        $rooms = Room::find()->with([
            "photos"
        ])->all();

        $photos = MiniGallery::find()->limit(6)->orderBy([
            "id" => SORT_DESC,
        ])->all();

        return $this->render('index', [
            'rooms' => $rooms,
            'photos' => $photos,
        ]);
    }

    /**
     * Displays service.
     *
     * @return string
     */
    public function actionService()
    {
        $service = Services::find()->all();
        if ($service == null) {
            throw new HttpException(404, "Page not found.");
        }
        return $this->render('service', [
            'service' => $service,
        ]);
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

    public function actionSms()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;
        $form = new SmsForm();
        if ($form->load([
            "SmsForm" => Yii::$app->request->post(),
        ])) {
            if ($form->validate()) {
                $number = preg_replace('/[^0-9]/', '', $form->phone);
                $blacklist = Blacklist::find()->where([
                    "number" => $number,
                ])->exists();
                if ($blacklist) {
                    return [
                        "status" => 1,
                    ];
                }

                $sms = new SmsaeroApiV2("igor.k@bania64.ru", "17iVsTclap6Ts24YTw6toN6B5uTW", "SMS Aero");

                $sms->send(['79878088793'],'Заявка с сайта: +' . $number . ' — ' . $form->name);
            }
        }
        return [
            "status" => 1,
        ];
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
}
