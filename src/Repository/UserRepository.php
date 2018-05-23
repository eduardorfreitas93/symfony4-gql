<?php declare(strict_types=1);

namespace App\Repository;

use App\Entity\User;

class UserRepository extends AbstractRepository
{
    public function getEntityClassName(): string
    {
        return User::class;
    }

    /**
     *  Codigo para modificar a forma de autenticação.
     *
     *  Remover 'property' do security.yaml
     *
     *  implements UserLoaderInterface
     *
     *  public function loadUserByUsername($username)
     *  {
     *      return $this->createQueryBuilder('u')
     *          ->where('u.username = :username OR u.email = :email')
     *          ->setParameter('username', $username)
     *          ->setParameter('email', $username)
     *          ->getQuery()
     *          ->getOneOrNullResult();
     *  }
     **/
}
