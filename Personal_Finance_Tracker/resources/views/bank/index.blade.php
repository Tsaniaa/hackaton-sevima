@extends('main')

@section('content')
<div class="container pt-5">
    <div class="row">
        <div class="col-lg-8">
            <h3>Bank Transaction</h3>
        </div>
        <div class="col-lg-4">
            <a class="btn btn-primary" href="{{route('bank.create')}}" role="button">Link</a>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-striped-columns">
                <tr>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Category</th>
                </tr>
                @foreach ($banks as $bank)
                <tr>
                    <td>{{ $bank->date }}</td>
                    <td>{{ $bank->statement }}</td>
                    <td>{{ $bank->qty }}</td>
                    <td>{{ $bank->category->category }}</td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection