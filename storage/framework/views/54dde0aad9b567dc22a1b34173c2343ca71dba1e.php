

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(url('css/Home.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section>

<h1>Per favore, dacci conferma che sei veramente tu!</h1>

<?php if($error == 'not-equals'): ?>
<section class='error'>La password non corrisponde</section>
<?php endif; ?>

<p>Reinserisci la tua password</p>  

<form name='form' method='post'>
    <?php echo csrf_field(); ?>
 <input type='password' name='password'>
<button type="submit">Entra</button>
</form>

</section> 


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Milardi\Desktop\example-app\resources\views/controlloPassword.blade.php ENDPATH**/ ?>