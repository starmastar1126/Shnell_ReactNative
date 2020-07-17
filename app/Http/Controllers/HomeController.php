<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Firebase\Auth\Token\Exception\InvalidToken;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('auth');
    }
	*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

	public function ProjectEditPost(Request $request)
    {
		  try {




			  //return view('projects.edit');


			  $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
			  $firebase = (new Factory)
			  ->withServiceAccount($serviceAccount)
			  ->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
			  ->create();

			  $db = $firebase->getDatabase();

			 // $createPost = $db->getReference('projects')->getvalue();

			  $createPost    =  $db->getReference('projects')
			                // order the reference's children by the values in the field 'height'
			                ->orderByChild('name')
			                // limits the result to the first 10 children (in this case: the 10 shortest persons)
			                // values for 'height')
			                ->equalTo($request->get('projectedit'))
			                ->limitToFirst(1)
			                ->getvalue();



			  $returndata = response()->json($createPost);
			  $projects = $returndata->getData();

			  //$projects =  response()->json($returndata);

			  return view('projects.edit')->with('projects',$projects ) ;



		  }
		  catch (\Exception $e) {
			  return $e->getMessage();
		  }
    }


	public function projectsShow()
    {
		  try {


			  //$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
			  //$firebase = (new Factory)
			  //->withServiceAccount($serviceAccount)
			  //->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
			  //->create();

			  //$database   =   $firebase->getDatabase();
			  //$createPost    =   $database
			  //->getReference('projects')
			  //->push([
			  //   'name' => 'Start up 2',
			  //   'amountneeded'=> '1000',
			  //   'website' => 'https://app.domain.tld',
			  //   'status' => '1'

			  //]);





			$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
			$firebase = (new Factory)
			->withServiceAccount($serviceAccount)
			->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
			->create();

			$db = $firebase->getDatabase();

			$createPost = $db->getReference('projects')->getvalue();

			$returndata = response()->json($createPost);
			$returndata2 = $returndata->getData();

			return view('projects.index')->with('projects',$returndata2 ) ;

		  }
		  catch (\Exception $e) {
			  return $e->getMessage();
		  }
    }




	 public function home()
    {
        return view('home');
    }

	 public function logout()
    {
		  try {
			  Auth::logout();
				//return view('index');

		  }
		  catch (\Exception $e) {
			  return $e->getMessage();
		  }
    }


	 public function users_create()
    {
        return view('users.create');
    }

	 public function users_create_post(Request $request)
	 {
			$email= $request->get('email');
			$password=$request->get('password');

		//https://firebase-php.readthedocs.io/en/latest/user-management.html
		//1. Createuser

			//$auth = (new Factory)
			//->withServiceAccount(__DIR__.'/FirebaseKey.json')
			//->createAuth();

			//$userProperties = [
			//    'email' => $email,
			//    'emailVerified' => false,
			//    'password' => $password,
			//    'displayName' => 'John Doe',
			//    'disabled' => false,
			//];

			//$createdUser = $auth->createUser($userProperties);

			//dd($createdUser);


		//2. Createuser detais
		//https://firebase-php.readthedocs.io/en/latest/realtime-database.html#set-replace-values

			//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
			//$firebase = (new Factory)
			//->withServiceAccount($serviceAccount)
			//->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
			//->create();

			//$database   =   $firebase->getDatabase();
			//$createPost    =   $database
			//->getReference('users')
			//->push([
			//     'id' => '54545454',
			//    'referalcode'=> '34343',
			//   'email'=> 'xxx@me.com',
			//   'website' => 'https://app.domain.tld'

			//]);

			//echo '<pre>';
			//print_r($createPost->getvalue());
			//echo '</pre>';


			//3 retreive data by id

			//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
			//$firebase = (new Factory)
			//->withServiceAccount($serviceAccount)
			//->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
			//->create();

			//$db   =   $firebase->getDatabase();

			//$createPost    =  $db->getReference('users')
			//                // order the reference's children by the values in the field 'height'
			//                ->orderByChild('id')
			//                // limits the result to the first 10 children (in this case: the 10 shortest persons)
			//                // values for 'height')
			//                ->equalTo('54545454')
			//                ->limitToFirst(1)
			//                ->getSnapshot();

			//return response()->json($createPost->getvalue());



		//4. Create referal codes
		//https://firebase-php.readthedocs.io/en/latest/realtime-database.html#set-replace-values

		$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
		$firebase = (new Factory)
		->withServiceAccount($serviceAccount)
		->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
		->create();

		$database   =   $firebase->getDatabase();
		$createPost    =   $database
		->getReference('startups')
		->push([
		   'name' => 'Start up 1',
		   'amount needed'=> '34343',
		   'website' => 'https://app.domain.tld'

		]);

		echo '<pre>';
		print_r($createPost->getvalue());
		echo '</pre>';



		// return view('users.create');
	 }

	public function indexPost(Request $request)
    {

		//$request->get('email');
		//$request->get('password');


		//$idTokenString =  $request->get('custId');

		//if ( $idTokenString !=null)
		//{

		//    $serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
		//    $firebase = (new Factory)
		//    ->withServiceAccount($serviceAccount)
		//    ->withDatabaseUri('https://shnell.firebaseio.com/')
		//    ->createAuth();


		//    //$auth = $factory->createAuth();

		//    try {
		//        $verifiedIdToken = $firebase->verifyIdToken($idTokenString);
		//        $uid = $verifiedIdToken->getClaim('sub');
		//        //$user = $firebase->getUser($uid);
		//        //	dd($user);

		//        session(['idTokenString' => $idTokenString ]);
		//        session(['uid' => $uid ]);

		//        //$value = session('key', 'default');

		//        if ($uid!="")
		//        {
		//            return view('home');
		//        }


		//    }
		//    catch (\InvalidArgumentException $e) {
		//        echo 'The token could not be parsed: '.$e->getMessage();
		//    }
		//    catch (InvalidToken $e) {
		//        echo 'The token is invalid: '.$e->getMessage();
		//    }

		//}

       // return view('index');
    }


}
