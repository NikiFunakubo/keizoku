<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'project_desription',
        'target_days',
        'achievement_days',
    ];

    public function user(): BelongsTo
    {
        //「関連するテーブル名の単数形_id」になっている時、外部キー名を省略しても紐付けできる。
        return $this->belongsTo('App\User');
    }
}
