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
      $rilisan = Rilisan::orderBy('tanggal', 'DESC')
                          ->orderBy('jam', 'DESC')
                          ->paginate(15);

      if(count($rilisan) == 0)
      {
        return view('errors.503');
      }

      return view('html.index')
              ->with('rilisan', $rilisan);
    }
  
}
