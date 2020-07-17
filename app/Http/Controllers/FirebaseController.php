<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Firebase\Auth\Token\Exception\InvalidToken;


class FirebaseController extends Controller
{
    //https://programmingfields.com/integrate-laravel-6-application-with-firebase/

	public function index()
	{


		//let creds = await firebase.auth().signInWithEmailAndPassword('craig.michael.morris@gmail.com', 'testing')
		//console.log({ creds })
		//let token = await creds.user.getIdToken()
		//console.log({ token })
		//let headers = { Authorization: 'Bearer ' + token }
		//let me = await axios.get('/api/me', { headers })
		//console.log({ me })






		//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
		//$firebase = (new Factory)
		//->withServiceAccount($serviceAccount)
		//->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
		//->create();

		//$database   =   $firebase->getDatabase();
		//$createPost    =   $database->getReference('blog/posts')->getvalue();
		//return response()->json($createPost);


		//$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/FirebaseKey.json');
		//$firebase = (new Factory)
		//->withServiceAccount($serviceAccount)
		//->withDatabaseUri('https://zuzamen-6400b.firebaseio.com/')
		//->create();


		//$database = (new Factory())->createDatabase();

		////$snapshot = $reference->getSnapshot();
		//$reference = $database->getSnapshot();

		//$createPost    =   $database
		//->getReference('blog/posts')
		//->push([
		//    'title' =>  'Laravel 6',
		//    'body'  =>  'This is really a cool database that is managed in real time.'

		//]);

		//echo '<pre>';
		//print_r($createPost->getvalue());
		//echo '</pre>';
    }


	public function getData() {

    }



}
