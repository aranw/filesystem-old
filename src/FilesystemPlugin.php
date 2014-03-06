<?php

namespace Task\Plugin;

use Task\PluginContainer;
use Task\PluginInterface;
use League\Flysystem\AdapterInterface;

class FilesystemPlugin extends \League\Flysystem\Filesystem implements PluginInterface {
    public static function factory(PluginContainer $plugins) {
        return new static($plugins['filesystem.adapter']);
    }
}
