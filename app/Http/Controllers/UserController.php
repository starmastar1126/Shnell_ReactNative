<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\supplier;
use App\factory;
use App\User;
use App\manufacture;
use App\manufacture_shipment;
use App\wholesaler;

class UserController extends Controller
{
	//Login
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }

        return response()->json(compact('token'));
    }

	//register 
    public function register(Request $request)
    {
		try{

			$validator = Validator::make($request->all(), [
			      'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
				  'password' => 'required|string|min:6',
				   'firstname' => 'required|string|max:255',
				]);
			
			if($validator->fails()){
                return response()->json($validator->errors()->toJson(), 400);
			}


			$email = $request->input('email');
			$password = $request->input('password');
			$phone = $request->input('phone');
			$age = $request->input('age');
			$firstname = $request->input('firstname');
			$lastname = $request->input('lastname');


			$user = user::create([
				   'firstname' => $firstname,
				   'lastname' => $lastname,
				   'email' => $email,
				   'password' => $password, //Hash::make("pa55w0rdUpdateIs6765ghhgh##12!"),
				  'phone' => $phone,
				  'age' =>$age
			   ]);

			$token = JWTAuth::fromUser($user);

			return response()->json(compact('user','token'),201);

		}
		catch (\Exception $e) {
			return $e->getMessage();
		}
    }

	//public function getAuthenticatedUser()
	//    {
	//            try {


	//               // $by =  JWTAuth::parseToken()->authenticate();


	//                    if (! $user = JWTAuth::parseToken()->authenticate()) {
	//                            return response()->json(['user_not_found'], 404);
	//                    }

	//            } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

	//                    return response()->json(['token_expired'], $e->getStatusCode());

	//            } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

	//                    return response()->json(['token_invalid'], $e->getStatusCode());

	//            } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

	//                    return response()->json(['token_absent'], $e->getStatusCode());

	//            }

	//            return response()->json(compact('user'));
	//    }
	
	//public function getDashboardHome()
	//{
	//    try {
	//        if (! $user = JWTAuth::parseToken()->authenticate()) {
	//            return response()->json(['user_not_found'], 404);
	//        }
	//    }
	//    catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
	//        return response()->json(['token_expired'], $e->getStatusCode());
	//    }
	//    catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
	//        return response()->json(['token_invalid'], $e->getStatusCode());
	//    }
	//    catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
	//        return response()->json(['token_absent'], $e->getStatusCode());
	//    }

	//    $UserRole = Auth::user()->getUserRole();
	//    $userid = Auth::user()->getId();


	//    if ( $UserRole!=null)
	//    {
	//        switch ($UserRole) {
	//            case 1:

	//                $sql = 'select * from supplier_data where userid=' . $userid . " ";
	//                $supplierDatas = DB::select($sql);

	//                return view('backend.home')->with('UserData',$UserData)->with('supplierDatas',$supplierDatas)->with('UserRole',$UserRole)->with('ManuData',$ManuData)->with('WholeDatas',$WholeDatas);

	//                break;
	//            case 2:

	//                $sql = 'select * from factory_data where userid=' . $userid . " ";
	//                $UserData = DB::select($sql);

	//                $sql = 'select * from manufacture_data where userid=' . $userid . " ";
	//                $ManuData = DB::select($sql);

	//                return view('backend.home')->with('UserData',$UserData)->with('supplierDatas',$supplierDatas)->with('UserRole',$UserRole)->with('ManuData',$ManuData)->with('WholeDatas',$WholeDatas);

	//                break;

	//            case 4:

	//                $sql = 'select * from factory_data where userid=' . $userid . " ";
	//                $UserData = DB::select($sql);

	//                $sql = 'select * from manufacture_data where userid=' . $userid . " ";
	//                $ManuData = DB::select($sql);

	//                $sql = "select * from wholesaler";
	//                $WholeDatas = DB::select($sql);

	//                return view('backend.home')->with('UserData',$UserData)->with('supplierDatas',$supplierDatas)->with('UserRole',$UserRole)->with('ManuData',$ManuData)->with('WholeDatas',$WholeDatas);

	//                break;
	//            case 7:
	//            case 6:

	//                $sql = "select * from supplier_data " ;
	//                $supplierDatas = DB::select($sql);


	//                $sql = "select * from factory_data";
	//                $factoryData = DB::select($sql);


	//                $sql = "SELECT * FROM manufacture_data" ;
	//                $manufactureData = DB::select($sql);

	//                $sql = "SELECT * FROM wholesaler";
	//                $WholesalerData = DB::select($sql);

	//                 $dados1 = json_encode(array($supplierDatas));
	//                 $dados2 = json_encode(array($factoryData));
	//                 $dados3 = json_encode(array($manufactureData));
	//                 $dados4 = json_encode(array($WholesalerData));
	//                 $UserRoleJson = json_encode(array($UserRole));

	//                 $merger= json_encode(array_merge(json_decode($dados1, true),json_decode($dados2, true),json_decode($dados3, true),json_decode($dados4, true),json_decode($UserRoleJson, true)));


	//                return $merger;

	//                break;

	//        }
	//    }



	//    return $UserRole;

	//}

	//public function userhistory(Request $request)
	//{

	//    try {
	//        if (! $user = JWTAuth::parseToken()->authenticate()) {
	//            return response()->json(['user_not_found'], 404);
	//        }
	//    }
	//    catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {
	//        return response()->json(['token_expired'], $e->getStatusCode());
	//    }
	//    catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
	//        return response()->json(['token_invalid'], $e->getStatusCode());
	//    }
	//    catch (Tymon\JWTAuth\Exceptions\JWTException $e) {
	//        return response()->json(['token_absent'], $e->getStatusCode());
	//    }

	//    $userRole = Auth::user()->getUserRole();
	//    $userid = Auth::user()->getId();


	//    if ( $userRole=="7")
	//    {
	//        $sql = "select * from supplier_data where userid=".$userid;
	//        $supplierDatas = DB::select($sql);

	//        $sql = "SELECT * FROM hairkosh_db1.factory_data INNER JOIN hairkosh_db1.users ON hairkosh_db1.factory_data.recieved_by = hairkosh_db1.users.userid where users.userid=".$userid;
	//        $FactoryData = DB::select($sql);

	//        $sql = "SELECT * FROM hairkosh_db1.manufacture_data INNER JOIN hairkosh_db1.users ON hairkosh_db1.manufacture_data.userid = hairkosh_db1.users.userid where users.userid=".$userid;
	//        $ManuData = DB::select($sql);

	//        $sql = "select * from wholesaler where userid=".$userid;
	//        $WholeDatas = DB::select($sql);

	//        $dados1 = json_encode(array($supplierDatas));
	//        $dados2 = json_encode(array($FactoryData));
	//        $dados3 = json_encode(array($ManuData));
	//        $dados4 = json_encode(array($WholeDatas));

	//        $merger= json_encode(array_merge(json_decode($dados1, true),json_decode($dados2, true),json_decode($dados3, true),json_decode($dados4, true)));


	//        return $merger;

	//    }

	//}

	//public function ManufactureShip(Request $request)
	//{
	//    $makeErrorBag = true;
	//    $makeErrorWig= true;
	//    $factoryName="";

	//    try {

	//        $userid = Auth::user()->getId();
	//        $factoryName = Auth::user()->getFactory();
	//        //return $request->all();

	//        //////////////////////////////////////
	//        //Check Code Wig Code
	//        //////////////////////////////////////

	//        $BagCodeData = DB::select("SELECT * FROM code_data where code='".$request->input('boxcode')."' and factoryName='".$factoryName."' and is_boxcode=1 and used_by_userid=0");

	//        if (empty($BagCodeData)) {
	//            $makeErrorWig = true;

	//            $data = array("status"=>"error", "description"=>"Box Code error");
	//            return  response()->json($data);

	//        }else
	//        {
	//            $makeErrorWig = false;

	//            $code_data_id=0;
	//            foreach ($BagCodeData as $data) {
	//                $code_data_id =  $data->code_data_id ;
	//            }

	//        }
	//        //////////////////////////////////////

	//        $userid = Auth::user()->getId();
	//        $manufacture = new manufacture_shipment;
	//        $manufacture -> userid = $userid;
	//        $manufacture -> boxcode = $request->input('boxcode');
	//        $manufacture -> scannedboxes = $request->input('scannedboxes');


	//        $manufacture->save();

	//    }
	//    catch (\Exception $e) {
	//        return $e->getMessage();
	//    }


	//    return  "{\"status\": \"Record Created\" }";

	//}

	//public function supplier_show()
	//    {


	//        //Artisan::call('clear-cache');
	//        //Artisan::call('dump-autoload');

	//        //return "sdsd";



	//            try {


	//                //$by =  JWTAuth::parseToken()->authenticate();


	//                if (! $user = JWTAuth::parseToken()->authenticate()) {
	//                        return response()->json(['user_not_found'], 404);
	//                }

	//            }
	//            catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

	//                    return response()->json(['token_expired'], $e->getStatusCode());

	//            } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

	//                    return response()->json(['token_invalid'], $e->getStatusCode());

	//            } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

	//                    return response()->json(['token_absent'], $e->getStatusCode());

	//            }


	//            $data = DB::select("SELECT * FROM hairkosh_db1.supplier_data;");


	//            //return  response()->json($data);


	//            $jsonRS = json_encode($data);



	//            $jsonRS = '{"status": "200","data" : '.$jsonRS."}";



	//            $jsonRS = json_decode($jsonRS,true);


	//            return  response()->json($jsonRS);

	//    }

	//public function dna_save(Request $request)
	//{
	//    try {


	//        //$by =  JWTAuth::parseToken()->authenticate();


	//        if (! $user = JWTAuth::parseToken()->authenticate()) {
	//            return response()->json(['user_not_found'], 404);
	//        }

	//    }
	//    catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

	//        return response()->json(['token_expired'], $e->getStatusCode());

	//    }
	//    catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

	//        return response()->json(['token_invalid'], $e->getStatusCode());

	//    }
	//    catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

	//        return response()->json(['token_absent'], $e->getStatusCode());

	//    }


	//    $NewfileNameVideo="";
	//    $videofile = $request->file('video');
	//    if ( $videofile!=null)
	//    {
	//        //Move Uploaded File
	//        $NewfileNameVideo = str_random(5).$videofile->getClientOriginalName();
	//        $path=$request->file('video')->move(public_path("uploads/"), $NewfileNameVideo);
	//    }

	//    $sql = "SELECT * FROM hairkosh_db1.factory_data where box_code ='".$request->input('bagcode')."'";
	//    $FacData = DB::select($sql);


	//    foreach ($FacData as $data) {
	//        $myfactory_id =  $data->factory_id ;
	//    }



	//    //$userid = Auth::user()->getId();


	//    $factory = factory::find( $myfactory_id );
	//    $factory -> dna_taken = 1;
	//    $factory -> dna_supervisior_name = $request->input('supervisior_name');
	//    $factory -> dna_sample_code = $request->input('dna_sample_1');
	//    $factory -> dna_sampleDate = $request->input('idate');
	//    if ( $NewfileNameVideo!="")
	//    {
	//        $factory -> dna_ImageURL = $NewfileNameVideo;
	//    }

	//    $factory->save();
	//    return  "{\"status\": \"Record Created\" }";

	//}


}

