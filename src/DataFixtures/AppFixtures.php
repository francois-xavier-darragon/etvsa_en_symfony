<?php

namespace App\DataFixtures;

use App\DataFixtures\Provider\PackagesProvider;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Nelmio\Alice\Loader\NativeLoader;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $em)
    {
        $faker= Factory::create('fr_FR');

        $faker->addProvider(new PackagesProvider($faker));

        $loader = new NativeLoader($faker);

        $entities = $loader->loadFile(__DIR__ . '/fixtures.yaml')->getObjects();

        foreach ($entities as $entity) {
            $em->persist($entity);
        };

        $em->flush();
    }
}
