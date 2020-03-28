<?php

namespace App\DataFixtures;

use App\Entity\ArticleDoctrine;
use \DateTime;
use Faker;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public const ARTICLE = 'article';

    public function load(ObjectManager $manager)
    {

        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $article1 = new ArticleDoctrine();
            $article1->setTitle($faker->name);
            $article1->setSubtitle($faker->name);
            $article1->setCreatedAt($faker->dateTime($max = 'now', $timezone = null));
            $article1->setAuthor($faker->firstName($gender = 'male'|'female'));
            $article1->setBody($faker->text($maxNbChars = 100));
            $article1->setImage('img/post-bg.jpg');
            $manager->persist($article1);
            $this->addReference(self::ARTICLE.$i,$article1);
        }
        $manager->flush();

    }
}
