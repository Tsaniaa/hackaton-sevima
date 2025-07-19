@extends('main')

@section('content')
    <div class="container pt-5">
        <form action="{{ route('bank.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="qty" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="qty" name="qty" required>
            </div>
            <div class="mb-3">
                <label for="statement" class="form-label">Statement</label>
                <textarea class="form-control" id="statement" name="statement" rows="3" required></textarea>
            </div>
             <div class="mb-3">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Add</button>
        </form>
    </div>
@endsection