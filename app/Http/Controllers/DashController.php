<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Firebase\Auth\Token\Exception\InvalidToken;
use App\ProjectConfig;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


	public function projectsShow()
    {

        try {


            //$userid = Auth::user()->getId();
            $sql = 'SELECT * FROM projects order by projectsid desc' ;
            $projects = DB::select($sql);

        }
        catch (\Exception $e) {
            return $e->getMessage();
        }


        return view('projects.index')->with('projects', $projects);
    }


	public function projectsPost(Request $request)
    {

        try {

			//$request->get('edit')

            //$userid = Auth::user()->getId();
           // $sql = "SELECT * FROM projects where projectsid=".$request->get('edit') ;
           // $projects = DB::select($sql);

        }
        catch (\Exception $e) {
            return $e->getMessage();
        }

		return redirect('/project/edit/'.$request->get('edit') )->with('success');
        //return view('projects.edit')->with('projects', $projects);
    }


	public function ProjectEditShow(Request $request,$id)
    {

        try {

			$sql = "SELECT * FROM projects where projectsid=".$id ;
            $projects = DB::select($sql);

		}
		catch (\Exception $e) {
            return $e->getMessage();
        }


		return view('projects.edit')->with('projects', $projects);
    }

	public function ProjectEditPost(Request $request)
    {

        try {
		}
		catch (\Exception $e) {
            return $e->getMessage();
        }


        return "ProjectEditPost";
    }




}
