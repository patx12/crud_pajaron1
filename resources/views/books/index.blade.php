<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Inventory</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    <div class="header">
        <h1>Book Inventory</h1>
        <a href="{{ route('books.create') }}" class="btn-add">+ Add New Book</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Author</th>
                <th>Stock</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->book_name }}</td>
                <td>{{ $book->book_author }}</td>
                <td>{{ $book->book_stock }}</td>
                <td>{{ $book->book_date }}</td>
                <td>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn-edit">Edit</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>