<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    public $i;
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        for ($this->i = 1; $this->i < 10; $this->i++) {
            DB::table('posts')->insert([
                'title' => "Post Title $this->i",
                'theme' => $this->i % 2 == 1 ? 'Web Developer' : 'Mobile Developer',
                'date' => "Jan $this->i, 2020",
                'image' => "https://source.unsplash.com/random/326x260",
                'text1' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident amet minus, id corporis aliquam impedit culpa repudiandae eius temporibus itaque blanditiis hic asperiores a facilis veniam, saepe qui, laborum optio voluptatibus! Quibusdam debitis nisi repudiandae nostrum veniam voluptatem quas maxime quasi esse accusamus corporis mollitia, at minus recusandae error soluta nemo possimus sequi quod sapiente libero dolores delectus! Quia similique recusandae error eligendi placeat sint rem autem, natus modi dolorum cumque et voluptas, saepe molestias commodi repellendus. Nesciunt nihil mollitia aut dolorum fugit assumenda ipsum consequuntur possimus sunt voluptatem, qui reiciendis culpa tempora repudiandae architecto animi vitae nam. Atque veritatis quae velit. Aliquid, doloribus, cumque voluptatem eaque eius quae animi totam nostrum illum consectetur corporis atque quas tempora quod corrupti similique. Accusantium, non pariatur maxime quae atque excepturi. Id hic, dignissimos rem, possimus vero corrupti ullam suscipit dolorum tempore animi nisi itaque vel assumenda voluptates magnam aliquam minima esse. Deserunt eius, facilis perspiciatis quae doloremque reprehenderit repellendus soluta, veniam velit ex praesentium, eligendi ipsum quidem nostrum vero voluptatibus suscipit natus architecto itaque dolore. Tempore asperiores mollitia maiores quidem beatae cumque eos accusantium vero facilis molestiae, aut voluptatem unde possimus tempora facere consectetur, libero sequi provident ea. Error natus",
                'text2' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident amet minus, id corporis aliquam impedit culpa repudiandae eius temporibus itaque blanditiis hic asperiores a facilis veniam, saepe qui, laborum optio voluptatibus! Quibusdam debitis nisi repudiandae nostrum veniam voluptatem quas maxime quasi esse accusamus corporis mollitia, at minus recusandae error soluta nemo possimus sequi quod sapiente libero dolores delectus! Quia similique recusandae error eligendi placeat sint rem autem, natus modi dolorum cumque et voluptas, saepe molestias commodi repellendus. Nesciunt nihil mollitia aut dolorum fugit assumenda ipsum consequuntur possimus sunt voluptatem, qui reiciendis culpa tempora repudiandae architecto animi vitae nam. Atque veritatis quae velit. Aliquid, doloribus, cumque voluptatem eaque eius quae animi totam nostrum illum consectetur corporis atque quas tempora quod corrupti similique. Accusantium, non pariatur maxime quae atque excepturi. Id hic, dignissimos rem, possimus vero corrupti ullam suscipit dolorum tempore animi nisi itaque vel assumenda voluptates magnam aliquam minima esse. Deserunt eius, facilis perspiciatis quae doloremque reprehenderit repellendus soluta, veniam velit ex praesentium, eligendi ipsum quidem nostrum vero voluptatibus suscipit natus architecto itaque dolore. Tempore asperiores mollitia maiores quidem beatae cumque eos accusantium vero facilis molestiae, aut voluptatem unde possimus tempora facere consectetur, libero sequi provident ea. Error natus",
                'text3' => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident amet minus, id corporis aliquam impedit culpa repudiandae eius temporibus itaque blanditiis hic asperiores a facilis veniam, saepe qui, laborum optio voluptatibus! Quibusdam debitis nisi repudiandae nostrum veniam voluptatem quas maxime quasi esse accusamus corporis mollitia, at minus recusandae error soluta nemo possimus sequi quod sapiente libero dolores delectus! Quia similique recusandae error eligendi placeat sint rem autem, natus modi dolorum cumque et voluptas, saepe molestias commodi repellendus. Nesciunt nihil mollitia aut dolorum fugit assumenda ipsum consequuntur possimus sunt voluptatem, qui reiciendis culpa tempora repudiandae architecto animi vitae nam. Atque veritatis quae velit. Aliquid, doloribus, cumque voluptatem eaque eius quae animi totam nostrum illum consectetur corporis atque quas tempora quod corrupti similique. Accusantium, non pariatur maxime quae atque excepturi. Id hic, dignissimos rem, possimus vero corrupti ullam suscipit dolorum tempore animi nisi itaque vel assumenda voluptates magnam aliquam minima esse. Deserunt eius, facilis perspiciatis quae doloremque reprehenderit repellendus soluta, veniam velit ex praesentium, eligendi ipsum quidem nostrum vero voluptatibus suscipit natus architecto itaque dolore. Tempore asperiores mollitia maiores quidem beatae cumque eos accusantium vero facilis molestiae, aut voluptatem unde possimus tempora facere consectetur, libero sequi provident ea. Error natus"
            ]);
        }
    }
}