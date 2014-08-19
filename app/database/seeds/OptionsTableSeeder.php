<?php

class OptionsTableSeeder extends Seeder
{
    public function run()
    {
        $options = [
            [
                'key'   =>  'site.name',
                'value' =>  'Hello!',
            ],
            [
                'key'   =>  'site.slogan',
                'value' =>  'Hello World!',
            ],
            [
                'key'   =>  'site.description',
                'value' =>  'Hello!',
            ],
            [
                'key'   =>  'site.keywords',
                'value' =>  'pingpong, hello',
            ],
            [
                'key'   =>  'site.author',
                'value' =>  'Pingpong Labs',
            ],
        ];

        foreach ($options as $option)
        {
            Option::create($option);
        }
    }
}
