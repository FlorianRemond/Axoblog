<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXTSVwy6\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXTSVwy6/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXTSVwy6.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXTSVwy6\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerXTSVwy6\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'XTSVwy6',
    'container.build_id' => '4d42b7ca',
    'container.build_time' => 1561466282,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXTSVwy6');
