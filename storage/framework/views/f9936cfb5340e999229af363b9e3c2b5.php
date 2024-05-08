<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Simple laravel crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <div class="bg-dark">
        <h3 class="text-white text-center">simple laravel crud 11</h3>
    </div>
    <div class="container">

        <div class="row justify-content-center mt-4">
            <div class="col-md-10 d-flex justify-content-end">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-dark">Create</a>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
        <?php if(Session::has('success')): ?>s
            <div class="col-md-10 mt-4">
                <div class="alert alert-success">
                    <?php echo e(Session::get('success')); ?>

                </div>

            </div>

            
            <?php endif; ?>
           
            <div class="col-md-10">
                <div class="card border-0 shadow-lg my-4">
                    <div class="card-header bg-dark">
                        <h3 class="text-white">Products</h3>
                    </div>
                   
                </div>
            </div>
        </div>
   

</body>
</html><?php /**PATH C:\Users\kulde\OneDrive\Desktop\OtherSelfLernlang\LaravelProojects\laravel11crud\resources\views/products/list.blade.php ENDPATH**/ ?>