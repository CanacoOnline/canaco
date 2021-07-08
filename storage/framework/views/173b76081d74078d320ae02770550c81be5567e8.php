<?php if(Auth::check()): ?>
<main class="grid gap10">
    <form action="<?php echo e(url('/comment')); ?>" method="POST" class="panelMedianoN">
        <?php echo csrf_field(); ?>


        <input type="hidden" name="producto_id" id="producto_id" value="<?php echo e($producto->id); ?>">
        <textarea name="body" id="body" rows="3" required style="resize: none; outline:none" class="w100"></textarea>
        <div class="txtRight marB10 mar5">
            <button type="submit" class=" fillBlue tam18 boxShadow padLR20 hvrBorde">Comentar</button>
        </div>
    </form>
    <?php endif; ?>

    <?php if(session('message')): ?>
    <div class="bg-orange">
        <p class="txtW tam18 pad10"><?php echo e(session('message')); ?></p>
    </div>

    <?php endif; ?>

    <div class="grid gap10">
        <?php if(isset($producto->comments)): ?>
        <?php $__currentLoopData = $producto->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="panelMediano boxShadow">
            <div class="bg-blue">
                <?php if( Auth::check() && (Auth::user()->profile_photo_path!=null)): ?>
                <div class="flex align-items-center">
                    <img class="avatarChico" src="/storage/<?php echo e(Auth::user()->profile_photo_path); ?>"
                        alt="/storage/<?php echo e(Auth::user()->profile_photo_path); ?>" />
                    <p class="txtW tam18 pad5 block"><?php echo e($comment->user->name.' '.$comment->user->surname); ?> <span
                            class="txtGray"><span class="tam12"><?php echo e($comment->created_at); ?></span></p>
                </div>
                <?php else: ?>
                <div class="flex align-items-center">
                    <img class="avatarChico mar5" src="<?php echo e(asset('images\avatar.png')); ?>">
                    <p class="txtW tam18 pad5"><?php echo e($comment->user->name.' '.$comment->user->surname); ?> <span
                            class="txtGray"><span class="tam12"><?php echo e($comment->created_at); ?></span></p>
                </div>
                <?php endif; ?>

            </div>

            <p class="pad10 txtCenter tam14"><?php echo e($comment->body); ?></p>

            <?php if(Auth::check()&& (Auth::user()->id==$comment->user_id|| Auth::user()->id==$producto->user_id)): ?>
            <div class="pad5 txtRight">
                <a href="<?php echo e(url('delete-comment/'.$comment->id)); ?>" class="fillRojo pad5 padLR10"
                    onclick="return confirm('¿Está seguro de eliminar este comentario?')">Eliminar</a>
            </div>
            <?php endif; ?>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</main><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/navMenu/comentarios.blade.php ENDPATH**/ ?>