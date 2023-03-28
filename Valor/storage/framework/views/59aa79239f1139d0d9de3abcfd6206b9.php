<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
          <img src="<?php echo e(asset('images/remote.svg')); ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In</h3>
              <p class="mb-4">Welcome back to Image Life!</p>
            </div>
            <form action="#" method="post">
              <div class="form-group first">
                <label for="email">Email</label>
                <input name="email" type="email"  class="form-control" id="email">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input name="password" type="password" class="form-control" id="password">
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn btn-block btn-primary">
            </form>
            </div>
          </div>
        </div>
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thatoobusebng/Sites/Valor/resources/views/auth/login.blade.php ENDPATH**/ ?>