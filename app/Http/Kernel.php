


protected $routeMiddleware = [
    // Other middlewares
    'admin' => \App\Http\Middleware\EnsureUserIsAdmin::class,
];
