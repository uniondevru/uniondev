<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;

class AppFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setEmail('test@test.com');
        $password = $this->encoder->encodePassword($user, '1q2w3e4r');
        $user->setPassword($password);
        $user->addRole("ROLE_SUPER_ADMIN");
        $user->setEnabled(1);
        $manager->persist($user);
        $manager->flush();
    }
}
