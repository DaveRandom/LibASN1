<?php

namespace LibASN1;

interface Type
{
    const CLASS_UNIVERSAL   = 0x00;
    const CLASS_APPLICATION = 0x01;
    const CLASS_CONTEXT     = 0x02;
    const CLASS_PRIVATE     = 0x03;

    public function isConstructed();
    public function getNumber();
    public function getClass();
}
