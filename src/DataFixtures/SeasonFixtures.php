<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
//use Faker\Factory;


class SeasonFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
//        $faker = Factory::create();

        $season = new Season();
        $season->setNumber('1');
        $season->setProgram($this->getReference('program_WalkingDead'));
        $season->setYear('2010');
        $season->setDescription('Après avoir été blessé dans l’exercice de ses fonctions, le shérif Rick Grimes se réveille d’un coma de plusieurs semaines et découvre un monde post-apocalyptique.');
        $this->addReference('season1_walkingDead', $season);
        $manager->persist($season);
        $manager->flush();

        $season = new Season();
        $season->setNumber('1');
        $season->setProgram($this->getReference('program_TheWitcher'));
        $season->setYear('2019');
        $season->setDescription('Une population hostile et un mage rusé accueillent Geralt dans la ville de Blaviken. Ciri voit son royaume en proie à la panique lorsque Nilfgaard s\'en prend à Cintra. Malmenée et humiliée, Yennefer trouve par hasard le moyen de s\'en sortir. L\'enfer attend Geralt alors qu\'il chasse un diable.');
        $this->addReference('season1_TheWitcher', $season);
        $manager->persist($season);
        $manager->flush();
    }
     /*   for ($i = 0; $i < 50; $i++) {
            $season = new Season();
            //Ce Faker va nous permettre d'alimenter l'instance de Season que l'on souhaite ajouter en base
            $season->setNumber($faker->numberBetween(1, 10));
            $season->setYear($faker->year());
            $season->setDescription($faker->paragraphs(3, true));

            $season->setProgram($this->getReference('program_' . $faker->numberBetween(0, 5)));

            $manager->persist($season);
        }*/

        public function getDependencies()
        {
            return [
                ProgramFixtures::class,
            ];
        }

}