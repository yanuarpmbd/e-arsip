<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Arsip extends Model
{
    use HasFactory;

    public function scopeArsip($query){
        if(Auth::user()->hasRole('admin_kabkota')){
            return $query->where('kabkota_id', Auth::user()->kabkota_id);
        }
        elseif(Auth::user()->hasRole('admin_skpd')) {
            return $query->where('sektor_id', Auth::user()->sektor_id);
        }
        else{
            return $query;
        }
    }
}
