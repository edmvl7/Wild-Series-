<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Episode;
use Faker\Factory;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        /*$episode = new episode();
        $episode->setTitle('Passé décomposé');
        $episode->setNumber('1');
        $episode->setSynopsis('En résumé Rick, shérif de la ville, s\'est fait tirer dessus au cours d\'une intervention. Quand il se réveille à l\'hôpital après un long coma, il découvre un monde dévasté et des rues remplies de cadavres.');
        $episode->setSeason($this->getReference('season1_walkingDead'));
        $manager->persist($episode);
        $manager->flush();

        $episode = new episode();
        $episode->setTitle('Tripes');
        $episode->setNumber('2');
        $episode->setSynopsis('Rick parvient à s\'extraire du char et rencontre un groupe de survivants avec le jeune Glenn, Andrea, Morales, T-Dog et Merle Dixon, un homme passablement raciste et énervé.');
        $episode->setSeason($this->getReference('season1_walkingDead'));
        $manager->persist($episode);
        $manager->flush();

        $episode = new episode();
        $episode->setTitle('Le début de la fin');
        $episode->setNumber('1');
        $episode->setSynopsis('En 1231, on découvre Geralt de Riv combattant et tuant un kikimora. Il se rend à Blaviken pour vendre la carcasse du monstre au bourgmestre puis, dans une taverne, rencontre Renfri, une princesse maudite pourchassée par le sorcier Stregobor.');
        $episode->setSeason($this->getReference('season1_TheWitcher'));
        $manager->persist($episode);*/
        for($i = 0; $i < 5; $i++) {
            $episode = new Episode();

            $episode->setTitle($faker->name());
            $episode->setSynopsis($faker->paragraphs(3, true));
            $episode->setSeason($this->getReference('season_NewGirl'));
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SeasonFixtures::class
        ];
    }
}