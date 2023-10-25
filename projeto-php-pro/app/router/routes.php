<?php

return
    [
      '/' =>  'Home@index',
      '/user/create' => 'User@create',
      '/user/[a-9]+' => 'User@index',
        '/user/[a-9]+/name/[a-z]+' => 'User@show'
    ];