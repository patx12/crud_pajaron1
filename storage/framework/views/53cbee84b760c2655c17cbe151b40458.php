<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>

    <div class="card">
        <h1>Add Book</h1>
        <form action="<?php echo e(route('books.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>

            <label for="book_name">Book Name</label>
            <input type="text" id="book_name" name="book_name" placeholder="Enter book name" required>

            <label for="book_author">Author</label>
            <input type="text" id="book_author" name="book_author" placeholder="Enter author" required>

            <label for="book_stock">Stock</label>
            <input type="number" id="book_stock" name="book_stock" placeholder="Enter stock" required>

            <label for="book_date">Date</label>
            <input type="date" id="book_date" name="book_date" required>

            <div style="margin-top: 10px;">
                <button type="submit" class="btn-save">Save Book</button>
                <a href="<?php echo e(route('books.index')); ?>" class="btn-back">← Back</a>
            </div>
        </form>
    </div>

</body>
</html><?php /**PATH C:\Users\Patrick Pajaron\OneDrive\Desktop\laravel\crud_pajaron1\resources\views/books/create.blade.php ENDPATH**/ ?>