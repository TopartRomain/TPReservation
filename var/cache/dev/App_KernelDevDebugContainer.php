<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1etrktv\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1etrktv/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1etrktv.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1etrktv\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1etrktv\App_KernelDevDebugContainer([
    'container.build_hash' => '1etrktv',
    'container.build_id' => '6eb058f1',
    'container.build_time' => 1731017547,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container1etrktv');
