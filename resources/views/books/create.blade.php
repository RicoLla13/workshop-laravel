@extends('layout.app')

@section('content')
    <h1>Create Book</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <a href="/books" class="btn btn-primary mb-2">Return</a>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div>
            <label>Title</label><br>
            <input type="text" name="title" value="{{ old('title') }}">
        </div>
        <div>
            <label>Pages</label><br>
            <input type="number" name="pages" value="{{ old('pages') }}">
        </div>
        <div>
            <label>Quantity</label><br>
            <input type="number" name="quantity" value="{{ old('quantity') }}">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Create</button>
    </form>
@endsection('content')

