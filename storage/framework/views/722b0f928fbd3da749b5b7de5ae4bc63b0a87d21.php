

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('js/Home.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>

<link rel="stylesheet" href="<?php echo e(url('css/Home.css')); ?>">

<?php $__env->stopSection(); ?>




<?php $__env->startSection('content'); ?>

<p> Il giornale <strong> online</strong> affidabile! </p>


              
<div class="news"> 
  <h1> Rimanete aggiornati sulle notizie del mondo! </h1>
 <form name="ricerca" id="ricerca">
   <label>Inizia la tua ricerca</label>
   <input type="text" name="content" id="content">
   <input class="submit" type="submit">
 </form>
</div>  
   
<div id="informazioni" class="hidden"  ></div> 


<p> Grazie di averci scelto</br> 
</p> 



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Milardi\Desktop\example-app\resources\views/Home.blade.php ENDPATH**/ ?>