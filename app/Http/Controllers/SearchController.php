<?php namespace App\Http\Controllers;

use App\Search;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class SearchController extends Controller {

	public function search(){
        $query = Request::get('q');

        if ($query){
            $search = Search::where('foodName', 'LIKE', "%$query%")->get();
        }else{
            $search = Search::get();
        }


       return view('search')->with('search', $search);
    }

}
