<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
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
    public function getIndex()
    {

        return view('home');
    }

     public function anyData()
    {
            $records = Record::all();

        return Datatables::of($records)->addColumn('action', function ($record) {
                return '<a href="home/edit/'.$record->id.'" class="btn btn-xs btn-primary del"><i class="glyphicon glyphicon-edit"></i> Confirm</a>';
            })->make(true);
    }

    public function edit(Record $record)
    {
        $record->Confirmation = "YES";
        $record->save();
        return redirect()->route('home');
    }
}

