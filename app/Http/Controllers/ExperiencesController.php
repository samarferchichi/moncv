<?php
/**
 * Created by PhpStorm.
 * User: samar.ferchichi
 * Date: 15/07/2019
 * Time: 09:22
 */
namespace App\Http\Controllers;

use App\about;
use App\Experience;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class ExperiencesController extends BaseController
{
    
    public function store()
    {
        $experience = new Experience();
        $experience->annees = request('annees');
        $experience->date = request('date');
        $experience->position = request('position');
        $experience->place = request('place');
        $experience->post = request('post');
        $experience->description = request('description');

        $experience->save();
dd($experience);
        return view('experiences', compact('experience'));

    }



}