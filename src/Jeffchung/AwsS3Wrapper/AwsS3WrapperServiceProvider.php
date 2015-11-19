<?php namespace Jeffchung\AwsS3Wrapper;

use Illuminate\Support\ServiceProvider;


class AwsS3WrapperServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**e
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('jeff-chung/awss3wrapper');
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('AwsS3Wrapper', 'Jeffchung\AwsS3Wrapper\Facades\AwsS3Wrapper');
        });
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{

		//dependency injection registrating
        //singleton on this injection
        $this->app['awss3wrapper'] = $this->app->share(function($app)
        {
            return new AwsS3Wrapper;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('awss3wrapper');
	}

}
