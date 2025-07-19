@extends('main')

@section('content')
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-8">
                <table class="table table-striped-columns">
                <tr>
                    <th>Category</th>
                    <th>Total Bank</th>
                </tr>
                @for ($i =0; $i<$tot; $i++) 
                @foreach ($bankGraphs as $bankGraph)
                <tr>
                    <td>{{ $bankGraphs[$i]->category_name }}</td>
                    <td>{{ $bankGraphs[$i]->qty }}</td>
                </tr>
                @endforeach
                @endfor
            </table>
            </div>
        </div>
    </div>
@endsection