<?php

class HelpController extends \BaseController
{
	public function getUserAuth()
  {
    return View::make('api.help.user_auth');
  }

  public function getResourceDocs($resource)
  {
    $view_path = 'api.help.'.strtolower($resource).'_resource';
    return view($view_path);
  }
}
