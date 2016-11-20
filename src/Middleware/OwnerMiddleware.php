<?php

namespace m7vm7v\roles\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class OwnerMiddleware
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
        
        if($this->hasAccess()){
            
            return $next($request);
        }
        
        return redirect('/')->withErrors('No access');
    } 
    
    /**
     * Only the owner have access.
     *
     * 
     * @return boolean
     */
    public function hasAccess(){
        
        return Auth::user() && Auth::user()->isOwner();
    }
}
