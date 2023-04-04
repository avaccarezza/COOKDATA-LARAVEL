<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//extiende de Customer para tener acceso a todos los metodos de Customer
class PanelCustomer extends Customer
{
      protected static function booted(): void
      {
          //metodo vacío para poder acceder a los Customeros unavailable en el panel
      }
      //poder ver las imagenes de los Customers en el panel
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
