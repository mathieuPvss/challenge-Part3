

<?php $__env->startSection('contenu'); ?>

<form action="/connexion" method="post">
    <?php echo e(csrf_field()); ?>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type='email' class="form-control" id="exampleInputEmail1" name='email' value="<?php echo e(old('email')); ?>" label="email">
        <?php if($errors->has('email')): ?>
            <p><?php echo e($errors->first('email')); ?> </p>
        <?php endif; ?>
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label> <br>
        <input type='password' class="control" id="exampleInputPassword1" name='password' label="password">
        <?php if($errors->has('password')): ?>
            <p><?php echo e($errors->first('password')); ?> </p>
        <?php endif; ?>
    </div>

    <button type="submit" class="btn btn-primary">log in</button>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\challenge_48h part2\pomona\resources\views/connexion.blade.php ENDPATH**/ ?>