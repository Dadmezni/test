<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerACL2Eyl\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerACL2Eyl/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerACL2Eyl.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerACL2Eyl\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerACL2Eyl\App_KernelDevDebugContainer([
    'container.build_hash' => 'ACL2Eyl',
    'container.build_id' => 'af290e00',
    'container.build_time' => 1676502923,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerACL2Eyl');
