<?php

class Contacts
{
    public $filename;
    public $filepath;

    public function __construct($filename)
    {

        $this->filepath = $filename;
        try {
            $this->filename = fopen($this->filepath, 'rw');
            if ($this->filename === false) {
                throw new Exception("File was not loaded");
            }
        } catch (Exception $err) {
            $this->filename = fopen($filename, 'rw') or die("file not available");
        }
    }

    public function setData($data)
    {

        $this->filename = fopen($this->filepath, 'a');

        fwrite($this->filename, "\n&");

        foreach ($data as $val) {
            fwrite($this->filename, $val . "*");
        }
        fwrite($this->filename, "&\n");
        // fwrite($this->filename, $data);
    }

    public function getData()
    {

        $this->filename = fopen($this->filepath, 'r');

        $filesize = filesize($this->filepath);
        return @fread($this->filename, $filesize);
    }


    public function removeData($rindex)
    {
        $gdata = $this->getData();
        $gdata = explode("&", $gdata);
        $index = 0;

        $this->filename = fopen($this->filepath, 'w');

        foreach ($gdata as $val) {

            $datain = explode("*", $val);

            if (
                   isset($datain[0])
                && isset($datain[1])
                && isset($datain[2])
                && isset($datain[3])
                && isset($datain[4])
            ) {
                if ((int)$rindex !== $index) {
                    fwrite($this->filename, "\n&" . $datain[0] . "*"
                        . $datain[1] . "*"
                        . $datain[2] . "*"
                        . $datain[3] . "*"
                        . $datain[4] . "&\n");
                }
                $index++;
            }
        }
    }
}
