<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\vdmtbill;
use App\Models\vdmtcustomer;
use App\Models\vdmtproduct;
use App\Models\vdmttypeproduct;
use App\Models\vdmtuser;

class vdmtTotalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $vdmttotalTypeProducts = vdmttypeproduct::count(); 
        $vdmttotalProducts = vdmtproduct::count(); 
        $vdmtotalCustomers = vdmtcustomer::count(); 
        $vdmttotalBills = vdmtbill::count(); 
        view()->share('vdmttotalTypeProducts', $vdmttotalTypeProducts); 
        view()->share('vdmttotalProducts', $vdmttotalProducts); 
        view()->share('vdmtotalCustomers', $vdmtotalCustomers); 
        view()->share('vdmttotalBills', $vdmttotalBills); 
        return $next($request);
    }
}
