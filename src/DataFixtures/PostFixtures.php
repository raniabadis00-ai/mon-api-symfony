<?php

namespace App\DataFixtures;

use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class PostFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create();

        // $product = new Product();
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();

            $post->setTitle($faker->words(3, true))
                ->setContent($faker->paragraph(10));

            $manager->persist($post);
        }

        $manager->flush();
    }
}
