<?php

namespace AntonioPrimera\ActivityLog;
use Illuminate\Support\ServiceProvider;

class ActivityLogServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->mergeConfigFrom(__DIR__ . '/../config/database.php', 'database.connections');
	}
	
	public function boot()
	{
		//if ($this->app->runningInConsole()) {
		//	$this->commands([
		//		MyCommand::class,
		//	]);
		//}
	}
}