<?php

namespace AntonioPrimera\ActivityLog\Http\Controllers;

use AntonioPrimera\ActivityLog\Models\Log;
use Illuminate\Contracts\View\View;
use Illuminate\Routing\Controller;

class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return View
     */
    public function index(): View
    {
        $logs = Log::get();

        return view('activity-log::index', compact('logs'));
    }
}