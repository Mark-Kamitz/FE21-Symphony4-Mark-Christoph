<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerE9QiP8n\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerE9QiP8n/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerE9QiP8n.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerE9QiP8n\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerE9QiP8n\App_KernelDevDebugContainer([
    'container.build_hash' => 'E9QiP8n',
    'container.build_id' => '12153fda',
    'container.build_time' => 1630521683,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerE9QiP8n');
