@extends('layout.app')

@section('content')
    <h1>Books</h1>

    <a href="#" class="btn btn-primary mb-2">Add a book</a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Pages</th>
                <th scope="col">Quantity</th>
                <th scope="col">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>Pages: {{ $book->pages }}</td>
                        <td>Qty: {{ $book->quantity }}</td>
                        <td>
                            --actions--
                        </td>
                    </tr>
                @endforeach
        </tbody>
    </table>
@endsection('content')

