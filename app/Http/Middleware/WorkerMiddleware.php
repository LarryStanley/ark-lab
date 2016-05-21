<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Auth;

class WorkerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $userGroup = DB::table("user_group")->where("group_name", "worker")->where("user_id", Auth::user()->id)->first();
        if (empty($userGroup)) {
            return redirect("/");
        }

        return $next($request);
    }
}
