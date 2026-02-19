<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PerformanceLogger
{
    /**
     * Handle an incoming request and log performance metrics.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Record start time
        $startTime = microtime(true);
        $startMemory = memory_get_usage();
        
        // Process the request
        $response = $next($request);
        
        // Calculate metrics
        $executionTime = (microtime(true) - $startTime) * 1000; // Convert to milliseconds
        $memoryUsed = (memory_get_usage() - $startMemory) / 1024 / 1024; // Convert to MB
        
        // Log to Laravel log file
        Log::info('🚀 [PERFORMANCE] Request processed', [
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'execution_time' => round($executionTime, 2) . 'ms',
            'memory_used' => round($memoryUsed, 2) . 'MB',
            'status_code' => $response->status(),
            'ip' => $request->ip(),
        ]);
        
        // Add performance headers for debugging
        $response->headers->set('X-Execution-Time', round($executionTime, 2) . 'ms');
        $response->headers->set('X-Memory-Used', round($memoryUsed, 2) . 'MB');
        
        // Log slow requests (>1000ms)
        if ($executionTime > 1000) {
            Log::warning('⚠️ [SLOW REQUEST] Request took more than 1 second', [
                'url' => $request->fullUrl(),
                'execution_time' => round($executionTime, 2) . 'ms',
            ]);
        }
        
        return $response;
    }
}
