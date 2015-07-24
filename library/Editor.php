<?php

namespace Editor;

/**
 * Class Editor
 * @author Stefan Hüsges
 */
class Editor
{
    protected $file = null;
    protected $chars = null;

    protected $pos = [0x012C, 0x0721, 0x0D16, 0x130B, 0x1900, 0x1EF5, 0x24EA];
    protected $offset = 0x05F5;

    public function loadFile($name)
    {
        $this->file = file_get_contents($name);
        $this->splitFile();
    }

    public function splitFile()
    {
        for ($i = 0; $i <= 6; $i++) {
            $this->chars[$i] = new Char(substr($this->file, $this->pos[$i], $this->offset));
        }
    }

    public function getChars()
    {
        $array = [];
        foreach ($this->chars as $char) {
            $charArray = [];
            $charArray['name'] = $char->getName();
            $array[] = $charArray;
        }
        return json_encode($array);
    }
}