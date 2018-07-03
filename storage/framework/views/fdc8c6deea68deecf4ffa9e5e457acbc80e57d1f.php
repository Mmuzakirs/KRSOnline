<?php if(Auth::guard('web')->check()): ?>
    You are Logged In as a <strong><?php echo e(Auth::user()->name); ?></strong>
<?php endif; ?>