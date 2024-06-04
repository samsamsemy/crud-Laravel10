<?php $__env->startSection('content'); ?>
<h1>Edit students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm btn-warning" onclick="window.location='<?php echo e(url('students')); ?>'">
        <i class="ri-add-circle-line"></i>kembali
      </button>
    </div>
    <div class="card-body">
        <form method="POST" action="<?php echo e(url('students/'.$txtid)); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        
        <div class="row mb-3">
            <label for="txtid" class="col-sm-2 col-form-label">ID students</label>
            <div class="col-sm-4">
              <input type="text" class="form-control-plaintext" id="txtid" name="txtid" value="<?php echo e($txtid); ?>">
            </div>
        </div>
        

        
        <div class="row mb-3">
            <label for="txtfullname" class="col-sm-2 col-form-label">Fullname</label>
            <div class="col-sm-10">
              <input type="text" class="form-control form-control-sm" id="txtfullname" name="txtfullname" value="<?php echo e($txtfullname); ?>">
            </div>
        </div>
        

        
        <div class="row mb-3">
            <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-6">
              <select class="form-select form-select-sm" name="txtgender" id="txtgender">
                <option value="" selected>Pilih</option>
                <option value="M" <?php echo e(($txtgender=='M') ? 'selected' : ''); ?>>Male</option>
                <option value="F" <?php echo e(($txtgender=='F') ? 'selected' : ''); ?>>Female</option>
              </select>
            </div>
        </div>
        

        
        <div class="row mb-3">
            <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-6">
                <textarea class="form-control" name="txtaddress" id="txtaddress" cols="30" rows="10" ><?php echo e($txtaddress); ?></textarea>
                <?php $__errorArgs = ['txtaddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        

        
        <div class="row mb-3">
            <label for="txtemail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" value="<?php echo e($txtemail); ?>" id="txtemail" name="txtemail" >
                <?php $__errorArgs = ['txtemail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        

        
        <div class="row mb-3">
            <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-sm" id="txtphone" name="txtphone" value="<?php echo e($txtphone); ?>">
              <?php $__errorArgs = ['txtphone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <div class="invalid-feedback">
                  <?php echo e($message); ?>

              </div>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        

        
        <div class="row mb-3">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-6">
                <button type="submit" class="btn btn-sm btn-success">Update</button>
            </div>
        </div>
        
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-laravel\resources\views/students/formedit.blade.php ENDPATH**/ ?>