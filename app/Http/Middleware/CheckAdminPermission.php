<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdminPermission
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        // Super Admin bypass semua permission
        if ($user && $user->isSuperAdmin()) {
            return $next($request);
        }

        // Untuk admin biasa, cek permission
        if ($user && $user->isAdmin()) {
            // Ambil resource name dari route
            $route = $request->route();
            $resourceClass = $route->getAction('resourceClass') ?? null;

            if ($resourceClass) {
                $resourceName = class_basename($resourceClass);
                
                // Cek apakah user punya akses ke resource ini
                if (!$user->hasPermissionTo($resourceName)) {
                    abort(403, 'Anda tidak memiliki akses ke halaman ini.');
                }
            }
        }

        return $next($request);
    }
}