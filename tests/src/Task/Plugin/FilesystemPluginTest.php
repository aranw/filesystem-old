<?php

namespace Task\Plugin;

use League\Flysystem\Adapter\Local as LocalAdapter;

class FilesystemPluginTest extends \PHPUnit_Framework_TestCase {
    public function testConstruct() {
        $fs = new FilesystemPlugin(new LocalAdapter(sys_get_temp_dir()));
        $this->assertInstanceOf('League\Flysystem\Filesystem', $fs);
    }
}
