<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           [
            'name'=>'ASUS i3',
            'price'=>"Rs:100000",
            'discription'=>'i3 prosseser 4gb ram 500gb internalmemory',
            'category'=>'computer',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/asus-vivobook15-x509-1287x800-1567590182.jpg'
           ],
           [
            'name'=>'Dell i3',
            'price'=>"Rs:150000",
            'discription'=>'i3 prosseser 8gb ram 500gb internalmemory',
            'category'=>'computer',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/81YgM9dEjjL._SL1500_.jpg'
           ],
           [
            'name'=>'LG TV',
            'price'=>"Rs:100000",
            'discription'=>'smart tv high quality image',
            'category'=>'TV',
            'gallery'=>'https://res.cloudinary.com/sharp-consumer-eu/image/fetch/w_1100,f_auto,q_auto/https://s3-eu-west-1.amazonaws.com/accounts-media/SHRP/DAM/origin/b4c87500-69e4-11ea-ba67-7ab40277f25b.jpg'
           ],
           [
            'name'=>'DELL Desktop',
            'price'=>"Rs:100000",
            'discription'=>'i3 prosseser 4gb ram 500gb internalmemory',
            'category'=>'computer',
            'gallery'=>'https://images.unsplash.com/photo-1593640495253-23196b27a87f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8ZGVza3RvcCUyMGNvbXB1dGVyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80'
           ],
           [
            'name'=>'Hikvision',
            'price'=>"Rs:10000",
            'discription'=>'high qulity camera best video recoding',
            'category'=>'camera',
            'gallery'=>'https://media.istockphoto.com/photos/security-cctv-camera-in-office-building-picture-id482112104?k=6&m=482112104&s=612x612&w=0&h=UC7dovKEJZ_kEA0beyCU3ieedacyBwv346c3zA6zP2g='
           ],
           [
            'name'=>'Grafic card',
            'price'=>"Rs:100000",
            'discription'=>'4gb ASUS',
            'category'=>'accessories',
            'gallery'=>'https://uidesign.gbtcdn.com/gb_blog/2741/Colorful-GeForce-iGame-GTX-1060-Vulcan-U-6G-Graphics-Card.JPG'
        
           ]
            
        ]);
    }
}
