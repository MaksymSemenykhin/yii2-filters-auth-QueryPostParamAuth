# yii2-filters-auth-QueryPostParamAuth
QueryPostParamAuth is an action filter that supports the authentication based on the access token passed through a post parameter.

how to :

use yii\filters\auth\QueryPostParamAuth\QueryPostParamAuth;

'authenticator' => [
        'class' => QueryPostParamAuth::className(),
        'only' => ['online' , 'info'],
    ],

