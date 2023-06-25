<?php

namespace backend\controllers\en\helpers;

use yii;

class UrlRule implements yii\web\UrlRuleInterface
{

    public  $jklKey = '-YD07LTTJdSVB6oThcC7l60KeZTUXcNA'; //change if necessary

    public function createUrl($manager, $route, $params)
    {
        if ($params!==null) {
            $paramString = serialize($params);
            $paramStringEncoded = $paramString ? base64_encode(Yii::$app->security->encryptByKey($paramString,$this->jklKey,null)) : '';
        }
        return empty($params) ? $route : $route . '?' . $paramStringEncoded;
    }

    public function parseRequest($manager, $request)
    {
        $pathInfo = $request->getPathInfo();
        $queryString=$request->getQueryString();
        if(!empty($queryString)) {
            $params=unserialize(Yii::$app->security->decryptByKey(base64_decode($queryString),$this->jklKey,null));
            foreach ($params as $key => $value) {
                $paramsQuery[$key] = $value;
            }
            return [$pathInfo,$paramsQuery];
        }
        return false;
    }

}