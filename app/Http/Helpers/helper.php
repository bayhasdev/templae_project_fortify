<?php

  function isCurrentUrlActive($path)
{
    return  request()->is($path) ? 'active' : '' ;
}