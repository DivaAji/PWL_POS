<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\UserModel;

class LevelModel extends Model {

    protected $table = 'm_level';        //mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'level_id';

    public function user(): HasMany {
        return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    }
}