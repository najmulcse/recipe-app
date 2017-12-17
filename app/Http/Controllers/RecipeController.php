<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use GuzzleHttp\Client;
use GuzzleHttp\Message\Response;

class RecipeController extends Controller
{
	public function landing()
	{
		return view('welcome');
	}

    public function searchRecipes(Request $request)
    {	
    	$item = $request->searchItem;
        // dd($item);
    	if (empty($item))
               {
                  return back();         
               }

    	$recipeapi = "https://api.edamam.com/search";

        $params = [
            'q'		  =>$item,
            'app_id'  => '6cf56913',
            'app_key' =>'cd072c9e246895577b3549821c4b66cb',
            'from'    => 0,
            'to'      => 100,
            'health'  => 'alcohol-free',
        ];

        $client   = new Client();
        $response = $client->get($recipeapi, [
            'query'  => $params,
            'verify' => false,
        ]);
        
        $recipes = (string)$response->getBody();
        $response_results = json_decode($recipes);
        
    	return view('searchResult',compact('response_results','item'));
    }


    // public function searchItems($item )
    // {
    // 	$recipeapi = "https://api.edamam.com/search";

    //     $params = [
    //         'q'		  => $item,
    //         'app_id'  => '253a0c94',
    //         'app_key' =>'5d90ffc7c8fcfee0fe7132d3ec5d8024',
    //         'from'    => 0,
    //         'to'      => 10,
    //         'health'  => 'alcohol-free',
    //     ];

    //     $client   = new Client();
    //     $response = $client->get($recipeapi, [
    //         'query'  => $params,
    //         'verify' => false,
    //     ]);
        
    //     $recipes = (string)$response->getBody();
    //     $response_results = json_decode($recipes);

    // 	return view('search',compact('response_results'));
    // }
}
