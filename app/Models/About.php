<?php

namespace App\Models;

class About
{
    private static $About_team = [
        [
            "image" => "image/foto_atam.jpeg",
            "name" => "Muhammad Khatam Ramadhan",
            "instagram" =>"https://www.instagram.com/atam_mn/",
            "whatsapp" => "https://wa.me/6283192679651",
            "github" => "https://github.com/atamMN"
        ],
        [
            "image" => "image/foto_alex.jpeg",
            "name" => "Muhammad Alexander Dzulkarnain",
            "instagram" =>"https://www.instagram.com/Alexanderdz__/",
            "whatsapp" => "https://wa.me/6287826542412",
            "github" => "https://github.com/alexanderdz27"
        ],
        [
            "image" => "image/foto_bagas.jpeg",
            "name" => "Bagas Arjun Valentino",
            "instagram" =>"https://www.instagram.com/Barval363/",
            "whatsapp" => "https://wa.me/6283119642489",
            "github" => "https://github.com/BRVL363"
        ]
    ];

    public static function all()
    {
        return collect(self::$About_team);
    }
}