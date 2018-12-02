<?php

namespace app\controllers;

use app\models\UserIdentity;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\SignupFormCabinet;
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
        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
            return $this->redirect(['site/cabinet']);
        }

        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new UserIdentity();
            $user->email = $model->email;
            $user->phone = $model->phone;
            $user->auth_key = '1';
            $user->access_token = '1';
            if($user->save()){
                $user->setUpUser($user->phone); // id of user
                Yii::$app->user->login($user);
                return $this->redirect(['site/cabinet']);
            }
        }
        /*if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }*/

//        $model->phone = '';
        return $this->render('index', [
            'model' => $model,
        ]);

//        return $this->render('index');
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

    public function actionCabinet()
    {
        $this->layout = 'basic';

        $model = new SignupFormCabinet();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new UserIdentity();
            $user->age = $model->age;
            $user->phone = $model->phone;
            if($user->save()){
                $user->setUpUser($user->phone); // id of user
                Yii::$app->user->login($user);
                return $this->redirect(['site/cabinet']);
            }
        }
        /*if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }*/

//        $model->phone = '';
        return $this->render('cabinet', [
            'model' => $model,
        ]);

//        return $this->render('cabinet');
    }

    public function actionSignup(){
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/cabinet']);
        }
        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new UserIdentity();
            $user->email = $model->email;
            $user->phone = $model->phone;
            $user->auth_key = '1';
            $user->access_token = '1';
            if($user->save()){
                $user->setUpUser($user->phone); // id of user
                Yii::$app->user->login($user);
                return $this->redirect(['site/cabinet']);
            }
        }

        return $this->render('signup', compact('model'));
    }
}
