<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVHMHM9o\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVHMHM9o/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVHMHM9o.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVHMHM9o\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVHMHM9o\App_KernelDevDebugContainer([
    'container.build_hash' => 'VHMHM9o',
    'container.build_id' => 'a113c1d8',
    'container.build_time' => 1706183175,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVHMHM9o');
