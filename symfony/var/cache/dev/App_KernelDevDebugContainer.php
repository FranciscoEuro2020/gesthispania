<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWN8Wmdw\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWN8Wmdw/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWN8Wmdw.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWN8Wmdw\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWN8Wmdw\App_KernelDevDebugContainer([
    'container.build_hash' => 'WN8Wmdw',
    'container.build_id' => 'd4f1656b',
    'container.build_time' => 1645902145,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWN8Wmdw');