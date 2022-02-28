<?php

Route::group([
    'middleware' => ['web', 'iptv_locale'],
	],
	function(){

        Route::prefix('gateway')->group(function () {
            Route::get('/list', 'FelipeMateus\IPTVGatewayPayment\Controllers\GatewayController@list')->name('list_gateway');
        });
    }
);
