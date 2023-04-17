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
        $program->setCountry('USA');
        $program->setYear(2010);
        $this->addReference('program_WalkingDead', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('New Girl');
        $program->setSynopsis('1 meuf et 3 colocataires');
        $program->setCategory($this->getReference('category_Sitcom'));
        $program->setCountry('USA');
        $program->setYear(2011);
        $this->addReference('program_NewGirl', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Umbrella Academy');
        $program->setSynopsis('Milliardaire, adopte sept de ces enfants et crée The Umbrella Academy pour les préparer à sauver le monde.');
        $program->setCategory($this->getReference('category_Aventure'));
        $program->setCountry('USA');
        $program->setYear(2019);
        $this->addReference('program_UmbrellAcademy', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Once Upon a Time');
        $program->setSynopsis("Emma, une jeune femme au passé trouble, embarquée dans un merveilleux et tragique voyage.");
        $program->setCategory($this->getReference('category_Fanastique'));
        $program->setCountry('USA');
        $program->setYear(2011);
        $this->addReference('program_OnceUpon-a-Time', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Narco-Saints');
        $program->setSynopsis("Un entrepreneur ordinaire participe à une mission secrète visant à capturer un baron de la drogue coréen sévissant en Amérique du Sud.");
        $program->setCountry('Corée du Sud');
        $program->setYear(2022);
        $program->setCategory($this->getReference('category_Action'));
        $this->addReference('program_Narco-Saints', $program);
        $manager->persist($program);


        $program = new Program();
        $program->setTitle('The witcher');
        $program->setSynopsis('Geralt de Riv, un chasseur de monstres mutant, poursuit son destin dans un monde chaotique où les humains se révèlent souvent plus vicieux que les bêtes.');
        $program->setCategory($this->getReference('category_Action'));
        $program->setCountry('USA');
        $program->setYear(2019);
        $manager->persist($program);
        $this->addReference('program_TheWitcher', $program);


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
