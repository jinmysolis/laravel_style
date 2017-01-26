<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function latest()
	{
            dd('latest');
	}

	public function popular()
	{
            dd('popular');
	}
        
        
        public function open()
	{
            dd('open');
	}
        
        public function closed()
	{
            dd('closed');
	}
        
         public function datails($id)
	{
            dd('datails: '. $id);
	}
        
       

}
