<?php
namespace App\Repositories\LogActivity;

use Illuminate\Http\Request;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Auth;

class LogActivityRepository {

    public function addToLog(Request $request, $subject)
    {
        $log = new LogActivity();
        $log->subject = $subject;
        $log->url = $request->fullUrl();
        $log->method = $request->method();
        $log->ip = $request->ip();
        $log->agent = $request->header('user-agent');
        $log->user_id = Auth::id();
        $log->user_name = Auth::user()->name;
        $log->save();
       return;
    }

    public function getLogActivityList()
    {
        return LogActivity::latest()->get();
    }

}