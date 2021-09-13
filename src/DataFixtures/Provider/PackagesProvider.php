<?php

namespace App\DataFixtures\Provider;

class PackagesProvider
{
    public static function Delivery()
    {
        $delivery = [
            'BricoDépot', 'Magasin Vichy', 'Magasin Moulins', 'Magasin Clermont Ferrand (IKEA)', 'St Pourçain sur Sioule / Varennes sur Allier'
        ];
        shuffle($delivery);
        return $delivery;
    } 

    public static function Towns()
    {
        $towns = [
            'Clermont Ferrand', 'Clermont Ferrand ', 'Paris', 'Bordeaux', 'Marseille', 'Strasbourg', 'Rennes', 'Lille',
        ];
        shuffle($towns);
        return $towns;
    }

    public static function Price()
    {
        $prices = [
            '50', '60', '100', '20', '160', '330', '430', '470', '510', '530', '550'
        ];
        shuffle($prices);
        return $prices;
    }
}