<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Trade;
use Auth;
use DB;
use Hash;

class TradeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index(Request $request){
        $user = Auth::user();
        $ongoingTrades = Trade::where('status', 1)->where('user', $user->id)->get();
        $pastTrades = Trade::where('status', 0)->where('user', $user->id)->get();
        $pendingTrades = Trade::where('status', 3)->where('user', $user->id)->get();

  
          return inertia('Dashboard', ['user' => $user, 'ongoingTrades' => $ongoingTrades, 'pastTrades' => $pastTrades, 'pendingTrades' => $pendingTrades ]);
  
      }

    public function calendar(){

        return view('Calendar');
    }

    public function buyOrder(Request $request){
        $user = Auth::user();
        // dd($request->all());
        // validate the request data
    

    // create a new trade with the validated data
    $trade = Trade::create([
        'volume' => $request['volume'],
        'symbol' => $request['symbol'],
        'side' => $request['side'],
        'type' => $request['type'],
        'sl' => $request['sl'],
        'tp' => $request['tp'],
        'nominal' => $request['nominal'],
        'entry_price' => $request['entryPrice'],
        'spread' => $request['spread'],
        'commission' => $request['commission'],
        'status' => $request['status'],
        'user' => $user->id,
        
    ]);
    

    // return a redirect response to the orders page
    return app('App\Http\Controllers\TradeController')->index($request);
        
    }

    
    public function endTrade(Request $request){
        $user = Auth::user();
        $trade = Trade::where('id', $request->ticket)->first();
        
       
        $trade->status = 0;
        $trade->profit = number_format($request->profit, 2);
        $trade->exit_price = $request->exitPrice;
        $trade->save();

        $user->balance += number_format($request->profit, 2);
        $user->save();
   
    

    // return a redirect response to the orders page
    return app('App\Http\Controllers\TradeController')->index($request);
        
    }






}
