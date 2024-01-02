<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\History;
use App\Models\Rfid;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use Psy\Command\HistoryCommand;

use function PHPUnit\Framework\isEmpty;

class HomeController extends Controller
{

    protected $task;

    public function __construct(History $history)
    {
        $this->task = $history;
    }


     public function index(){

        $permentConfigurations = Configuration::first();
        $latestHomeRecord = Rfid::latest()->first();

        $c0 = $c1 = $c2 = $c3 = null;

        if (!empty($permentConfigurations)) {

            if($latestHomeRecord && $permentConfigurations){

            if(($permentConfigurations->c0 == $latestHomeRecord->c0) && $permentConfigurations->c0 !== null){
                $c0 = 1;
            }elseif(empty($permentConfigurations->c0)){
                $c0 = -1;
            }else{
                $c0 = 0;
            }

            if(($permentConfigurations->c1 == $latestHomeRecord->c1) && $permentConfigurations->c1 !== null){
                $c1 = 1;
            }elseif(empty($permentConfigurations->c1)){
                $c1 = -1;
            }else{
                $c1 = 0;
            }

            if(($permentConfigurations->c2 == $latestHomeRecord->c2) && $permentConfigurations->c2!== null){
                $c2 = 1;
            }elseif(empty($permentConfigurations->c2)){
                $c2 = -1;
            }else{
                $c2 = 0;
            }

            if(($permentConfigurations->c3 == $latestHomeRecord->c3) && $permentConfigurations->c3!== null){
                $c3 = 1;
                }elseif(empty($permentConfigurations->c3)){
                    $c3 = -1;
                }else{
                    $c3 = 0;
            }
                
                

        }


        //Storing history
        $this->task->create([
            'c0' => $c0,
            'c1' => $c1,
            'c2' => $c2,
            'c3' => $c3,
        ]);

        // all records
        $allRecords = history::orderBy('created_at', 'desc')->get();


        return view('pages.home.index', ['c0' => $c0, 'c1' => $c1, 'c2' => $c2, 'c3' => $c3, 'colorArr' => $allRecords]);

        }


        return view('pages.home.index', ['c0' => $c0, 'c1' => $c1, 'c2' => $c2, 'c3' => $c3, 'colorArr' => []]);
        
    }
}
