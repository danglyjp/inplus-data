<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GlobalSim;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class GlobalSimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // if($request->has('search')){
    	// 	$gsim_data_items = GlobalSim::search($request->search)
    	// 		->paginate(6);
    	// }else{
    	// 	$gsim_data_items = GlobalSim::paginate(6);
    	// }
    	// return view('global-sim.index',compact('gsim_data_items'));

    }

    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(
            data: Post::search(
                query: trim($request->get('search')) ?? '',
            )->get(),
            status: Response::HTTP_OK,
        );
    }
}
