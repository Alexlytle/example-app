<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|-----------------------------------------------------------------
|  Getting results from the database: SELECT
|-----------------------------------------------------------------
|   value() return the value of a specified collumn 
|   find() gets the id of the user we are trying to find
|   select() works like a for loop
|   distinct() will only get the unique values
|   exists() or doesntExist() returns a true or false value
|  
*/
    // $users = DB::table('users')->get();
    // $users = DB::table('users')->pluck('email');
    // $user = DB::table('users')->where('name', 'Mrs. Odie Metz')->first();
    // $user = DB::table('users')->where('name', 'Mrs. Odie Metz')->value('email');
    // $user = DB::table('users')->find(1);

    // $comments= DB::table('comments')->select('content as mycontent')->get();

    // $comments= DB::table('comments')->select('user_id')->distinct()->get();

    //Math
    // $result = DB::table('comments')->count();
    // $result = DB::table('comments')->max('user_id');
    // $result = DB::table('comments')->sum('user_id');
    // min, avg

    // $result = DB::table('comments')->where('content', 'content')->exists();
    // $result = DB::table('comments')->where('content', 'content')->doesntExist();

    dump($comments);




    // $result = DB::table('rooms')
    //         ->whereBetween('room_size',[1,3]) // whereNotBetween
    //         ->get();

    // $result = DB::table('rooms')
    //         ->whereNotIn('id',[1,2,3]) // whereIn
    //         ->get();

    // whereNull('column')  whereNotNull
    
    // whereDate('created_at', '2020-05-13')
    // whereMonth('created_at', '5')
    // whereDay('created_at', '13')
    // whereYear('created_at', '2020')
    // whereTime('created_at', '=', '12:25:10')
    // whereColumn('column1', '>', 'column2')

    // all of these conditions will be linked with the and keyword 

    // whereColumn([
    //     ['first_name', '=', 'last_name'],
    //     ['updated_at', '>', 'created_at']
    // ]


    /*looking for users where checkin is equal to  2020-05-12 */

    // $result = DB::table('users')
    //        ->whereExists(function ($query) {
    //            $query->select('id')
    //                  ->from('reservation_tables')
    //                  ->whereRaw('reservation_tables.user_id = users.id')
    //                  ->where('check_in', '=', '2021-07-21')
    //                  ->limit(1);
    //        })
    //        ->get();

    // dump($result);
Route::get('/', function () {
    return view('welcome');
});
