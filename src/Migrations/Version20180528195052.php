<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180528195052 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql("INSERT INTO role (role, name, created_at) VALUES ('ROLE_ADMIN', 'administrador', CURRENT_TIMESTAMP)");
        $this->addSql("INSERT INTO role (role, name, created_at) VALUES('ROLE_USER', 'usuário', CURRENT_TIMESTAMP)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
