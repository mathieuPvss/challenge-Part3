

<?php $__env->startSection('contenu'); ?>
<form  action="/inscription" method="post">
    <?php echo e(csrf_field()); ?>

    <input type="email" name="email" placeholder="emaill" value = <?php echo e(old('email')); ?>>
    <?php if($errors->has('email')): ?>
        <p><?php echo e($errors->first('email')); ?></p>
    <?php endif; ?>
    <input type="string" name="nom" placeholder="nom" >
    <?php if($errors->has('nom')): ?>
        <p><?php echo e($errors->first('nom')); ?></p>
    <?php endif; ?>
    <input type="password" name="password" placeholder="password" >
    <?php if($errors->has('password')): ?>
        <p><?php echo e($errors->first('password')); ?></p>
    <?php endif; ?>
    <input type="password" name="password_confirmation" placeholder="confirmation password" >
    <?php if($errors->has('password_confirmation')): ?>
        <p><?php echo e($errors->first('password_confirmation')); ?></p>
    <?php endif; ?>
    
    <input type="submit" value="valider" >
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\pomona\resources\views/inscription.blade.php ENDPATH**/ ?>