<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\User;

class DataController extends Controller
{

		public function projectShow()
        {
			$sql = "SELECT * FROM zuzamenn_db.projects where status=1";
			$userslists = DB::select($sql);

			$jsonRS=  response()->json($userslists);
			$jsonRS = json_encode($jsonRS);
			$jsonRS = '{"status": "200","data" : '.$jsonRS."}";
			$jsonRS = json_decode($jsonRS,true);


			return  response()->json($jsonRS);

        }

		public function projectDetailsShow(Request $request)
        {

			$id = $request->get('id') ;
			//return $id;


			$sql = "SELECT * FROM zuzamenn_db.projects where projectsid=".$id." and status=1";
			$userslists = DB::select($sql);

			$jsonRS=  response()->json($userslists);
			$jsonRS = json_encode($jsonRS);
			$jsonRS = '{"status": "200","data" : '.$jsonRS."}";
			$jsonRS = json_decode($jsonRS,true);


			return  response()->json($jsonRS);

        }

		


		public function open()
        {
            $data = "This data is open and can be accessed without the client being authenticated";
            return response()->json(compact('data'),200);

        }

        public function closed()
        {
            $data = "Only authorized users can see this";
            return response()->json(compact('data'),200);
        }




}
