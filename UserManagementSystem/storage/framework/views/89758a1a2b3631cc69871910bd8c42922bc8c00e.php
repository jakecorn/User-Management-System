<?php $__env->startSection('content'); ?>
    <div id="header_banner">User Management System</div>

    <?php echo $__env->make('Includes.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    

    <div id="main_container">
        <div id="header">
            User Registration
        </div>

        <div id="content">
            <form method="post">  
                <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>    
                <div id="registrationForm"></div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>                        
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('BaseLayout.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WorkDir\Personal Folder\Laravel Projects\UserManagementSystem\resources\views/main_page.blade.php ENDPATH**/ ?>