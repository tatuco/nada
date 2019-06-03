<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\EventTypeService;

class EventTypeController extends TatucoController
{
    public function __construct()
    {
        parent::__construct(new EventTypeService());
    }
}