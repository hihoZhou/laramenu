<?php
namespace hihozhou\Laramenu;
use Illuminate\Support\ServiceProvider;

/**
 * LaramenuServiceProvider.php.
 *
 *
 * @author    hihozhou <hihozhou.github.io>
 * @email     hihozhou@gmail.com
 * Time: 16-11-14 下午2:16
 */
class LaramenuServiceProvider extends ServiceProvider
{

    public function boot()
    {

        // Publish database migration
        $this->publishes([
            __DIR__.'/../database/migrations/create_menus_table.php' => database_path('migrations/'.date('Y_m_d_His').'_create_menus_table.php'),
        ], 'migrations');
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        //
    }
}