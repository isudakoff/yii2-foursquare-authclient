<?php
/**
 * Project: yii2-foursquare-authclient
 * User: isudakoff
 * Date: 04.06.17
 * Time: 17:50
 */

namespace isudakoff\authclient;

use yii\authclient\OAuth2;

class Foursquare extends OAuth2
{
    /**
     * @inheritdoc
     */
    public $authUrl = 'https://foursquare.com/oauth2/authenticate';
    /**
     * @inheritdoc
     */
    public $tokenUrl = 'https://foursquare.com/oauth2/access_token';
    /**
     * @inheritdoc
     */
    public $apiBaseUrl = 'https://api.foursquare.com/v2';

    /**
     * @inheritdoc
     */
    protected function initUserAttributes()
    {
        return $this->api('users/self', 'GET');
    }

    /**
     * @inheritdoc
     */
    public function applyAccessTokenToRequest($request, $accessToken)
    {
        $data = $request->getData();
        $data['oauth_token'] = $accessToken->getToken();
        $request->setData($data);
    }

    /**
     * @inheritdoc
     */
    protected function defaultName()
    {
        return 'foursquare';
    }

    /**
     * @inheritdoc
     */
    protected function defaultTitle()
    {
        return 'Foursquare';
    }
}