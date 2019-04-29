<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Table as TableEloquent;
use \App\Order as OrderEloquent;

class Dining_Table extends Model
{ protected $table = 'dining_tables';
    protected $fillable = [
        'order_id',
        'table_id'
    ];
    public function order(){
        return $this->belongsTo(OrderEloquent::class);
    }
    public function tables(){
        return $this->hasMany(TableEloquent::class);
    }
}
