<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Servers extends Model
{
    use SoftDeletes, HasUuids;

    protected $fillable = ['code', 'name'];

    public static function createCode()
    {
        $ymd = date('Ymd');
        $lastServer = self::where('code', 'like', $ymd . '%')->orderBy('code', 'desc')->first();
        if (!$lastServer) {
            return $ymd . '0001';
        }else{
            $lastCode = $lastServer->code;
            $increment = substr($lastCode, -4);
            $increment = (int) $increment + 1;
            $increment = str_pad($increment, 4, '0', STR_PAD_LEFT);
            return $ymd . $increment;
        }
    }
}
