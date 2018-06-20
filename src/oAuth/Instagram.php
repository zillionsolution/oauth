<?php

namespace oAuth;

class Instagram {

    /**
     *
     * @var type 
     */
    var $instagram = null;

    /**
     * 
     * @param type $app_key
     * @param type $app_secret
     * @param type $callback
     */
    public function __construct($app_key = null, $app_secret = null, $callback = null) {
        // initializing library
        $this->instagram = new \MetzWeb\Instagram\Instagram(array(
            'apiKey' => $app_key,
            'apiSecret' => $app_secret,
            'apiCallback' => $callback
        ));
    }

    /**
     * 
     * @return type
     */
    public function getLoginUrl() {
        // return the login url
        return $this->instagram->getLoginUrl();
    }

    /**
     * 
     * @return type
     */
    public function authenticate() {
        // getting authentication code
        $code = isset($_GET['code']) ? $_GET['code'] : null;

        // getting auth token
        $data = $this->instagram->getOAuthToken($code);
        echo '<pre>';
        print_r($data);
        exit;

        // return the code
        return isset($data->user) ? $data->user : false;
    }

}
