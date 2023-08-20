<?php

namespace App\Http\Middleware;

use App\Models\Examinee;
use Closure;
use Illuminate\Http\Request;

class ReportOwnerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // @TODO: Fix pls
        return $next($request);
        if ($request->user()->hasRole('root')) {
            return $next($request);
        }

        $examinee = Examinee::findOrFail($request->route()->parameters['id']);

        if ($request->user()->hasRole('sub_admin') && $request->user()->id != $examinee->created_by) {
            abort(403);
        }

        /**
         * If user is admin, get sub admins and check if exmainee's admin in array
         */
        if ($request->user()->hasRole('admin')) {
            $allowed = $request->user()->subAdmins->pluck('id')->toArray();
            $allowed[] = $request->user()->id;

            if (!in_array($examinee->admin_id, $allowed)) {
                abort(403);
            }
        }

        return $next($request);
    }
}
