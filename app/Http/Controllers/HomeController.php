<?php
/**
 * Created by PhpStorm.
 * User: samar.ferchichi
 * Date: 15/07/2019
 * Time: 09:22
 */
namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class HomeController extends BaseController
{
    public function __invoke()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function operations()
    {
        return view('operations');
    }

    public function about()
    {
        return view('about');
    }
}