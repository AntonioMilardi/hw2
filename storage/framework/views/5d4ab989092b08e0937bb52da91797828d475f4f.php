

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(url('js/login.js')); ?>" defer></script>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<div class="container">
                 <h1>The Truth</h1>

                 <?php if($error == 'campo_vuoto'): ?>
                <section class='error'>Compilare tutti i campi</section>
                <?php elseif($error == 'errato'): ?>
                <section class='error'>credenziali errate o inesistenti</section>
                <?php endif; ?>
                <form name='form' method='post'>
                    <?php echo csrf_field(); ?>
                    <p><label>Username <input type='text' name='username' value ='<?php echo e(old("username")); ?>'></label></p>
                    <p><label>Password <input type='password' name='password'></label></p>
                    <button type="submit">Entra</button>
					<button onclick="location.href='register'" type="button">Registrati</button>       
				 </form>
        </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.log', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Antonio Milardi\Desktop\hw2\resources\views/login.blade.php ENDPATH**/ ?>