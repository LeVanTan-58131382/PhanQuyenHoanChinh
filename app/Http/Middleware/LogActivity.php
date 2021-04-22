<?php

namespace App\Http\Middleware;

use Closure;
use App\Services\LogActivity\LogActivityService;

class LogActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    private $logActivityService;

    public function __construct(LogActivityService $logActivityService)
    {
        $this->logActivityService = $logActivityService;
    }

    public function handle($request, Closure $next, $action)
    {
        // $logActivity = new LogActivityController();
        $this->logActivityService->addToLog($request, "Người dùng truy cập vào liên kết ".$action);

        //return $next($request);

        return $next($request);

        //return dd($request ."xong");
    }
}
