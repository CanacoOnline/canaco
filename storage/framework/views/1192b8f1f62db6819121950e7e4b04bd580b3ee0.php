<!-- Redes Sociales -->
<div class="col-span-6 sm:col-span-4">
    <h2 class="txtB txtCenter marTB10 tam36">Redes Sociales</h2>
</div>
<!-- Pagina Web -->
<div class="col-span-6 sm:col-span-4">
    <label for="name" class="mar5 txtB tam18 ">Pagina Web</label>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['id' => 'pagweb','type' => 'text','class' => 'mar5 frm100 typeLinea lineaO ','name' => 'pagweb','wire:model.defer' => 'state.pagweb','value' => ''.e(Auth::user()->pagweb).'']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['id' => 'pagweb','type' => 'text','class' => 'mar5 frm100 typeLinea lineaO ','name' => 'pagweb','wire:model.defer' => 'state.pagweb','value' => ''.e(Auth::user()->pagweb).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>

<!-- Whatsapp -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Whatsapp</label>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'whatsapp','wire:model.defer' => 'state.whatsapp','value' => ''.e(Auth::user()->whatsapp).'']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'whatsapp','wire:model.defer' => 'state.whatsapp','value' => ''.e(Auth::user()->whatsapp).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<!-- Facebook -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Facebook</label>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'facebook','wire:model.defer' => 'state.facebook','value' => ''.e(Auth::user()->facebook).'']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'facebook','wire:model.defer' => 'state.facebook','value' => ''.e(Auth::user()->facebook).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<!-- Instagram -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Instagram</label>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'instagram','wire:model.defer' => 'state.instagram','value' => ''.e(Auth::user()->instagram).'']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'instagram','wire:model.defer' => 'state.instagram','value' => ''.e(Auth::user()->instagram).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>
<!-- Twitter -->
<div class="col-span-6 sm:col-span-4">
    <label for="title" class="mar5 txtB tam18">Twitter</label>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.input','data' => ['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'twitter','wire:model.defer' => 'state.twitter','value' => ''.e(Auth::user()->twitter).'']]); ?>
<?php $component->withName('jet-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'text','class' => 'mar5 frm100 typeLinea lineaO','name' => 'twitter','wire:model.defer' => 'state.twitter','value' => ''.e(Auth::user()->twitter).'']); ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
</div>

<div class="col-span-6 sm:col-span-4">
    <br><br><br>
    <p class="tam14 txtCenter">Nota: para que los links a sus páginas funcionen deben contar con
        "https://" <br>Ejemplo: https://www.facebook.com/CanaconlineNogales</p>
</div><?php /**PATH /home2/canaconl/canaco/resources/views/profile/social.blade.php ENDPATH**/ ?>