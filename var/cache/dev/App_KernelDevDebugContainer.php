<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3bQDy6V\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3bQDy6V/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3bQDy6V.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3bQDy6V\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3bQDy6V\App_KernelDevDebugContainer([
    'container.build_hash' => '3bQDy6V',
    'container.build_id' => '09d066a7',
    'container.build_time' => 1635688601,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3bQDy6V');
