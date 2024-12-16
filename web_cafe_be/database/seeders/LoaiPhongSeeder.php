<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiPhongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loai_phongs')->delete();

        DB::table('loai_phongs')->truncate();

        DB::table('loai_phongs')->insert([
            [
                'name'          => 'Phòng Deluxe',
                'description'   => 'Phòng rộng rãi, sang trọng, sang trọng',
                'image'         => 'https://th.bing.com/th/id/R.2db1b1570e878c81d49fd8c90fdafb97?rik=e46pIzNXU0BFjA&pid=ImgRaw&r=0',
            ],
            [
                'name'          => 'Phòng Superior',
                'description'   => 'Phòng tiện nghi hiện đại,sang trọng, đẹp nhắm',
                'image'         => 'https://hoangminhdecor.com/wp-content/uploads/2020/11/phong-Superior-khach-san.jpg',
            ],
            [
                'name'          => 'Phòng Standard',
                'description'   => 'Phòng tiêu chuẩn giá tốt,sang trọng, đẹp nhắm',
                'image'         => 'https://i.pinimg.com/736x/5a/c2/97/5ac2970066122bb62d91658c2549317f.jpg',
            ],
            [
                'name'          => 'Phòng Business',
                'description'   => 'Phòng dành riêng cho khách công tác',
                'image'         => 'https://i.pinimg.com/736x/c6/2c/f5/c62cf5cbbd417b9e60fe66d9961b866b.jpg',
            ],
            [
                'name'          => 'Phòng Honeymoon',
                'description'   => 'Phòng lãng mạn dành cho các cặp đôi',
                'image'         => 'https://i.pinimg.com/736x/44/88/80/4488808060e13920eec11bb8f977bcd6.jpg',
            ],
            [
                'name'          => 'Phòng Penthouse',
                'description'   => 'Phòng trên tầng cao nhất với không gian sang trọng',
                'image'         => 'https://i.pinimg.com/736x/69/df/1f/69df1f93d0c6d9449f74c85046fa5bfc.jpg',
            ],
            [
                'name'          => 'Phòng Dormitory',
                'description'   => 'Phòng ngủ tập thể, giá cả hợp lý,sang trọng',
                'image'         => 'https://i.pinimg.com/736x/39/65/5c/39655c0a443b92386851303ff41ccee2.jpg',
            ],
            [
                'name'          => 'Phòng Suite',
                'description'   => 'Phòng thượng hạng, không gian rộng rãi với dịch vụ đặc biệt',
                'image'         => 'https://i.pinimg.com/736x/81/26/33/812633ac38fa71c80484d99119060333.jpg',
            ],
            [
                'name'          => 'Phòng Family',
                'description'   => 'Phòng dành cho gia đình, tiện nghi và thoải mái',
                'image'         => 'https://i.pinimg.com/736x/ed/3d/06/ed3d06d62a07bb9160c62166fa1f4ea0.jpg',
            ],
            [
                'name'          => 'Phòng VIP',
                'description'   => 'Phòng sang trọng bậc nhất, dành cho khách hàng đặc biệt',
                'image'         => 'https://i.pinimg.com/736x/d6/00/d2/d600d26b993fcd900403d12d96acde03.jpg',
            ],
        ]);
    }
}
