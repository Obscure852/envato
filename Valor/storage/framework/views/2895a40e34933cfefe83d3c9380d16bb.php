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
              <h3>Sign Up</h3>
              <p class="mb-4"> Welcome to Image Life staff portal! </p>
            </div>
            <form action="<?php echo e(route('register')); ?>" method="post">
              <?php echo csrf_field(); ?>
               <div class="row">
                <div class="col-md-6">
                    <div class="form-group first">
                        <label for="firstname">Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group first">
                        <label for="lastname">Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                      </div>
                </div>
               </div>
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email">
              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password">
              </div>
    
              <div class="d-flex mb-5 mt-2 align-items-center">
                <input type="checkbox" name="terms" class="mr-2" checked="checked"/>
                <label class="control control--checkbox mb-0"><span class="caption">Agree to the terms of use</span>
                  <div class="control__indicator"></div>
                </label>
              </div>
             <div class="row">
                <div class="col-md-6">
                    <input type="submit" value="Sign Up" class="btn btn-block btn-primary">
                </div>
                <div class="col-md-6">
                    <p>Already have an account <a class="ml-2" href="#">login</a></p>
                </div>
             </div>
            
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/thatoobusebng/Sites/Valor/resources/views/auth/register.blade.php ENDPATH**/ ?>