<?php

use App\Exceptions\GeneralException;
use App\Helpers\uuid;
use App\Http\Utilities\SendEmail;
use App\Models\Notification\Notification;
use App\Models\Settings\Setting;
use Carbon\Carbon as Carbon;
use Illuminate\Support\Facades\DB;

//use DB as DB;
/**
 * Henerate UUID.
 *
 * @return uuid
 */
//if(!function_exists('getCountries'))
//{
//    function getCountries()
//    {
//        //DB::select($sql);
//        //$countries = DB::table('countries')->get();
//        $countries = DB::select("SELECT * FROM mkpcom19_mkp.countries order by sortindex asc");
//        return $countries;
//    }


//}
