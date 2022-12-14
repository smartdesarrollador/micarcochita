<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('productos')->insert([
            'idProducto' => 1,
            'nombreProducto' => '1 Pollo a la Brasa con papas fritas y ensalada',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-1.jpg',
            'imagen' => '/storage/imagenes/productos/producto-1.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 60,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 2,
            'nombreProducto' => '1 Pollo a la Brasa',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-2.jpg',
            'imagen' => '/storage/imagenes/productos/producto-2.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 50,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 3,
            'nombreProducto' => '1 Pollo a la Brasa con papas y Inca Kola 1.5LT',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-3.jpg',
            'imagen' => '/storage/imagenes/productos/producto-3.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 68,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 4,
            'nombreProducto' => '1 Pollo con papas fritas, ensalada y Pepsi 1.5LT',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-4.jpg',
            'imagen' => '/storage/imagenes/productos/producto-4.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 65,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 5,
            'nombreProducto' => '1/2 Pollo con papas fritas y ensalada',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-5.jpg',
            'imagen' => '/storage/imagenes/productos/producto-5.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 35,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 6,
            'nombreProducto' => '1/2 Pollo + Gaseosa de 1LT',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-6.jpg',
            'imagen' => '/storage/imagenes/productos/producto-6.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 40,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 7,
            'nombreProducto' => '1 Pollo a la Brasa con papas fritas y ensalada',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-1.jpg',
            'imagen' => '/storage/imagenes/productos/producto-1.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 60,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 8,
            'nombreProducto' => '1 Pollo a la Brasa',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-2.jpg',
            'imagen' => '/storage/imagenes/productos/producto-2.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 50,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 9,
            'nombreProducto' => '1 Pollo a la Brasa con papas y Inca Kola 1.5LT',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-3.jpg',
            'imagen' => '/storage/imagenes/productos/producto-3.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 68,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 10,
            'nombreProducto' => '1 Pollo con papas fritas, ensalada y Pepsi 1.5LT',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-4.jpg',
            'imagen' => '/storage/imagenes/productos/producto-4.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 65,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 11,
            'nombreProducto' => '1/2 Pollo con papas fritas y ensalada',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-5.jpg',
            'imagen' => '/storage/imagenes/productos/producto-5.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 35,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 12,
            'nombreProducto' => '1/2 Pollo + Gaseosa de 1LT',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-6.jpg',
            'imagen' => '/storage/imagenes/productos/producto-6.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 40,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 13,
            'nombreProducto' => '1/4 Pecho con papas fritas y ensalada',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/producto-7.jpg',
            'imagen' => '/storage/imagenes/productos/producto-7.jpg',
            'idTipoProducto' => 1,
            'productoObservaciones' => null,
            'precioProducto' => 22,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 14,
            'nombreProducto' => 'Chicha 1LT',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-1.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-1.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 15,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 15,
            'nombreProducto' => 'Chicha 500 ML',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-4.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-4.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 8,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 16,
            'nombreProducto' => 'Inca Kola 1.5 LT',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-5.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-5.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 10,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 17,
            'nombreProducto' => 'Inca Kola 600 ML',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-2.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-2.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 4,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 18,
            'nombreProducto' => 'Pepsi 1 LT',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-7.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-7.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 5,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 19,
            'nombreProducto' => 'Pepsi 1.5 LT',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-8.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-8.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 7,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 20,
            'nombreProducto' => 'Coca Cola 1.5 LT',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-3.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-3.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 10,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 21,
            'nombreProducto' => 'Coca Cola 600 ML',
            'descripcionProducto' => 'Bebida',
            'imagenProducto' => '/storage/imagenes/productos/bebida-6.jpg',
            'imagen' => '/storage/imagenes/productos/bebida-6.jpg',
            'idTipoProducto' => 2,
            'productoObservaciones' => null,
            'precioProducto' => 4,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);

        DB::table('productos')->insert([
            'idProducto' => 22,
            'nombreProducto' => 'Parrilla',
            'descripcionProducto' => '(Este producto incluye salsas)',
            'imagenProducto' => '/storage/imagenes/productos/categoria-parrillas.png',
            'imagen' => '/storage/imagenes/productos/categoria-parrillas.png',
            'idTipoProducto' => 3,
            'productoObservaciones' => null,
            'precioProducto' => 50,
            'stock' => 'YES',
            'estado' => 'ACTIVO',
            'posicion' => null,
            'acumulaNPuntos' => 4,
            'giftValor' => 0,
            'programable' => 'FALSE',
            'esNuevo' => 'FALSE',
            'precioDescuento' => 0,
            'store_id' => 1,
        ]);
    }
}
