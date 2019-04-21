<?php
/**
 * Created by L.
 * Author: wxuns
 * Link: https://www.wxuns.cn
 * Date: 2019/2/27
 * Time: 10:02.
 */
if (!function_exists('Request')) {
    function Request($request)
    {
        if ($request->isGet()) {
            return $request->getQuery()?(object)$request->getQuery():null;
        } else {
            $contents = file_get_contents('php://input');
            if(is_object($data = json_decode($contents))){
                return $data;
            }else{
                parse_str(file_get_contents('php://input'), $data);
                return (object)$data;
            }
        }
    }
}
