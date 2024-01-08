<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use App\Models\Rfid;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    protected $task;

    public function __construct(Configuration $config){
        $this->task = $config;
    }

    public function index(){

        $configuration = Configuration::first();

        return view('pages.configuration.index', ['configuration' => $configuration]);
    }

    public function show($id){
        $latestRecord = rfid::latest()->first();
        $configuration = Configuration::first();
        return view('pages.configuration.index', ['latestRecord' => $latestRecord, 'selectedcolumn' => $id, 'configuration' => $configuration]);
    }

    public function update(Request $request){

            $existingConfiguration = Configuration::first();

            if ($existingConfiguration) {
                $existingConfiguration->update($request->all());
            } else {
                $this->task->create(
                    $request->all()
                );
            }

        return redirect()->back();
    }
}
