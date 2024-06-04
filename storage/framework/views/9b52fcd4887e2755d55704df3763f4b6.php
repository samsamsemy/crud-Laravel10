<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="<?php echo e(asset('/')); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"/>
    
</head>
  <body>
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link <?php echo e((request()->segment('1') == '' || request()->segment('1') == 'home') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('home')); ?>">
                    <i class="ri-dashboard-3-line"></i>Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php echo e((request()->segment('1') == 'home') ? 'active' : ''); ?>" aria-current="page" href="<?php echo e(url('students')); ?>">
                    <i class="ri-graduation-cap-line"></i>Students</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    

    
    <div class="mt-4">
       <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
       </div>
    </div>
    
    <script src="<?php echo e(asset('/')); ?>assets/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\laragon\www\crud-laravel\resources\views/layout/main.blade.php ENDPATH**/ ?>