<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCx3ldcm\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCx3ldcm/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerCx3ldcm.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerCx3ldcm\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerCx3ldcm\App_KernelDevDebugContainer([
    'container.build_hash' => 'Cx3ldcm',
    'container.build_id' => '6f9ed648',
    'container.build_time' => 1619721592,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCx3ldcm');