<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement("
            INSERT INTO products (id, name, description, category, price, image_url, is_featured, on_sale) VALUES
            (1, 'Classic Black Sunglasses', 'Timeless black frame suitable for any occasion.', 'sunglasses', 49.99, 'images/sunglasses1.jpg', 1, 0),
            (2, 'Fashion Aviator Sunglasses', 'Stylish aviator sunglasses with UV protection.', 'sunglasses', 69.99, 'images/sunglasses4.jpg', 1, 1),
            (3, 'Sporty Blue Light Glasses', 'Protect your eyes from digital eye strain with these sporty blue light glasses.', 'sunglasses', 29.99, 'images/sunglasses3.jpg', 0, 0),
            (4, 'Vintage Round Eyeglasses', 'Classic round eyeglasses for a retro look.', 'eyeglasses', 59.99, 'eyeglasses5.jpg', 0, 1),
            (5, 'Designer Octave Glasses Sunglasses', 'Elegant cat-eye sunglasses designed for a chic appearance.', 'eyeglasses', 79.99, 'images/eyeglasses4.jpg', 1, 1),
            (6, 'Square Matte Black Glasses', 'Fun and colorful glasses featuring popular cartoon characters for kids.', 'sunglasses', 39.99, 'images/sunglasses2.jpg', 1, 0),
            (7, 'Coexist Outdoor Glasses', 'Ideal for outdoor activities with polarized lenses for glare reduction.', 'eyeglasses', 89.99, 'images/eyglasses3.jpg', 1, 0),
            (8, 'Minimalist Metal Frame Glasses', 'Sleek and minimalist glasses with a durable metal frame.', 'eyeglasses', 54.99, 'images/eyeglasses1.jpg', 0, 1);
        ");
    }
}
