<?php
namespace yii\filters\auth;

use Yii;

/**
 * QueryPostParamAuth is an action filter that supports the authentication based on the access token passed through a post parameter.
 * Name of post parameter holds in backend config  params
 *
 * @author fltmats  <semenihin.maksim@gmail.com>
 * @since 2.0
 */
class QueryPostParamAuth extends AuthMethod
{

    /**
     * @inheritdoc
     */
    public function authenticate($user, $request, $response)
    {
        $accessToken = Yii::$app->request->post('access_token' , null);
        if (is_string($accessToken)) {
            $identity = $user->loginByAccessToken($accessToken, get_class($this));
            if ($identity !== null) {
                return $identity;
            }

        }
        if ($accessToken !== null) {
            $this->handleFailure($response);
        }

        return null;
    }
}