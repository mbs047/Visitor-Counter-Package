<?php

namespace Devhereco\Visitor\Http\Middleware;

use Devhereco\Visitor\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;
use Stevebauman\Location\Facades\Location;

class VisitorCounter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $query = Visitor::where('ip_address', $request->ip())->first();

        if (!$query) {
            $agent = new Agent();
            $location = Location::get(request()->ip());

            Visitor::create([
                'user_id'           => Auth::user()->id ?? Null,
                'ip_address'        => request()->ip(),
                'user_agent'        => $agent->setUserAgent(),
                'browser'           => $agent->browser(),
                'browser_version'   => $agent->version($agent->browser()),
                'platform'          => $agent->platform(),
                'platform_version'  => $agent->version($agent->platform()),
                'device'            => $agent->device(),
                'location'          => ($location->countryName ?? Null) . ', ' . ($location->regionName ?? Null) . ', ' . ($location->cityName ?? Null),
            ]);
        }

        return $next($request);
    }
}
