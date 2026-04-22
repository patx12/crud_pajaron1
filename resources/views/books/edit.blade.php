<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="card">
        <h1>Edit Book</h1>
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf @method('PUT')

            <label>Book Name</label>
            <input type="text" name="book_name" value="{{ $book->book_name }}" required>

            <label>Author</label>
            <input type="text" name="book_author" value="{{ $book->book_author }}" required>

            <label>Stock</label>
            <input type="number" name="book_stock" value="{{ $book->book_stock }}" required>

            <label>Date</label>
            <input type="date" name="book_date" value="{{ $book->book_date }}" required>

            <button type="submit" class="btn btn-update">Update Book</button>
            <a href="{{ route('books.index') }}" class="btn-back">← Back</a>
        </form>
    </div>
</body>
</html>