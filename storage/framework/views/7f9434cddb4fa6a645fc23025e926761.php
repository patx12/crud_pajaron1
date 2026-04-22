<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Inventory</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/styles.css')); ?>">
</head>
<body>

    <div class="header">
        <h1>Book Inventory</h1>
        <a href="<?php echo e(route('books.create')); ?>" class="btn-add">+ Add New Book</a>
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
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($book->id); ?></td>
                <td><?php echo e($book->book_name); ?></td>
                <td><?php echo e($book->book_author); ?></td>
                <td><?php echo e($book->book_stock); ?></td>
                <td><?php echo e($book->book_date); ?></td>
                <td>
                    <a href="<?php echo e(route('books.edit', $book->id)); ?>" class="btn-edit">Edit</a>
                    <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="POST" style="display:inline">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn-delete">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

</body>
</html><?php /**PATH C:\Users\Patrick Pajaron\OneDrive\Desktop\laravel\crud_pajaron1\resources\views/books/index.blade.php ENDPATH**/ ?>