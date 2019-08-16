<html>
    <head>
        <title>User Management System</title>
        <link rel="stylesheet" href="<?php echo e(asset("css/app.css")); ?>">        
        <link rel="stylesheet" href="<?php echo e(asset("css/custom.css")); ?>">        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">        
    </head>
    <body>
        <div class="app">
            <div id="header_banner">
                <div id="app_name">User Management System</div>
                <div id="nav_container">
                    <ul>
                        <li><a href="<?php echo e(route("createForm")); ?>">User Registration</a></li>
                        <li><a href="<?php echo e(route("user_list")); ?>">User Management</a></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>        
        <script src="<?php echo e(asset("js/app.js")); ?>"></script>
    </body>
</html>
<?php /**PATH D:\WorkDir\Personal Folder\Laravel Projects\UserManagementSystem\resources\views/BaseLayout/main_layout.blade.php ENDPATH**/ ?>