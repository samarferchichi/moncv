<?php
/**
 * Created by PhpStorm.
 * User: samar.ferchichi
 * Date: 15/07/2019
 * Time: 09:22
 */
namespace App\Http\Controllers;

use App\about;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class AboutController extends BaseController
{

    public function index()
    {
        $abouts = about::all();
        dd($abouts);
        return view('about')->with('abouts',$abouts);
    }

    public function create()
    {
      //  $user = User::find(1);
        
    }

    public function store()
    {
        $about = new about();
        $about->nom = request('nom');
        $about->prenom = request('prenom');
        $about->age = request('age');
        $about->post = request('post');
        $about->adresse = request('adresse');
        $about->numtel = request('numtel');
        $about->mobile = request('mobile');
        $about->email = request('email');
        $about->fax = request('fax');
        $about->siteweb = request('siteweb');
        $about->image = request('image');

//        about::create(request()->only([
//            'prenom',
//            'nom',
//        ]));
        
        
        $about->save();
        $abouts = about::all();

        // dd($abouts);
        return view('about', compact('abouts'));

    }



}