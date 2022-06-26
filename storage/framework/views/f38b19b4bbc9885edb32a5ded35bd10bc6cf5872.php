

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(url('js/registrazione.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="container">
<h1>Inserisci i nuovi dati</h1>


                <?php if($error == 'campo_vuoto'): ?>
                <section class='error'>Compilare tutti i campi</section>
                <?php elseif($error == 'esistente'): ?>
                <section class='error'>Username esistente</section>
                <?php elseif($error == 'corta'): ?>
                <section class='error'>Password troppo corta</section>
                <?php endif; ?>


                <form name='form' method='post'>
                    <?php echo csrf_field(); ?>
                <p><label>Nome <input type='text' name='nome' value ='<?php echo e(old("nome")); ?>'></label></p>

                <p><label>Cognome <input type='text' name='cognome' value ='<?php echo e(old("cognome")); ?>'></label></p>

                    <p><label>Username <input type='text' name='username' value ='<?php echo e(old("username")); ?>'></label></p>
                    <p><label>Password <input type='password' name='password' value ='<?php echo e(old("password")); ?>'></label></p>
                    <button type="submit">Cambia credenziali</button>
                    <button onclick="location.href='Profilo'" type="button">Indietro</button>       
       
				 </form>
        </div>
</div>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Milardi\Desktop\example-app\resources\views/cambioCredenziali.blade.php ENDPATH**/ ?>