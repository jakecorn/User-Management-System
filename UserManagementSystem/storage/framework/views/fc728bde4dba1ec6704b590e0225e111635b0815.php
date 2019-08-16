<div id="notification_container">
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger message-container">
            <b>Below errors are detected: </b>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success message-container">
                <p><span>Success</span><?php echo e($message); ?></p>
            </div>
    <?php endif; ?>
</div><?php /**PATH D:\WorkDir\Personal Folder\Laravel Projects\UserManagementSystem\resources\views/Includes/notification.blade.php ENDPATH**/ ?>