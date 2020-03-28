<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use \DateTime;
use Faker;
use App\Entity\Comment;
use App\Entity\ArticleDoctrine;

class CommentFixtures extends Fixture
{
    public const ARTICLE = 'article';

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {   // Nombre d'article
            for ($j = 0; $j < rand(1, 5); $j++) {
                $comment = new Comment();
                $comment->setName($faker->name);
                $comment->setEmail($faker->email);
                $comment->setCreatedAt($faker->dateTime($max = 'now', $timezone = null));
                $comment->setComment($faker->text($maxNbChars = 200));
                $comment->setArticle($this->getReference(AppFixtures::ARTICLE . $i));
                $manager->persist($comment);
            }
        }
        $manager->flush();
    }
}
