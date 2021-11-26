<?php

namespace AntonioPrimera\ActivityLog\Http\Controllers;

use AntonioPrimera\ActivityLog\Support\ActivityLog;
use Illuminate\Routing\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $logs = ActivityLog::get();

        return view('activity-log::index', compact('logs'));
    }
}