<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//extiende de User para tener acceso a todos los metodos de User
class PanelUser extends User
{
      protected static function booted(): void
      {
          //metodo vacío para poder acceder a los Users unavailable en el panel
      }
      //poder ver las imagenes de los Users en el panel
      public function getForeignKey()
      {
        $parent = get_parent_class($this);
        return(new $parent)->getForeignKey();
      }
      public function getMorphClass()
      {
        $parent = get_parent_class($this);
        return(new $parent)->getMorphClass();
      }
}
