<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            if(Request::is('/adherent*'))
            {
                return route('adherent.login');
             }

             elseif(Request::is('/coach*'))
             {
                return route('coach.login');
             }

           elseif(Request::is('/admin*'))
           {
              return route('admin.login');
           }
         else
         {
               return route('/');
           }
        }
    }
}
