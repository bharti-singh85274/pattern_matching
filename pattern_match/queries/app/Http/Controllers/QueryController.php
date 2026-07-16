<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use DB;

class QueryController extends Controller
{
    //

    function index(){      
       return view('customers');
    }

   
   function save(Request $request){

   	  $data = new customer;
   	  $data->firstname = $request->firstname;
   	  $data->lastname = $request->lastname;
   	  $data->email = $request->email;
   	  $data->mobile = $request->mobile;
   	  $data->address = $request->address;
   	  $data->price = $request->price;
   	  $data->quantity = $request->quantity;

   	  $data->save();

   	  return redirect()->back();

   }





   //*********************************  QUERIES BUILDER ************************************


   function insert(){        // INSERT QUERY

   return   DB::table('customers')->insert([
   	'firstname' => 'tarun',
   	'lastname' => 'sharma',
   	'mobile'=>'123457890',
    'email' => 'tarun@example.com',
   	'address' => 'ghaziabad',
   	'price' => '100',
    'quantity' => '79',
]);

   }



   function update(){       //UPDATE QUERY

   	return $affected = DB::table('customers')
              ->where('id', 1)
              ->update(['firstname' => 'bharti-rajput']);
   }



   function delete(){      // DELETE QUERY

   	  //$deleted = DB::table('users')->delete();    //delete table
 
      return $deleted = DB::table('customers')->where('price', '=', 40)->delete(); // delete only record
   }



   function pluck(){

     $titles = DB::table('customers')->pluck('firstname');  //return data simply not in array with foreach

      foreach ($titles as $title) {
         echo $title . ',' . ' ';
         }

   }





// **********************************  AGGREGATES FUNCTIONS **********************************

function aggregate(){

    //$users = DB::table('customers')->count();
 
  //return $price = DB::table('customers')->max('price');

  return $price = DB::table('customers')  //divide the sum of any two numbers to its total number
                ->where('quantity', 65)
                ->avg('price');

}



function exist(){

   //return DB::table('customers')->exists();
  //if (DB::table('customers')->where('id', 1)->exists())           // exists()
   if (DB::table('customers')->where('id', 1)->doesntExist())       // doesntExist()
    {
    
    return ['result'=>'yes'];
}else{
  return ['result'=>'no'];
}

}




//  *********************************   SELECT STATEMENTS   *************************************



function select(){

    return $users = DB::table('customers')
            ->select('firstname', 'email as user_email')
            ->get();

}



function distinct(){

  return $users = DB::table('customers')->distinct()->get();
}




// *******************************  Basic Where Clauses  **********************************


function where(){


  // return $users = DB::table('customers')->where('price', 100)->get();  
  /* return $users = DB::table('customers')
                ->where('firstname', '=', 'rano')   // both where are connected
                ->where('quantity', '<', 90)
                ->get();

  */
   
  /*
     return $users = DB::table('customers')
                ->where('price', '>=', 100)
                ->get();
  */
  

 /*return  $users = DB::table('customers')    //return data greater/less than 100 but not =100 
                ->where('price', '<>', 100)
                ->get();    
  */          


  return $users = DB::table('customers')
                ->where('firstname', 'like', 'r%')  // return fisrtname starts from r only
                ->get();              

}







//  *******************************  Or Where Clauses **************************************


function orwhere(){

  /*return $users = DB::table('customers')   // both where and orWhere are not connected
                    ->where('price', '>', 100)
                    ->orWhere('firstname', 'tarun')
                    ->get();
  
 */

    return $users = DB::table('customers')
            ->where('price', '>', 100)
            ->orWhere(function($query) {
                $query->where('firstname', 'rano') //both where are connected with each other
                      ->where('price', '<', 50);
            })
            ->get();



}


// *********************************** Where Not Clauses  ***********************************


function whereNot(){

  return $products = DB::table('customers')
                ->whereNot(function ($query) {   //here wherenot works            
                    $query->where('firstname', 'rano')   // Not rano
                          ->orWhere('price', '<', 10);    // price Not less than 10
                })
                ->get();
}



//   ******************************  Additional Where Clauses   ******************************



function whereBetween(){


 /* return $users = DB::table('customers')  
           ->whereBetween('price', [33, 88])  //whereBetween (records between these two no)
           ->get();
 */
  return  $users = DB::table('customers')
        ->whereNotBetween('price', [33, 88]) //whereBetween(records not in between these two no)
        ->get();

}


function whereIn(){

 /* return $users = DB::table('customers')
                    ->whereIn('id', [5, 8, 9])  // whereIn (return records only 5,8,9)
                    ->get();
 */
   return $users = DB::table('customers')
                    ->whereNotIn('id', [5, 8, 9])  //whereIn (return records not 5,8,9)
                    ->get();

      }


function whereNull(){

   /*
        return $users = DB::table('customers')
                ->whereNull('updated_at')
                ->get();
   */

         return $users = DB::table('customers')
                ->whereNotNull('updated_at')
                ->get();       


      }




//  *******************************   Logical Grouping ****************************



function logical(){

  return $users = DB::table('customers')
           ->where('firstname', '=', 'bharti')
           ->where(function ($query) {
               $query->where('price', '=', 100)
                     ->orWhere('lastname', '=', 'singh');
           })
           ->get();


}




//  ***************** Ordering, Grouping, Limit & Offset************************


function  Ordering(){

    return $users = DB::table('customers')
                ->orderBy('firstname', 'desc')
                ->orderBy('lastname', 'asc')
                ->get();


  }


// ***************  Limit & Offset  ***********************



function Limit_Offset(){

 return $users = DB::table('customers')
                ->offset(1)  //if offset(1) except 1st data, all data,if offset(2) except 2nd data,all data
                ->limit(7)  // return only 7 datas from start
                ->get();
}



function group_by(){

 return $users = DB::table('customers')
               ->groupBy('lastname','id','firstname','email','mobile','address','price','quantity','created_at','updated_at')
                ->having('id', '>', 10)
                ->get();
}


}
