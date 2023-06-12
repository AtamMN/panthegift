<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Product
{
    private static $products =[
        [
            'title' => 'judul 1',
            'slug' => 'judul-1',
            'category' => 'Bucket',
            'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita accusamus quaerat dolorem molestiae, illum corrupti ducimus doloremque esse animi consequatur assumenda voluptatem blanditiis placeat, adipisci cum tenetur vitae sunt! Quibusdam?',
            'price' => '10.000'        
        ],
        [
            'title' => 'judul 2',
            'slug' => 'judul-2',
            'category' => 'Baloon',
            'desc' => 'dolor sit amet, consectetur adipisicing elit. Expedita accusamus quaerat dolorem molestiae, illum corrupti ducimus doloremque esse animi consequatur assumenda voluptatem blanditiis placeat, adipisci cum tenetur vitae sunt! Quibusdam?',
            'price' => '13.000'  
        ],
        [
            'title' => 'judul 3',
            'slug' => 'judul-3',
            'category' => 'Trophy',
            'desc' => 'consectetur adipisicing elit. Expedita accusamus quaerat dolorem molestiae, illum corrupti ducimus doloremque esse animi consequatur assumenda voluptatem blanditiis placeat, adipisci cum tenetur vitae sunt! Quibusdam?',
            'price' => '11.000'  
        ]
    ];

    public static function all()
    {
        return self::$products;
    }
}

// Product::create(
//     [
//         'title' => 'judul 1',
//         'slug' => 'judul-1',
//         'category' => 'Trophy',
//         'desc' => 'consectetur adipisicing elit. Expedita accusamus quaerat dolorem molestiae, illum corrupti ducimus doloremque esse animi consequatur assumenda voluptatem blanditiis placeat, adipisci cum tenetur vitae sunt! Quibusdam?',
//         'price' => '11.000'  
//     ]
// )
