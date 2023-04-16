<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsis('Des zombies envahissent la terre');
        $program->setCategory($this->getReference('category_Horreur'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('New Girl');
        $program->setSynopsis('1 meuf et 3 colocataires');
        $program->setCategory($this->getReference('category_Sitcom'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Umbrella Academy');
        $program->setSynopsis('Milliardaire, adopte sept de ces enfants et crée The Umbrella Academy pour les préparer à sauver le monde.');
        $program->setCategory($this->getReference('category_Aventure'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Once Upon a Time');
        $program->setSynopsis("Emma, une jeune femme au passé trouble, embarquée dans un merveilleux et tragique voyage.");
        $program->setCategory($this->getReference('category_Fanastique'));
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Narco-Saints');
        $program->setSynopsis("Un entrepreneur ordinaire participe à une mission secrète visant à capturer un baron de la drogue coréen sévissant en Amérique du Sud.");
        $program->setCategory($this->getReference('category_Action'));
        $manager->persist($program);

        $manager->flush();


    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
