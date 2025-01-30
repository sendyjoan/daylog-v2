<?php

namespace App\Models;

use App\Models\Servers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Module extends Model
{
    use HasUuids, SoftDeletes;

    protected $fillable = ['name', 'server_id'];

    public static function createCode()
    {
        $ymd = date('Ymd');
        $lastServer = self::withTrashed()->where('code', 'like', $ymd . '%')->orderBy('code', 'desc')->first();
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

    public function server()
    {
        return $this->belongsTo(Servers::class);
    }
}
