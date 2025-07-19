@extends('main')

@section('content')
    <div class="container pt-5">
        <form action="{{ route('query.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="query" class="form-label">Query</label>
                <textarea class="form-control" id="query" name="query" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Add</button>
        </form>
    </div>
@endsection