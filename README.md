# yii2-filters-auth-QueryPostParamAuth
QueryPostParamAuth is an action filter that supports the authentication based on the access token passed through a post parameter.

controller:
use yii\filters\auth\QueryPostParamAuth\QueryPostParamAuth;

'authenticator' => [
        'class' => QueryPostParamAuth::className(),
        'only' => ['online' , 'info'],
    ],


config: 
    'extensions' => array_merge(
        require($vendorDir . '/yiisoft/extensions.php'),
        [
            'ftlmars/yii2/filters/auth/QueryPostParamAuth' => [
                'name' => 'ftlmars/yii2/filters/auth/QueryPostParamAuth',
                'version' => '9999999-dev',
                'alias' => [
                    '@yii/filters/auth/QueryPostParamAuth' => $vendorDir.'/ftlmars/yii2-filters-auth-QueryPostParamAuth/',
                ],
            ],
        ]

    ),
