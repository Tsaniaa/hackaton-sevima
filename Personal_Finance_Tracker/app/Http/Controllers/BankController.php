<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banks = Bank::all();

        return view('bank/index', compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $statementArray = explode(' ', $request->statement);
        $count = count($statementArray);
        for($i=0; $i<$count; $i++)
        {
            if (Category::where('category', 'like', '%'.$statementArray[$i].'%')->first() != null) {
                $category_id = Category::where('category', 'like', '%'.$statementArray[$i].'%')->first()->id;
                break;
            }
        }

        DB::table('banks')->insert([
            'qty' => $request->qty,
            'statement' => $request->statement,
            'date' => $request->date,
            'category_id' => $category_id,
        ]);

        $banks = Bank::all();
        return view('bank/index', compact('banks'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
