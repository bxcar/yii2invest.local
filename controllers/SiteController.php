<?php

namespace app\controllers;

use app\models\SignupFormCabinetcardbinding;
use app\models\UserIdentity;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\SignupFormCabinet;
use app\models\SignupFormCabinetpassport;
use app\models\SignupFormRequest;
use app\models\ContactForm;
use yii\helpers\Url;

use yii\web\UploadedFile;
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
            return $this->redirect(['site/cabinet']);
        }

        $model = new SignupForm();
        if($model->load(\Yii::$app->request->post()) && $model->validate()){
            $user = new UserIdentity();
            $user->email = $model->email;
            $user->phone = $model->phone;
            $user->term = $model->term;
            $user->sum = $model->sum;
            $user->auth_key = '0';
            $user->access_token = '0';
            $user->age = '0';
            $user->malefemale = '0';
            $user->status = '0';
            $user->familymembers = '0';
            $user->children = '0';
            $user->education = '0';
            $user->passport1 = '0';
            $user->passport2 = '0';
            if($user->save()){
                $user->setUpUser($user->phone); // id of user
                Yii::$app->user->login($user);

                $cookies = Yii::$app->response->cookies;
                $cookies->add(new \yii\web\Cookie([
                    'name' => 'user_phone',
                    'value' => $model->phone,
                ]));

                return $this->redirect(['site/cabinet']);
            }
        }

        return $this->render('index', [
            'model' => $model,
        ]);
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

        $cookies = Yii::$app->request->cookies;
        $user_phone = $cookies->getValue('user_phone');

        if($model->load(\Yii::$app->request->post())  && $model->validate()){
            \Yii::$app->db->createCommand("UPDATE users SET age=:age, malefemale=:malefemale, status=:status, familymembers=:familymembers, children=:children, education=:education WHERE phone=:user_phone")
                ->bindValue(':user_phone', $user_phone)
                ->bindValue(':age', $model->age)
                ->bindValue(':malefemale', $model->malefemale)
                ->bindValue(':status', $model->status)
                ->bindValue(':familymembers', $model->familymembers)
                ->bindValue(':children', $model->children)
                ->bindValue(':education', $model->education)
                ->execute();

            return $this->redirect(['site/cabinetcreditreport']);
        }

        return $this->render('cabinet', [
            'model' => $model,
        ]);

    }

    public function actionCabinetcreditreport()
    {
        $this->layout = 'basic';

        return $this->render('cabinetcreditreport');
    }

    public function actionCabinetcardbinding()
    {
        $this->layout = 'basic';

        $model = new SignupFormCabinetcardbinding();

        $cookies = Yii::$app->request->cookies;
        $user_phone = $cookies->getValue('user_phone');

        if($model->load(\Yii::$app->request->post())  && $model->validate()){
            \Yii::$app->db->createCommand("UPDATE users SET card_number=:card_number, card_month=:card_month, card_year=:card_year, card_holder_name=:card_holder_name, card_cvv=:card_cvv WHERE phone=:user_phone")
                ->bindValue(':user_phone', $user_phone)
                ->bindValue(':card_number', $model->card_number)
                ->bindValue(':card_month', $model->card_month)
                ->bindValue(':card_year', $model->card_year)
                ->bindValue(':card_holder_name', $model->card_holder_name)
                ->bindValue(':card_cvv', $model->card_cvv)
                ->execute();

            return $this->redirect(['site/cabinetpassport']);
        }

        return $this->render('cabinetcardbinding', [
            'model' => $model,
        ]);
    }

    public function actionCabinetpassport()
    {
        $this->layout = 'basic';

        $model = new SignupFormCabinetpassport();

        $cookies = Yii::$app->request->cookies;
        $user_phone = $cookies->getValue('user_phone');

        if(Yii::$app->request->post())
        {
            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->imageFile2 = UploadedFile::getInstance($model, 'imageFile2');
            if ($model->validate()) {
                $path = Yii::$app->params['pathUploads'] . 'uploads/';
                $model->imageFile->saveAs( $path . $model->imageFile);
                $model->imageFile2->saveAs( $path . $model->imageFile2);

                \Yii::$app->db->createCommand("UPDATE users SET passport1=:passport1, passport2=:passport2 WHERE phone=:user_phone")
                    ->bindValue(':user_phone', $user_phone)
                    ->bindValue(':passport1', '/web/' . $path . $model->imageFile)
                    ->bindValue(':passport2', '/web/' . $path . $model->imageFile2)
                    ->execute();
            }
        }

        return $this->render('cabinetpassport', ['model' => $model]);

    }

    public function actionCabinetrequest()
    {
        $this->layout = 'basic';

        $model = new SignupFormRequest();

        $cookies = Yii::$app->request->cookies;
        $user_phone = $cookies->getValue('user_phone');

        if($model->load(\Yii::$app->request->post())  && $model->validate()) {
            \Yii::$app->db->createCommand("UPDATE users SET term=:term, sum=:sum WHERE phone=:user_phone")
                ->bindValue(':user_phone', $user_phone)
                ->bindValue(':term', $model->term)
                ->bindValue(':sum', $model->sum)
                ->execute();
        }

        $row_term = (new \yii\db\Query())
            ->select(['term'])
            ->from('users')
            ->where(['phone' => $user_phone])
            ->limit(1)
            ->all();

        $row_sum = (new \yii\db\Query())
            ->select(['sum'])
            ->from('users')
            ->where(['phone' => $user_phone])
            ->limit(1)
            ->all();

        return $this->render('cabinetrequest', compact('row_term', 'row_sum', 'model'));

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
            $user->auth_key = '0';
            $user->access_token = '0';
            $user->age = '0';
            $user->malefemale = '0';
            $user->status = '0';
            $user->familymembers = '0';
            $user->children = '0';
            $user->education = '0';
            $user->passport1 = '0';
            $user->passport2 = '0';
            if($user->save()){
                $user->setUpUser($user->phone);
                Yii::$app->user->login($user);
                return $this->redirect(['site/cabinet']);
            }
        }

        return $this->render('signup', compact('model'));
    }
}
