<?php
//58
//
class File implements iFile
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function getPath()
    {
        return self::matches()[1][0].self::matches()[2][0].self::matches()[3][0];
    }

    public function getDir()
    {
        return self::matches()[2][0];
    }

    public function getName()
    {
        return self::matches()[4][0].self::matches()[5][0];
    }

    public function getExt()
    {
        return self::matches()[5][0];
    }

    public function getSize()
    {
        if(file_exists($this->filePath))
        {
            return filesize($this->filePath);
        }
    }

    public function getText()
    {
        return file_get_contents($this->filePath);
    }

    public function setText($text)
    {
        return file_put_contents($this->filePath, $text);
    }

    public function appendText($text)
    {
        return file_put_contents($this->filePath, self::getText().$text);
    }

    public function copy($copyPath)
    {
        return copy($this->filePath, $copyPath);
    }

    public function delete($deletePath)
    {
        return unlink($deletePath);
    }

    public function rename($newName)
    {
        return rename($this->filePath, self::getPath().$newName);
    }

    public function replace($newPath)
    {
        return rename($this->filePath, $newPath);
    }

    private function matches()
    {
        preg_match_all('#^(.+/)(.+)(/)(.+\.)(.+)$#', $this->filePath, $matches);
        return $matches;
    }
}