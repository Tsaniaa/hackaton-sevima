<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use App\Models\Category;
use Illuminate\Support\Arr;
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

    public function graph()
    {
        $query = 'select a.category_id as category_id, b.category as category_name, sum(a.qty) as qty from banks a join categories b on a.category_id = b.id group by a.category_id, b.category';
        $graphs = collect(DB::select($query));
        $category_id = Arr::pluck($graphs, 'category_id');
        $category = Arr::pluck($graphs, 'category_name');
        $qty = Arr::pluck($graphs, 'qty');

        $bankGraphs = DB::select($query);
        $tot = count($category_id);
        // $bankGraphs = $graphs->pluck('category_name', 'qty');
        // dd($bankGraphs);
        return view('bank/graph', compact('tot','bankGraphs', 'category', 'qty'));
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
                $category = Category::where('category', 'like', '%'.$statementArray[$i].'%')->first();
                break;
            }
        }
        if ($category->id == null) {
            $category_id = 1;
        } else {
            $category_id = $category->id;
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
