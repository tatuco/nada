<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Core\TatucoModel;

class Contracts extends TatucoModel
{
    protected $guarded = ['cod_contract'];
}
