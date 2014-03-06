<?php

namespace Task\Plugin;

use Task\PluginContainer;
use League\Flysystem\Adapter\Local as LocalAdapter;

class FilesystemPluginTest extends \PHPUnit_Framework_TestCase {
    public function testConstruct() {
        $fs = new FilesystemPlugin(new LocalAdapter(sys_get_temp_dir()));
        $this->assertInstanceOf('League\Flysystem\Filesystem', $fs);
        $this->assertInstanceOf('Task\PluginInterface', $fs);
    }

    public function testFactory() {
        $plugins = new PluginContainer([
            'filesystem.adapter' => new LocalAdapter(sys_get_temp_dir())
        ]);

        $fs = FilesystemPlugin::factory($plugins);
        $this->assertInstanceOf('Task\Plugin\FilesystemPlugin', $fs);
    }
}
