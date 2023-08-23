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
