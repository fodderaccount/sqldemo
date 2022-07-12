<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DBController extends Controller
{
    //
    /**

     * Show a list of all of the application's users.

     *

     * @return Response

     */

    public function index()

    {

        $users = DB::table('users')->get();

        return view('listview.index', ['users' => $users]);
    }
}
