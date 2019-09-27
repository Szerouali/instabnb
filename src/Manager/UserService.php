<?php


namespace App\Manager;


use App\Entity\User;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Tests\Encoder\UserPasswordEncoderTest;


class UserManager
{
    /**
     * @var UserPasswordEncoderTest
     */
    private $passwordEncoder;
    private $manager;

    public function __construct(UserPasswordEncoderInterface     $passwordEncoder, ObjectManager $manager)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->manager=$manager;
    }

    public function save(User $user) :void
    {
        $encodePassword= $this->passwordEncoder->encodePassword($user, $user->getPassword());
        $user->setPassword($encodePassword);

        dump($encodePassword);die;
    }
}