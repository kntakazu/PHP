<?php

interface Reader
{
    public function read();
}

interface Writer
{
    public function write();
}

class System implements Reader, Writer
{
    public function write($value)
    {
	// 書き込み処理
    }

    public function read()
    {
  	// 読み込み処理
    }
}
