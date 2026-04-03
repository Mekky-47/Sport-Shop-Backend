<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Create categories first
        $shoes = Category::create(['name' => 'Shoes']);
        $jerseys = Category::create(['name' => 'Jerseys']);
        $equipment = Category::create(['name' => 'Equipment']);

        // Shoes
        Product::create([
            'name'        => 'Nike Air Zoom Pegasus 40',
            'description' => 'Lightweight running shoes with responsive cushioning. Great for daily training runs.',
            'price'       => 129.99,
            'image'       => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=500',
            'category_id' => $shoes->id,
        ]);

        Product::create([
            'name'        => 'Adidas Ultraboost 23',
            'description' => 'Premium running shoes with Boost midsole for maximum energy return.',
            'price'       => 189.99,
            'image'       => 'https://images.unsplash.com/photo-1608231387042-66d1773070a5?w=500',
            'category_id' => $shoes->id,
        ]);

        Product::create([
            'name'        => 'Under Armour HOVR Sonic 5',
            'description' => 'Connected running shoes with zero gravity feel and energy return.',
            'price'       => 109.99,
            'image'       => 'https://images.unsplash.com/photo-1539185441755-769473a23570?w=500',
            'category_id' => $shoes->id,
        ]);

        Product::create([
            'name'        => 'Puma Velocity Nitro 2',
            'description' => 'Fast and responsive training shoe with NITRO foam midsole.',
            'price'       => 99.99,
            'image'       => 'https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?w=500',
            'category_id' => $shoes->id,
        ]);

        // Jerseys
        Product::create([
            'name'        => 'FC Barcelona Home Jersey 2024',
            'description' => 'Official replica jersey with moisture-wicking Dri-FIT technology.',
            'price'       => 79.99,
            'image'       => 'https://images.unsplash.com/photo-1614632537190-23e4146777db?w=500',
            'category_id' => $jerseys->id,
        ]);

        Product::create([
            'name'        => 'Real Madrid Away Jersey 2024',
            'description' => 'Lightweight breathable jersey. Official licensed product.',
            'price'       => 84.99,
            'image'       => 'https://images.unsplash.com/photo-1580706483913-b6ea7db483a0?w=500',
            'category_id' => $jerseys->id,
        ]);

        Product::create([
            'name'        => 'NBA Lakers Training Jersey',
            'description' => 'Classic Lakers purple & gold jersey. Comfortable for game day or casual wear.',
            'price'       => 69.99,
            'image'       => 'https://images.unsplash.com/photo-1546519638-68e109498ffc?w=500',
            'category_id' => $jerseys->id,
        ]);

        Product::create([
            'name'        => 'Egypt National Football Shirt',
            'description' => 'Official Egyptian national team shirt. Show your support!',
            'price'       => 59.99,
            'image'       => 'https://images.unsplash.com/photo-1559698801-7b42a0e5be29?w=500',
            'category_id' => $jerseys->id,
        ]);

        // Equipment
        Product::create([
            'name'        => 'Adjustable Dumbbell Set (5–25kg)',
            'description' => 'Space-saving adjustable dumbbells. Perfect for home workouts. Rubber coated plates.',
            'price'       => 149.99,
            'image'       => 'https://images.unsplash.com/photo-1534438327276-14e5300c3a48?w=500',
            'category_id' => $equipment->id,
        ]);

        Product::create([
            'name'        => 'Resistance Bands Set (5 Levels)',
            'description' => 'Full set of latex resistance bands for strength training and stretching.',
            'price'       => 24.99,
            'image'       => 'https://images.unsplash.com/photo-1598289431512-b97b0917affc?w=500',
            'category_id' => $equipment->id,
        ]);

        Product::create([
            'name'        => 'Yoga Mat Pro (6mm)',
            'description' => 'Non-slip extra thick yoga mat. Ideal for yoga, pilates, and stretching.',
            'price'       => 39.99,
            'image'       => 'https://images.unsplash.com/photo-1518611012118-696072aa579a?w=500',
            'category_id' => $equipment->id,
        ]);

        Product::create([
            'name'        => 'Pull-Up Bar (Doorframe)',
            'description' => 'No-drill doorframe pull-up bar. Supports up to 150kg. Easy install.',
            'price'       => 44.99,
            'image'       => 'https://images.unsplash.com/photo-1598971639058-a84a96b5fe61?w=500',
            'category_id' => $equipment->id,
        ]);

        Product::create([
            'name'        => 'Jump Rope Speed Cable',
            'description' => 'Ball-bearing speed rope. Great for HIIT, boxing, and cardio workouts.',
            'price'       => 19.99,
            'image'       => 'https://images.unsplash.com/photo-1434682881908-b43d0467b798?w=500',
            'category_id' => $equipment->id,
        ]);
    }
}
