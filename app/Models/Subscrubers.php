<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscrubers extends Model
{
    use HasFactory;

    public static function getCount() {
        $url = file_get_contents('https://ok.ru/profile/514677397371');
        preg_match('/Подписчики.*?<span.*?class=["\']navMenuCount["\'].*?>(.*?)<\/span>/', $url, $matches);
        return str_replace('&nbsp;', '', $matches[1]);
    }
}
