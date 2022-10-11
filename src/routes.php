<?php

Route::group([
    'middleware' => ['web', 'iptv_locale'],
	],
	function(){

        Route::prefix('gateway')->group(function () {
            Route::get('/list', 'Tschope\IPTVGatewayPayment\Controllers\GatewayController@list')->name('list_gateway');
            Route::get('/active/{gateway}', 'Tschope\IPTVGatewayPayment\Controllers\GatewayController@active')->name('active_gateway');
            Route::get('/inactive/{gateway}', 'Tschope\IPTVGatewayPayment\Controllers\GatewayController@inactive')->name('inactive_gateway');

        });

        Route::prefix('tax')->group(function () {
            Route::get('/list', 'Tschope\IPTVGatewayPayment\Controllers\TaxVatController@list')->name('list_tax');
            Route::get('/add', 'Tschope\IPTVGatewayPayment\Controllers\TaxVatController@new')->name('add_tax');
            Route::post('/add', 'Tschope\IPTVGatewayPayment\Controllers\TaxVatController@create')->name('add_tax');
            Route::get('/{id}', 'Tschope\IPTVGatewayPayment\Controllers\TaxVatController@show')->name('show_tax');
            Route::post('/{id}', 'Tschope\IPTVGatewayPayment\Controllers\TaxVatController@update');
            Route::get('/{id}/del', 'Tschope\IPTVGatewayPayment\Controllers\TaxVatController@delete')->name('delete_tax');
        });

    }
);
