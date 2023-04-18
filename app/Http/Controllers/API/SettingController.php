<?php
namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
class SettingController extends Controller
{
     public function getAppPublicPath()
    {
        $publicPath = url('/');

        return $publicPath;
    }

}
