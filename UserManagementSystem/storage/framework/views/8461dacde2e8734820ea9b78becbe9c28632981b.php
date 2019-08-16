<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('Includes.notification', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>    
    <div id="main_container">
        <div id="header">
            User List
        </div>
        <div id="content">
            <div  id="user_list" data-user-list ="<?php echo e(json_encode($users)); ?>" data-rounte={!array("update" =>route("updateUser",["user_id"=>1]), "delete"=>"b")}}>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('BaseLayout.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\WorkDir\Personal Folder\Laravel Projects\UserManagementSystem\resources\views/list.blade.php ENDPATH**/ ?>