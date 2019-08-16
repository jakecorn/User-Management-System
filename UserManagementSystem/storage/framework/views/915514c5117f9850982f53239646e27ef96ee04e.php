<?php $__env->startSection('content'); ?>  
    <?php echo $__env->make('Includes.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    

    <div id="main_container">
        <div id="header">
            User Registration
        </div>
        <div id="content">
            <form method="post">  
                <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>    
                <div id="updateForm" data-name="<?php echo e($user->name); ?>" data-username="<?php echo e($user->username); ?>" data-email="<?php echo e($user->email); ?>"  data-contact_number="<?php echo e($user->contact_number); ?>"  data-address="<?php echo e($user->address); ?>"></div>

                <div class="form-group">
                    <button class="btn btn-primary" style="margin-right:12px;">Update</button>                    
                    <a class="btn btn-secondary" href="<?php echo e(route("user_list")); ?>">Cancel</a>
                </div>                        
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('BaseLayout.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WorkDir\Personal Folder\Laravel Projects\UserManagementSystem\resources\views/user_update.blade.php ENDPATH**/ ?>