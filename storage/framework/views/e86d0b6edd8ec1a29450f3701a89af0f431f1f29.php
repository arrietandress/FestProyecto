<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "FestProyecto Dashboard"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo e(asset("/bower_components/admin-lte/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/AdminLTE.css")); ?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="<?php echo e(asset("/bower_components/admin-lte/dist/css/skins/skin-blue.min.css")); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
     <?php echo $__env->yieldContent('customcss'); ?>
</head>
  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index2.html"><b>Fest</b>Proyecto</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Inicia sesion con tu cuenta Fest</p>
    


                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/login')); ?>">

                        <?php echo csrf_field(); ?>

                <div class="box-body">
                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-7">
                                <input type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-7">
                                <input type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Recuerdame
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>
                <div class="box-footer">
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i>  Iniciar sesion
                                </button>

                                
                            </div>
                        </div>
                    </div>
                    </form>
                
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn  btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i>Iniciar con Facebook</a>
          <a href="#" class="btn btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>Iniciar con Google+</a>
        </div><!-- /.social-auth-links -->

       <a class="btn btn-link" href="<?php echo e(url('/password/reset')); ?>">Olvidaste tu contraseña?</a><br>
       <a class="btn btn-link" href="<?php echo e(url('/register')); ?>">Registrarme en FestProyecto</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
  
<script src="<?php echo e(asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js")); ?>"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo e(asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js")); ?>" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset ("/bower_components/admin-lte/plugins/iCheck/icheck.min.js")); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js")); ?>"></script>
    <!-- iCheck -->
 
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>


