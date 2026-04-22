<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>
    <div class="card">
        <h1>Edit Book</h1>
        <form action="<?php echo e(route('books.update', $book->id)); ?>" method="POST">
            <?php echo csrf_field(); ?> <?php echo method_field('PUT'); ?>

            <label>Book Name</label>
            <input type="text" name="book_name" value="<?php echo e($book->book_name); ?>" required>

            <label>Author</label>
            <input type="text" name="book_author" value="<?php echo e($book->book_author); ?>" required>

            <label>Stock</label>
            <input type="number" name="book_stock" value="<?php echo e($book->book_stock); ?>" required>

            <label>Date</label>
            <input type="date" name="book_date" value="<?php echo e($book->book_date); ?>" required>

            <button type="submit" class="btn btn-update">Update Book</button>
            <a href="<?php echo e(route('books.index')); ?>" class="btn-back">← Back</a>
        </form>
    </div>
</body>
</html><?php /**PATH C:\Users\Patrick Pajaron\OneDrive\Desktop\laravel\crud_pajaron1\resources\views/books/edit.blade.php ENDPATH**/ ?>