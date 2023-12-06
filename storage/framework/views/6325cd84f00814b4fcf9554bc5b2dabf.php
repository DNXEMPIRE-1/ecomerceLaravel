<!DOCTYPE html>
<html lang="en">

<head>

  <?php echo $__env->make('backend.layouts.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>

<body>
  
  <div class="container-fluid">

    <div class="row" style="margin-top:10%">
        <!-- 404 Error Text -->
      <div class="col-md-12">
        <div class="text-center">
          <div class="error mx-auto" data-text="404">404</div>
          <p class="lead text-gray-800 mb-5">Page Not Found</p>
          <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
          
            <a href="<?php echo e(route('home')); ?>">&larr; Back to Home</a>

        </div>
      </div>
    </div>

    </div>


    <?php echo $__env->make('backend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH /home/dnx/Downloads/chuks3.0/resources/views/errors/404.blade.php ENDPATH**/ ?>