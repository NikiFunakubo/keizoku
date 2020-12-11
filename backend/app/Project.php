<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function user(): BelongsTo
    {
        //「関連するテーブル名の単数形_id」になっている時、外部キー名を省略しても紐付けできる。
        return $this->belongsTo('App\User');
    }
}
