<?php $__env->startSection('content'); ?>
<h1>Data students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-sm bt    n-primary" onclick="window.location='<?php echo e(url('students/add')); ?>'">
        <i class="ri-add-circle-line"></i>Add new data
      </button>
    </div>
    <div class="card-body">
        <?php if(session('msg')): ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>BERHASIL!</strong> <?php echo e(session('msg')); ?>

                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>
        <table class="table table-sm table-striped table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Students</th>
                    <th>Full Name</th>
                    <th>Genre</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($row->idstudents); ?></td>
                        <td><?php echo e($row->fullname); ?></td>
                        <td><?php echo e($row->gender); ?></td>
                        <td><?php echo e($row->address); ?></td>
                        <td><?php echo e($row->emailaddress); ?></td>
                        <td><?php echo e($row->phone); ?></td>
                        <td>
                            <button onclick="window.location='<?php echo e(url('students/'.$row->idstudents)); ?>'"
                                type="button" class="btn btn-sm btn-info" title="Edit Data">
                                <i class="ri-edit-box-line"></i>
                            </button>
                            <form onsubmit="return deleteData('<?php echo e($row->fullname); ?>')" style="display: inline" method="POST" action="<?php echo e(url('students/'.$row->idstudents)); ?>">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" title="Hapus data" class="btn btn-sm btn-danger">
                                <i class="ri-delete-bin-line"></i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    <script>
                        function deleteData(name){
                            pesan = confirm('Yakin data students dengan nama ${name} mau dihapus?');
                            if(pesan) return true;
                            else return false;
                        }
                    </script>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\crud-laravel\resources\views/students/data.blade.php ENDPATH**/ ?>