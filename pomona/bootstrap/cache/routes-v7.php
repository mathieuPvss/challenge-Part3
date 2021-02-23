<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mep6RK4Md8jCAHle',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EnyYYG9JSoioparR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/inscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WfdEiN6X4EEtOQBO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bcp5ALh9kVAjtric',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/connexion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FCDckos8YaSylaQZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dWBZbBCmRUBAF92B',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::stHHvMRC4zeWFS8a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajouter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NmCXx5Chi9B4Vo3K',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ajoutmasse' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::04cgwvZHBCmftkWs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
    ),
    3 => 
    array (
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::Mep6RK4Md8jCAHle' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":289:{@nw6601EBBsuACgEfVQ5McWhABfwlnedd3B5OgzJnGVI=.a:5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000041335bb00000000729af395";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Mep6RK4Md8jCAHle',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EnyYYG9JSoioparR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":256:{@RZ1FbLELPwRdpIrDD0w6dJjJ2NpACN4hzA95Dj1uXWM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000041335b900000000729af395";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::EnyYYG9JSoioparR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WfdEiN6X4EEtOQBO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'inscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompteController@formulaire',
        'controller' => 'App\\Http\\Controllers\\CompteController@formulaire',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::WfdEiN6X4EEtOQBO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bcp5ALh9kVAjtric' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'inscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompteController@inscrit',
        'controller' => 'App\\Http\\Controllers\\CompteController@inscrit',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::bcp5ALh9kVAjtric',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FCDckos8YaSylaQZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'connexion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompteController@connect',
        'controller' => 'App\\Http\\Controllers\\CompteController@connect',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::FCDckos8YaSylaQZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dWBZbBCmRUBAF92B' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'connexion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CompteController@connecter',
        'controller' => 'App\\Http\\Controllers\\CompteController@connecter',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::dWBZbBCmRUBAF92B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::stHHvMRC4zeWFS8a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUploadController@ajout',
        'controller' => 'App\\Http\\Controllers\\FileUploadController@ajout',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::stHHvMRC4zeWFS8a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NmCXx5Chi9B4Vo3K' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'ajouter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUploadController@ajouter',
        'controller' => 'App\\Http\\Controllers\\FileUploadController@ajouter',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::NmCXx5Chi9B4Vo3K',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::04cgwvZHBCmftkWs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ajoutmasse',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\FileUploadController@ajout_en_masse',
        'controller' => 'App\\Http\\Controllers\\FileUploadController@ajout_en_masse',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::04cgwvZHBCmftkWs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
