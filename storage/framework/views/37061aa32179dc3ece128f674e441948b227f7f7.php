<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="<?php echo e(asset('gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo e(asset('gentelella/vendors/font-awesome/css/font-awesome.min.css')); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo e(asset('gentelella/vendors/nprogress/nprogress.css')); ?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo e(asset('gentelella/vendors/animate.css/animate.min.css')); ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo e(asset('gentelella/build/css/custom.min.css')); ?>" rel="stylesheet">
</head>
<body class="login">
<div>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="<?php echo e(route('admin.login.submit')); ?>">
            <?php echo csrf_field(); ?>
              <h1>Admin Login</h1>
              <div>
                <input name="email" id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="Email" value="<?php echo e(old('email')); ?>" required autofocus />
                <?php if($errors->has('email')): ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div>
                <input name="password" id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" placeholder="Password" required="" />
                <?php if($errors->has('password')): ?>
                    <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div>
                <button class="btn btn-default submit">Login</button>
                <a class="btn btn-link" href="<?php echo e(route('admin.password.request')); ?>">Forget your password</a>
              </div>

              <div class="clearfix"></div>

            </form>
          </section>
        </div>
      </div>
    </div>
</body>
</html>