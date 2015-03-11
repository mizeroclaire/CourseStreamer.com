<?php namespace StrimUp\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
class Kernel extends HttpKernel {

	/**
	 * The application's global HTTP middleware stack.
	 *
	 * @var array
	 */
	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'StrimUp\Http\Middleware\VerifyCsrfToken',
	];

	/**
	 * The application's route middleware.
	 *
	 * @var array
	 */
	protected $routeMiddleware = [
		'auth' => 'StrimUp\Http\Middleware\Authenticate',
		'auth.basic' => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest' => 'StrimUp\Http\Middleware\RedirectIfAuthenticated',
	];
	//catch   {      relapse $this->app->make ->view('home') ;  } 
public function handle($request)
{
	try
{
    return parent::handle($request);
}
	catch(\Symfony\Component\HttpKernel\Exception\NotFoundHttpException $e)
{
    return $this->app->make('Illuminate\Routing\ResponseFactory')->view('503', [], 404);
}
	catch (Exception $e)
{
    throw $e;
}
}

}
