<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

use Session;
use DateTime;
use Auth;

//Table alias
use App\Rilisan;

class TestController extends Controller {

    public function index() 
    {
	  $page = request('page');
	  $id_rilisan = request('id');
      $rilisan = Rilisan::orderBy('tanggal', 'DESC')
                          ->orderBy('jam', 'DESC')
                          ->paginate(15);
						  
						  
	  if($page != null){
		  if($page == "release"){
			  $post = Rilisan::where('id_rilisan', '=', $id_rilisan)->first();
			  if($post == null)
			  {
				return view('errors.404');
			  }
				return view('html.post')
				  ->with('post', $post);

		  }
		  else {
			   return view('errors.503');
		   }
	  }
      if(count($rilisan) == 0)
      {
        return view('errors.503');
      }
      return view('html.index')
              ->with('rilisan', $rilisan);
    }  
}
