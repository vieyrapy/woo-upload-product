<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 *
 * @property $id
 * @property $lista_id
 * @property $sku
 * @property $nombre
 * @property $descripcion
 * @property $precionormal
 * @property $categorias
 * @property $imagenes
 * @property $created_at
 * @property $updated_at
 *
 * @property Lista $lista
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Produto extends Model
{
    
    static $rules = [
		'lista_id' => 'required',
		'sku' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'precionormal' => 'required',
		'categorias' => 'required',
		'imagenes' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['lista_id','sku','nombre','descripcion','precionormal','categorias','imagenes'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lista()
    {
        return $this->hasOne('App\Models\Lista', 'id', 'lista_id');
    }
    

}
