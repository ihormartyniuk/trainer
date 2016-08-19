<?php

namespace tests\codeception\common\unit\models;

use Yii;
use tests\codeception\common\unit\DbTestCase;
use Codeception\Specify;
use common\models\LoginForm;
use tests\codeception\common\fixtures\UserFixture;

/**
 * Login form test
 */
class LoginFormTest extends DbTestCase
{

    use Specify;

    public function setUp()
    {
        parent::setUp();

        Yii::configure(Yii::$app, [
            'components' => [
                'trainer' => [
                    'class' => 'yii\web\User',
                    'identityClass' => 'common\models\User',
                ],
            ],
        ]);
    }

    protected function tearDown()
    {
        Yii::$app->user->logout();
        parent::tearDown();
    }

    public function testLoginNoUser()
    {
        $model = new LoginForm([
            'username' => 'not_existing_username',
            'password' => 'not_existing_password',
        ]);

        $this->specify('trainer should not be able to login, when there is no identity', function () use ($model) {
            expect('model should not login trainer', $model->login())->false();
            expect('trainer should not be logged in', Yii::$app->user->isGuest)->true();
        });
    }

    public function testLoginWrongPassword()
    {
        $model = new LoginForm([
            'username' => 'bayer.hudson',
            'password' => 'wrong_password',
        ]);

        $this->specify('trainer should not be able to login with wrong password', function () use ($model) {
            expect('model should not login trainer', $model->login())->false();
            expect('error message should be set', $model->errors)->hasKey('password');
            expect('trainer should not be logged in', Yii::$app->user->isGuest)->true();
        });
    }

    public function testLoginCorrect()
    {

        $model = new LoginForm([
            'username' => 'bayer.hudson',
            'password' => 'password_0',
        ]);

        $this->specify('trainer should be able to login with correct credentials', function () use ($model) {
            expect('model should login trainer', $model->login())->true();
            expect('error message should not be set', $model->errors)->hasntKey('password');
            expect('trainer should be logged in', Yii::$app->user->isGuest)->false();
        });
    }

    /**
     * @inheritdoc
     */
    public function fixtures()
    {
        return [
            'trainer' => [
                'class' => UserFixture::className(),
                'dataFile' => '@tests/codeception/common/unit/fixtures/data/models/trainer.php'
            ],
        ];
    }
}
