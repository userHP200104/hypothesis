<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB0XsI6L\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB0XsI6L/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB0XsI6L.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB0XsI6L\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB0XsI6L\App_KernelDevDebugContainer([
    'container.build_hash' => 'B0XsI6L',
    'container.build_id' => '4b282118',
    'container.build_time' => 1634402215,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB0XsI6L');
