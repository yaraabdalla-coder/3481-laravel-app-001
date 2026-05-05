<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SystemController extends Controller
{

  private $Models = [
    'Hospital',
    'Library',
    'School',
    'Cinama',
    'Cafe',

  ];
  public function models()
{
    foreach ($this->Models as $model) {
        Artisan::call('make:model', [
            'name' => $model,
            '-a' => true,
        ]);
    }

    return 'done';
}
  
  public function controllers()
  {


    foreach ($this->Models as $class)
    Artisan::call('make:controller',  [
        'name' => $class . 'controllers',
        '--api' => true,
        '--no-interaction' => true,

      ]);
  }

  public function migrations()
  {


    foreach ($this->Models as $table) {
      Artisan::call('make:migration', [
        'name' => "create_$table"
      ]);

      sleep(1);
    }
  }
}
