<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZEW8Urf\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZEW8Urf/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerZEW8Urf.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerZEW8Urf\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerZEW8Urf\App_KernelDevDebugContainer([
    'container.build_hash' => 'ZEW8Urf',
    'container.build_id' => 'caecf1db',
    'container.build_time' => 1620053291,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZEW8Urf');
