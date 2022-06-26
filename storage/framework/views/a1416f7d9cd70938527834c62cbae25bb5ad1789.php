

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/Profilo.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(url('css/Profilo.css')); ?>">


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class= "pre-section"> Gentile Utente,</br> ecco le tue credenziali </div> 

<section>

 <div class='display-user-style'> </div>

<div class="container">
<form name="cambio" id="cambio">
   
 <label>Vuoi cambiarne qualcuna?</label>
 <button onclick="location.href='controlloPassword'" type="button">Voglio Cambiarle</button> </br> 
 <label>Vuoi eliminare l'account?</label>
 <button type="submit">Elimina</button>
 </form>
</div>    

</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Milardi\Desktop\example-app\resources\views/Profilo.blade.php ENDPATH**/ ?>