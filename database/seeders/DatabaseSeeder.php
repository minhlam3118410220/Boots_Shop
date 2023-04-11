<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 2,
                'name' => 'admin2',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => null,
                'level' => 0,
                'description' => null,
            ],
            [
                'id' => 3,
                'name' => 'Shane Lynch',
                'email' => 'ShaneLynch@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-0.png',
                'level' => 1,
                'description' => 'Aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum bore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud amodo'
            ],
            [
                'id' => 4,
                'name' => 'Brandon Kelley',
                'email' => 'BrandonKelley@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-1.png',
                'level' => 1,
                'description' => null,
            ],
            [
                'id' => 5,
                'name' => 'Roy Banks',
                'email' => 'RoyBanks@gmail.com',
                'password' => Hash::make('123456'),
                'avatar' => 'avatar-2.png',
                'level' => 1,
                'description' => null,
            ],
        ]);

        DB::table('blogs')->insert([
            [
                'user_id' => 1,
                'title' => 'THE MARS WOLF Fall/Winter 2022 - Breaking Limits, Creating Passions',
                'image' => 'blog-1.jpg',
                'category' => 'Wolves',
                'content' => '',
            ],
            [
                'user_id' => 2,
                'title' => 'S-WOLF COLLECTION – A DYNAMITE SUMMER',
                'image' => 'blog-2.jpg',
                'category' => 'Wolves',
                'content' => '',
            ],
            [
                'user_id' => 3,
                'title' => 'NIGHTLIFE – The Lookbook',
                'image' => 'blog-3.jpg',
                'category' => 'Wolves',
                'content' => '',
            ],
            [
                'user_id' => 4,
                'title' => 'WHAT NEED THIS SUMMER? – THE WOLF MINIMAL LOAFER',
                'image' => 'blog-4.jpg',
                'category' => 'Wolves',
                'content' => '',
            ],
            [
                'user_id' => 5,
                'title' => 'HARRY STYLES GENUINE BOOTS ADDICTIVE WOOD',
                'image' => 'blog-5.jpg',
                'category' => 'Wolves',
                'content' => '',
            ],
            [
                'user_id' => 6,
                'title' => 'FLANNEL AND Its LONG HISTORY',
                'image' => 'blog-6.jpg',
                'category' => 'Wolves',
                'content' => '',
            ],
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Calvin Klein',
            ],
            [
                'name' => 'Diesel',
            ],
            [
                'name' => 'Polo',
            ],
            [
                'name' => 'Tommy Hilfiger',
            ],
        ]);

        DB::table('product_categories')->insert([
            [
                'name' => 'Men',
            ],
            [
                'name' => 'Lady',
            ],
            [
                'name' => 'Accessories',
            ],
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE MARS CHELSEA BOOT - BLACK SUEDE',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 6cm.
                The Signature logo is embossed on the outer collar of the shoe.',
                'content' => '',
                'price' => 105.5,
                'qty' => 10,
                'discount' => 98.5,
                'weight' => 1.2,
                'sku' => 'TMWCSBBS-1',
                'featured' => true,
                'tag' => 'ChelseaBoot',
            ],
            [
                'id' => 2,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE MINIMAL CHELSEA BOOT - TAN',
                'description' => 'PRODUCT INFORMATION
                Color: Tan suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 3,8cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 85.5,
                'qty' => 10,
                'discount' => 78.5,
                'weight' => 1.2,
                'sku' => 'NMWCBT-1',
                'featured' => true,
                'tag' => 'ChelseaBoot',
            ],
            [
                'id' => 3,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE MARS HIGH COMBAT BOOT - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 6cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 125.5,
                'qty' => 10,
                'discount' => 117.5,
                'weight' => 1.3,
                'sku' => 'TMWHCBBB-1',
                'featured' => true,
                'tag' => 'CombatBoot',
            ],
            [
                'id' => 4,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE WOLF MARBE CHUNKY COMBAT BOOT - BEIGE',
                'description' => 'PRODUCT INFORMATION
                Color: beige suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 5.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => 'TMCKCBBB-0',
                'featured' => true,
                'tag' => 'CombatBoot',
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE MODERN EVA DERBY - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 4.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Derby',
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE CHUNKY DERBY - BLACK WHITE',
                'description' => 'PRODUCT INFORMATION
                Color: black white suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 4.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Derby',
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE SEAN CHUNKY LOAFER - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 5.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 94.5,
                'qty' => 10,
                'discount' => 91.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Loafer',
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'THE MINIMAL LOAFER - TAN',
                'description' => 'PRODUCT INFORMATION
                Color: tan suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 5.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 94.5,
                'qty' => 10,
                'discount' => 91.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Loafer',
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE MARS CHELSEA BOOT - BLACK SUEDE',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 6cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 105.5,
                'qty' => 10,
                'discount' => 98.5,
                'weight' => 1.2,
                'sku' => 'TMWCSBBS-1',
                'featured' => true,
                'tag' => 'ChelseaBoot',
            ],
            [
                'id' => 10,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE MINIMAL CHELSEA BOOT - TAN',
                'description' => 'PRODUCT INFORMATION
                Color: Tan suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 3,8cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 85.5,
                'qty' => 10,
                'discount' => 78.5,
                'weight' => 1.2,
                'sku' => 'NMWCBT-1',
                'featured' => true,
                'tag' => 'ChelseaBoot',
            ],
            [
                'id' => 11,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE MARS HIGH COMBAT BOOT - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 6cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 125.5,
                'qty' => 10,
                'discount' => 117.5,
                'weight' => 1.3,
                'sku' => 'TMWHCBBB-1',
                'featured' => true,
                'tag' => 'CombatBoot',
            ],
            [
                'id' => 12,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE WOLF MARBE CHUNKY COMBAT BOOT - BEIGE',
                'description' => 'PRODUCT INFORMATION
                Color: beige suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 5.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => 'TMCKCBBB-0',
                'featured' => true,
                'tag' => 'CombatBoot',
            ],
            [
                'id' => 13,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THEWOLF MODERN EVA DERBY - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 4.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Derby',
            ],
            [
                'id' => 14,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE MODERN EVA DERBY - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 4.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Derby',
            ],
            [
                'id' => 15,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE CHUNKY DERBY - BLACK WHITE',
                'description' => 'PRODUCT INFORMATION
                Color: black white suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 4.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 101.5,
                'qty' => 10,
                'discount' => 95.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Derby',
            ],
            [
                'id' => 16,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE SEAN CHUNKY LOAFER - BLACK',
                'description' => 'PRODUCT INFORMATION
                Color: black suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 5.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 94.5,
                'qty' => 10,
                'discount' => 91.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Loafer',
            ],
            [
                'id' => 17,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'THE MINIMAL LOAFER - TAN',
                'description' => 'PRODUCT INFORMATION
                Color: tan suede.
                Leather material: imported cowhide.
                Sole material: high quality rubber, with high adhesion.
                Inner lining: goatskin + high quality canvas.
                Elastic: has good elasticity, durable over time.
                Heel height: 5.5cm.
                The Signature logo is embossed on the outer collar of the shoe.
                The base mold is designed and manufactured according to the exclusive design of THEWOLF.
                Products are DESIGNED AND PROCESSED BY VIETNAMESE PEOPLE.',
                'content' => '',
                'price' => 94.5,
                'qty' => 10,
                'discount' => 91.5,
                'weight' => 1.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Loafer',
            ],
            [
                'id' => 18,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'THE SIGNATURE SHOE HORN',
                'description' => 'PRODUCT INFORMATION
                Leather material: Double layer cowhide.
                Metal material: Stainless alloy.
                Exclusively designed + signature logo of THEWOLF.
                Keychain design attached, increase the level of convenience and can be used as a fashion accessory.',
                'content' => '',
                'price' => 20.5,
                'qty' => 10,
                'discount' => 17.5,
                'weight' => 0.3,
                'sku' => '4466EVA-0',
                'featured' => true,
                'tag' => 'Accessory',
            ],
            [
                'id' => 19,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'THE SIGNATURE SHOE HORN',
                'description' => 'PRODUCT INFORMATION
                Color: Black
                Leather strap material: Cowhide outside, smooth cowhide inside.
                Metal material: Stainless alloy.
                Exclusive design belt + Signature logo THEWOLF.
                Design 2 adjacent discs to increase the bunker + Signature Logo THEWOLF.
                Durable 3mm thick leather strap.
                Size: 100cm, 110cm, 120cm.
                Included accessories: 4mm punch tool.',
                'content' => '',
                'price' => 32.5,
                'qty' => 10,
                'discount' => 29.5,
                'weight' => 0.3,
                'sku' => 'TSWBB-1',
                'featured' => true,
                'tag' => 'Accessory',
            ],
            [
                'id' => 20,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => 'THE SIGNATURE SHOE HORN',
                'description' => 'PRODUCT INFORMATION
                Color: BLACK
                Leather material: Imported cowhide
                Hand sewn by Vietnamese hands.',
                'content' => '',
                'price' => 20.5,
                'qty' => 10,
                'discount' => 17.5,
                'weight' => 0.4,
                'sku' => 'TWCHD',
                'featured' => true,
                'tag' => 'Accessory',
            ],
           
           
           
        ]);

        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.jpg',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-1.jpg',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-2.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-1.jpg',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-2.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-1.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-2.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-1.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-2.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-1.jpg',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-2.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-1.jpg',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-2.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-1.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-2.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-1.jpg',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-2.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-1.jpg',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-2.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-1.jpg',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-2.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-1.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-2.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-1.jpg',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-2.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-1.jpg',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-2.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-1.jpg',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-2.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-1.jpg',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-2.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-1.jpg',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-2.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-1.jpg',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-2.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-1.jpg',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-2.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-1.jpg',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-2.jpg',
            ],
            

           
        ]);

        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 2,
                'color' => 'blue',
                'size' => '40',
                'qty' => 5,
            ],
            [
                'product_id' => 1,
                'color' => 'black',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 4,
                'color' => 'blue',
                'size' => '40',
                'qty' => 5,
            ],
            [
                'product_id' => 5,
                'color' => 'blue',
                'size' => '40',
                'qty' => 5,
            ],
            [
                'product_id' => 6,
                'color' => 'yellow',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 7,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 8,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 9,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 10,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 11,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 12,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 13,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 14,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 15,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 16,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 17,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 18,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 19,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            [
                'product_id' => 20,
                'color' => 'violet',
                'size' => '40',
                'qty' => 10,
            ],
            

        ]);

        DB::table('product_comments')->insert([
            [
                'product_id' => 1,
                'user_id' => 4,
                'email' => 'BrandonKelley@gmail.com',
                'name' => 'Brandon Kelley',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 2,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 3,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 4,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 5,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' =>6,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 7,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 8,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 9,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 10,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 11,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 12,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 13,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 14,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 15,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 16,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 17,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 18,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 19,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],
            [
                'product_id' => 20,
                'user_id' => 5,
                'email' => 'RoyBanks@gmail.com',
                'name' => 'Roy Banks',
                'messages' => 'Nice !',
                'rating' => 4,
            ],

        ]);
    }
}