<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'judul_setting', 'isi_setting', 'updater',
    ];
}
