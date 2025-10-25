<!-- #region -->
<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SakshiController;

Route::get('/', function () {
    return view('welcome.index');
});

 Route::get('welcome', 'SakshiController@index');
