<?php

$route = \Illuminate\Support\Facades\Route::get(
    config('prometheus.metrics_route_path'),
    \Mcoirault\LaravelPrometheusExporter\MetricsController::class . '@getMetrics'
);

if ($name = config('prometheus.metrics_route_name')) {
    $route->name($name);
}

$middleware = config('prometheus.metrics_route_middleware');

if ($middleware) {
    $route->middleware($middleware);
}
