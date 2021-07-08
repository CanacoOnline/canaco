<?php $__env->startSection('title', 'Subir Cupón'); ?>
<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <?php if(Auth::user()->rol_id == 2): ?>
    <main class="divCenterJA full">
        <form action="<?php echo e(route('saveProducto')); ?>" method="post" enctype="multipart/form-data"
            class="panelMediano borde boxShadow mar20 pad20">
            <?php echo csrf_field(); ?>


            <h2 class="txtB tam36 txtCenter pad20">Subir Cupón</h2>
            <!--Tipo-->
            <input type="text" id="tipo" name="tipo" value="Cupon" style="display:none" />
            <!--Titutlo-->
            <div class="marTB10">
                <label class="txtB tam24" for="title">Título</label>
                <input type="text" class="frm100 typeLinea lineaO " id="title" name="title" />
                <ul>
                    <?php $__currentLoopData = $errors->get('title'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>

            <!--Descripcion-->
            <div class="marTB10">
                <label class="txtB tam24" for="description">Descripción</label>
                <input type="text" class="frm100 typeLinea lineaO" id="description" name="description" />
                <?php if($errors->has('description')): ?>
                <strong>
                    <p class="txtRojo tam14">Debe introducir al menos 5 caracteres</p>
                </strong>
                <?php endif; ?>
            </div>
            <div class="marTB10">
                <label class="txtB tam24" for="fechaini">Día de inicio:</label>
                <input type="date" class="frm100 typeLinea lineaO  marTB10" id="fechaini" name="fechaini"
                    min="20-01-01" require>
                <?php if($errors->has('fechaini')): ?>
                <strong>
                    <p class="txtRojo tam14">Este campo no puede quedar vacío.</p>
                </strong>
                <?php endif; ?>
            </div>
            <!--Expiracion-->
            <div class="marTB10">
                <label class="txtB tam24" for="fechaexp">Día de expiración:</label>
                <input type="date" class="frm100 typeLinea lineaO  marTB10" id="fechaexp" name="fechaexp" min="20-01-01"
                    require>
                <?php if($errors->has('fechaexp')): ?>
                <strong>
                    <p class="txtRojo tam14">Este campo no puede quedar vacío.</p>
                </strong>
                <?php endif; ?>
            </div>

            <!--foto del producto-->
            <div class="marTB10 divCenter">
                <label class="txtB tam24 hvrBorde borde" for="image">Elegir imagen</label>
                <input type="file" class="frm100 typeLinea lineaO inputUploadImg" id="image" name="image" require />
                <div id="preview"></div>
                <?php if($errors->has('image')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('image')); ?></strong>
                </span>
                <?php endif; ?>
            </div>
            <!--Boton-->
            <div class="contCenter marTB10">
                <button type="submit" class="typeRadio fillBlue tam24 boxShadow padLR50 hvrBorde">Subir archivo</button>
            </div>
        </form>
    </main>

    <?php else: ?>

    <?php endif; ?>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\yyyyy\Desktop\CanacoOnline\resources\views/archivos/crearCupon.blade.php ENDPATH**/ ?>