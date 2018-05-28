<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180528195202 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("INSERT INTO app_users (username, password, email, is_active) VALUES ('eduardo', '$2y$12$/MVJoEf4hYIV0aOcKT003aOzOlPHKUG5g3BLrK/gUg/wIGmpUZxVuW\', 'edu@edu.com', TRUE)");
        $this->addSql("INSERT INTO user_has_role (user_id, role_id) VALUES (1,1);");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
