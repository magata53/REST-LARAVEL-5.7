<?php 

namespace App\Transformer;
 
use League\Fractal\TransformerAbstract;
  
class TaskTransformer extends TransformerAbstract {
  
     public function transform($storages) {
         return [
             'id' => $storages->id,
             'name_costumer' => $storages->name_costumer,
             'location_storage' => $storages->location_storage
         ];
     }
  }