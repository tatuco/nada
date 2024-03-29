<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class File extends TatucoModel
{
    protected $guarded = ['id'];

    protected $fillable = [
        "name",
        "directory",
        "type_id",
        "detention_id"
    ];
}
