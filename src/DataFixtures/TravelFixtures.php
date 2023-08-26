<?php

namespace App\DataFixtures;

use App\Entity\Travel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TravelFixtures extends Fixture
{
    const TRAVELS = [
        [
            'title' => 'San Francisco',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Alex_Cagwin_2015_%28Unsplash%29.jpg/1280px-Alex_Cagwin_2015_%28Unsplash%29.jpg',
        ],
        [
            'title' => 'Les Seychelles',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
            'picture' => 'https://upload.wikimedia.org/wikipedia/commons/7/79/Mahe_13.jpg',
        ],
        [
          'title' => 'New York',
          'description' => 'Nisl nisi scelerisque eu ultrices. Vitae ultricies leo integer malesuada. Consectetur purus ut faucibus pulvinar elementum integer enim neque. Netus et malesuada fames ac turpis egestas sed. Faucibus a pellentesque sit amet porttitor eget. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque id nibh tortor id. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Adipiscing diam donec adipiscing tristique risus. Quis blandit turpis cursus in hac. Scelerisque eleifend donec pretium vulputate sapien. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Long_Island_City_New_York_May_2015_panorama_3.jpg/640px-Long_Island_City_New_York_May_2015_panorama_3.jpg',
      ],
      [
          'title' => 'Paris',
          'description' => 'In arcu cursus euismod quis viverra nibh cras pulvinar. Cursus eget nunc scelerisque viverra mauris in. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Duis at consectetur lorem donec massa sapien faucibus et molestie. Vel turpis nunc eget lorem dolor. Ullamcorper sit amet risus nullam eget felis eget. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Curabitur gravida arcu ac tortor. Suscipit tellus mauris a diam maecenas sed. Pellentesque habitant morbi tristique senectus et netus. Turpis in eu mi bibendum neque egestas congue quisque egestas. Elit eget gravida cum sociis natoque penatibus. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Id eu nisl nunc mi ipsum faucibus. Purus viverra accumsan in nisl. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Paris_vue_d%27ensemble_tour_Eiffel.jpg/640px-Paris_vue_d%27ensemble_tour_Eiffel.jpg',
      ],
      [
          'title' => 'Tokyo',
          'description' => 'Morbi non arcu risus quis varius quam quisque id diam. Suspendisse potenti nullam ac tortor vitae purus faucibus ornare suspendisse. Scelerisque felis imperdiet proin fermentum. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Scelerisque in dictum non consectetur a erat nam at lectus. Placerat vestibulum lectus mauris ultrices eros in cursus turpis massa. Donec massa sapien faucibus et. Proin libero nunc consequat interdum varius sit. Dui nunc mattis enim ut. Aliquam purus sit amet luctus venenatis lectus magna fringilla.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Tokyo_Shibuya_Scramble_Crossing_2018-10-09.jpg/640px-Tokyo_Shibuya_Scramble_Crossing_2018-10-09.jpg',
      ],
      [
          'title' => 'Rome',
          'description' => 'Duis at tellus at urna condimentum. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nec sagittis aliquam malesuada bibendum arcu. Et molestie ac feugiat sed. Netus et malesuada fames ac turpis. Fermentum dui faucibus in ornare. Nibh ipsum consequat nisl vel pretium. Commodo odio aenean sed adipiscing diam. Lectus proin nibh nisl condimentum id venenatis. Velit sed ullamcorper morbi tincidunt ornare massa eget. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Imperdiet massa tincidunt nunc pulvinar sapien et.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Colosseum_in_Rome%2C_Italy_-_April_2007.jpg/640px-Colosseum_in_Rome%2C_Italy_-_April_2007.jpg',
      ],
      [
          'title' => 'Barcelone',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Casa_Mil%C3%A0%2C_general_view_cropped.jpg/640px-Casa_Mil%C3%A0%2C_general_view_cropped.jpg',
      ],
      [
          'title' => 'Sydney',
          'description' => 'Duis at tellus at urna condimentum. Dignissim cras tincidunt lobortis feugiat vivamus at augue. Nec sagittis aliquam malesuada bibendum arcu. Et molestie ac feugiat sed. Netus et malesuada fames ac turpis. Fermentum dui faucibus in ornare. Nibh ipsum consequat nisl vel pretium. Commodo odio aenean sed adipiscing diam. Lectus proin nibh nisl condimentum id venenatis. Velit sed ullamcorper morbi tincidunt ornare massa eget. Fringilla phasellus faucibus scelerisque eleifend donec pretium vulputate sapien nec. Imperdiet massa tincidunt nunc pulvinar sapien et.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Sydney_Opera_House_and_Harbour_Bridge_Dusk_%282%29_2019-06-21.jpg/640px-Sydney_Opera_House_and_Harbour_Bridge_Dusk_%282%29_2019-06-21.jpg',
      ],
      [
          'title' => 'Bali',
          'description' => 'In arcu cursus euismod quis viverra nibh cras pulvinar. Cursus eget nunc scelerisque viverra mauris in. Interdum velit laoreet id donec ultrices tincidunt arcu non sodales. Duis at consectetur lorem donec massa sapien faucibus et molestie. Vel turpis nunc eget lorem dolor. Ullamcorper sit amet risus nullam eget felis eget. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Curabitur gravida arcu ac tortor. Suscipit tellus mauris a diam maecenas sed. Pellentesque habitant morbi tristique senectus et netus. Turpis in eu mi bibendum neque egestas congue quisque egestas. Elit eget gravida cum sociis natoque penatibus. Ullamcorper malesuada proin libero nunc consequat interdum varius sit amet. Scelerisque fermentum dui faucibus in ornare quam viverra orci sagittis. Id eu nisl nunc mi ipsum faucibus. Purus viverra accumsan in nisl. Tortor vitae purus faucibus ornare suspendisse sed nisi lacus sed.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/36/Bali_panorama.jpg/640px-Bali_panorama.jpg',
      ],
      [
          'title' => 'Venice',
          'description' => 'Nisl nisi scelerisque eu ultrices. Vitae ultricies leo integer malesuada. Consectetur purus ut faucibus pulvinar elementum integer enim neque. Netus et malesuada fames ac turpis egestas sed. Faucibus a pellentesque sit amet porttitor eget. Amet mattis vulputate enim nulla aliquet porttitor. Pellentesque id nibh tortor id. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Nunc eget lorem dolor sed viverra ipsum nunc aliquet. Adipiscing diam donec adipiscing tristique risus. Quis blandit turpis cursus in hac. Scelerisque eleifend donec pretium vulputate sapien. Sollicitudin aliquam ultrices sagittis orci a scelerisque purus.',
          'picture' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Santa_Maria_della_Salute_%2850428075772%29.jpg/640px-Santa_Maria_della_Salute_%2850428075772%29.jpg',
      ]
    ];
    public function load(ObjectManager $manager): void
    {
        foreach (self::TRAVELS as $travelData) {
            $travel = new Travel();
            $travel
                ->setTitle($travelData['title'])
                ->setDescription($travelData['description'])
                ->setRate(rand(1,5))
                ->setPicture($travelData['picture']);
            $manager->persist($travel);
        }
        $manager->flush();
    }
}
