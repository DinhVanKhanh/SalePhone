<?php
namespace App\Support;

trait getData{
    public function scopeGetId($query, $request){
        return $query->where('id', $request)
            ->skip(0)->take(5)
            ->get();
    }
}
