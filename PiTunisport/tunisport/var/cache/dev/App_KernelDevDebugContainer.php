<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJFaHqN1\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJFaHqN1/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJFaHqN1.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJFaHqN1\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJFaHqN1\App_KernelDevDebugContainer([
    'container.build_hash' => 'JFaHqN1',
    'container.build_id' => '4c4ad9e8',
    'container.build_time' => 1676314621,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJFaHqN1');
