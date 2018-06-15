<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class gameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     //マッチ度の計算。アレイの中で一致しているモノを表示し、それをもとに計算する機能。
    public function match($userId){
        $match=10;
        if (\Auth::check()) {
            $user = \Auth::user();
            foreach($userId as $key){
                foreach($user as $value){
                    if($key == $value){
                        $match*=2;
                        print 'Nice! you have '.$value.'. '.$userId.' have '.$key.' in common!';
                    }
                }
            }
            print 'you are '.$match.' % matched with '.$userId.'. you should have lunch together';
        }
    }
    
    //毎日の餌
    public function eat($input){
        array_push($this, $input);
    }
    
    //食べたものリスト
    public function food($userId){
        foreach($userId as $key){
            print $key;
        }
    }
    
    
}