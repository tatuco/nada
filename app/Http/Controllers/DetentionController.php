<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDetentionRequest;
use Illuminate\Http\Request;
use App\Core\TatucoController;
use App\Http\Services\DetentionService;

class DetentionController extends TatucoController
{
    protected $validateStore = [
        'name' => 'required|string|max:20',
        'description' => 'string',
        'type_id' => 'required|integer',
        'event_name' => 'required|string|min:5',
        'event_description' => 'string',
        'event_date' => 'required|date_format:Y-m-d|after_or_equal:today',
        'event_out_of_time' => 'boolean',
        'event_is_critical' => 'boolean',
        'event_is_pivote' => 'required|boolean'
    ];

    public function __construct()
    {
        parent::__construct(new DetentionService());
    }
}
