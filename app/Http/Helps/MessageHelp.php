<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 11/11/2018
 * Time: 10:53
 */

namespace App\Http\Helps;

class MessageHelp
{
    public static function setMessage($msg, $type)
    {
        session()->flash('message', $msg);
        session()->flash('status', $type);
    }

    public static function setErroMessage($msg)
    {
        self::setMessage($msg, 'danger');
    }

    public static function setSuccessMessage($msg)
    {
        self::setMessage($msg, 'success');
    }

    public static function getMessage()
    {
        return view('messages.index');
    }

}