<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CanAnyMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $permission)
    {
        if ($request->user() !== null && $request->user()->can($permission)) {
            return $next($request); // allow
        }
        toastr()->error("Als u denkt dat dit een fout is neem dan <u class='text-primary'><a class='text-primary' href='" . route('home') . "'>contact op met de website administrator.</a></ul>", 'Geen toestemming om deze pagina te bezoeken.',['escapeHtml' => false]);
        return abort('403'); // deny
        // return redirect('/home');
    }
}
