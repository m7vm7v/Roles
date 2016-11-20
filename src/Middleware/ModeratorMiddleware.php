<?php

namespace m7vm7v\Roles\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ModeratorMiddleware
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
     * Only moderator, admin or the owner have access.
     *
     * 
     * @return boolean
     */
    public function hasAccess(){
        
        return Auth::user() && ( Auth::user()->isModerator()  ||  Auth::user()->isAdmin() || Auth::user()->isOwner() );
    }
}
