<?php


namespace App\Helpers;

use App\Models\Users\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class Helper
{

    public final static function GetMobileFormat($mobile)
    {
        if (isset($mobile)) {
            $countMobile = strlen($mobile);
        } else {
            $countMobile = 0;
        }

        if ($countMobile > 9) {
            $trm = $countMobile - 9;
            $mobile = substr($mobile, $trm);
        }

        return $mobile;
    }

    /**
     * @param $prefix
     * @return bool
     */
    final public static function activeLinkRouteName($prefix): bool
    {
        if (is_string($prefix)) {
            if (Request()->route()->getName() == $prefix) {
                return true;
            }
        } elseif (is_array($prefix)) {
            foreach ($prefix as $pre) {
                if (Request()->route()->getName() == $pre) {
                    return true;
                }
            }
        }
        return false;
    }


    /**
     * @param $route
     * @return bool
     */
    final public static function activeRoute($route): bool
    {
        if (Request::route()->getName() == $route) {
            return true;
        }
        return false;
    }

    /**
     * @param int $status
     * @return string
     */
    final public static function getStyleStatus(int $status): string
    {
        if ($status) {
            return '<span class="badge badge-success">' . 'Active' . '</span>';
        } else {
            return '<span class="badge badge-warning">' . 'Inactive' . '</span>';
        }
    }

    /**
     * @param $key string
     * @param $file string
     * @return mixed
     * @version 1.0
     * @uses for get any config or parameters from file /config/param.php
     */

    final public static function param(string $key, $file = 'param')
    {
        $get = $file . '.' . $key;
        return Config::get($get);
    }

    /**
     * @param string $file
     * @return iterable
     */
    final public static function getDataByConfig(string $file): iterable
    {
        return Config::get($file);
    }


    /**
     * @return string[]
     */
    final public static function getStylePointOfSaleStatus(): array
    {
        return [
            '<span class="btn btn-dark btn-circle btn-sm">' . 'Suspended' . '</span>',
            '<span class="btn btn-success btn-circle btn-sm">' . 'Active' . '</span>',
            '<span class="btn btn-warning btn-circle btn-sm">' . 'UnActive' . '</span>',
            '<span class="btn btn-danger btn-circle btn-sm">' . 'Blocked' . '</span>'
        ];

    }

    /**
     * @return bool
     */
    final public static function isAdmin(): bool
    {
        return Auth::user()->role == User::$ADMIN;
    }

}
