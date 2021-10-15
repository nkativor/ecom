<?php $__env->startSection('content'); ?>
<div class="container text-center">
     <h2>Products</h2>
      <div class="col-md-12">
          <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="col-md-4">
            <div class="card">
          <img src="<?php echo e(asset('default-img.png')); ?>" alt="card image cap" class="card-img-top">
                <div class="card-header"> </div>
                <div class="card-body">
                  <h4 class="card-title"><?php echo e($product->name); ?></h4>
                  <p class="card-text"><?php echo e($product->description); ?></p>
                    <p class="card-text">GH<?php echo e($product->price); ?></p>
                </div>
                <div class="card-body">
                  <a href="<?php echo e(route('cart.add',$product->id)); ?>" class="card-link">Add to Cart</a>
                </div>
            </div>
          </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecom\resources\views/home.blade.php ENDPATH**/ ?>