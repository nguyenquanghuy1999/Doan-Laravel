<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return api_success(
            array('data' => Users::all())
        );
    }

    public function show($id)
    {
        $user = Users::findOrFail($id);
        return api_success(
            array('data' => $user)
        );
    }
}
?>