#Instalation

composer require m7vm7v/roles:dev-master

Register the routeMiddleware in app\Kernel.php

protected $routeMiddleware = [
        'admin' => \m7vm7v\Roles\Middleware\AdminMiddleware::class,
        'moderator' => \m7vm7v\Roles\Middleware\ModeratorMiddleware::class,
        'owner' => \m7vm7v\Roles\Middleware\OwnerMiddleware::class,
    ];
	
	
	
#Usage
	
In User.php

use m7vm7v\Roles\Traits\Rolable;
	
Routes in web.php

//Administration
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'RoleControllers\AdminController@dashboard');
});

//Moderation
Route::group(['prefix' => 'moderator'], function () {
    Route::get('/dashboard', 'RoleControllers\ModeratorController@dashboard');
});

//Ownership
Route::group(['prefix' => 'owner'], function () {
    Route::get('/dashboard', 'RoleControllers\OwnerController@dashboard');
});



#Roles

1.Owner
2.Administrator
3.Moderator
	4.User -- default -- costumer 
	
	