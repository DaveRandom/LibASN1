<?php

namespace LibASN1;

interface ConstructableType extends ValuedType
{
    public function hasMore();
    public function getChunk();
}
