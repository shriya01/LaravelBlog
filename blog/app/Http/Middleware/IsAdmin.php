<?php

namespace App\Http\Middleware;
/**
 * Admin Class
 *
 * @package
 * @subpackage           Admin
 * @category             MiddleWare
 * @DateOfCreation       17 August 2018
 * @DateOfDeprecated
 * @ShortDescription     This class is used to check user is admin or not
 * @LongDescription
 */
use Closure;

class IsAdmin
{
  /**
     * @DateOfCreation     17 August 2018
     * @DateOfDeprecated
     * @ShortDescription   This function handle an incoming request.
     * @LongDescription
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
          //checks the user type is admin or not
        if (auth()->user()->user_type_id == 1) {
        return $next($request);
    }
    // redirect with error if user is not admin
        return redirect('welcome')->with('error', 'You are not permitted');
    }
}

