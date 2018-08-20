<?php

namespace Magestore\HelloWorld\Model;

class PostManagement
{
    public function getPost($param)
    {
        return 'api Get return the $param ' . $param;
    }
}