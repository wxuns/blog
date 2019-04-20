<?php
/**
 * Created by PhpStorm.
 * Author: wxuns <wxuns@wxuns.cn>
 * Link: http://wxuns.cn
 * Date: 2019/4/19
 * Time: 22:14
 */

namespace Tool;


class Session
{
    protected static $instance;

    public static function start()
    {
        session_save_path(APPLICATION_PATH.'/storage/framework/session');
        \Yaf\Session::getInstance()->start();
    }

    /**
     * set session
     * @param string $name
     * @param mixed $value
     */
    public static function set($name , $value)
    {
        return \Yaf\Session::getInstance()->set($name,$value);
    }

    /**
     * get session
     * @param string $name
     * @param mixed $value
     */
    public static function get(string $name = null)
    {
        return \Yaf\Session::getInstance()->get($name);
    }

    /**
     * has session
     * @param string $name
     * @param mixed $value
     */
    public static function has(string $name)
    {
        return \Yaf\Session::getInstance()->has($name);
    }

    /**
     * del session
     * @param string $name
     * @param mixed $value
     */
    public static function del(string $name)
    {
        return \Yaf\Session::getInstance()->del($name);
    }
}
