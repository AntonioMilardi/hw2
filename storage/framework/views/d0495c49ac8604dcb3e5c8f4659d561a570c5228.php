

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/NotizieTue.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(url('css/Home.css')); ?>">
<link rel="stylesheet" href="<?php echo e(url('css/preferiti.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<p> Ecco le tue notizie  preferite </p>

<div id="informazioni"></div> 

<p> Se non ne vedi aggiungine qualcuna dalla Home </p>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Milardi\Desktop\example-app\resources\views/NotizieTue.blade.php ENDPATH**/ ?>