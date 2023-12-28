<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\configuration;
use App\Models\rfid;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{
     public function index(){

        $permentConfigurations = Configuration::first();
        $latestHomeRecord = rfid::latest()->first();

        if($latestHomeRecord && $permentConfigurations){

            if($permentConfigurations->c0 == $latestHomeRecord->c0){
                $c0 = 1;
            }elseif(empty($permentConfigurations->c0)){
                $c0 = -1;
            }else{
                $c0 = 0;
            }

            if($permentConfigurations->c1 == $latestHomeRecord->c1){
                $c1 = 1;
            }elseif(empty($permentConfigurations->c1)){
                $c1 = -1;
            }else{
                $c1 = 0;
            }

            if($permentConfigurations->c2 == $latestHomeRecord->c2){
                $c2 = 1;
            }elseif(empty($permentConfigurations->c2)){
                $c2 = -1;
            }else{
                $c2 = 0;
            }

            if($permentConfigurations->c3 == $latestHomeRecord->c3){
                $c3 = 1;
            }elseif(empty($permentConfigurations->c3)){
                $c3 = -1;
            }else{
                $c3 = 0;
            }
        }
        

        return view('pages.home.index', ['c0' => $c0, 'c1' => $c1, 'c2' => $c2, 'c3' => $c3]);
    }
}
