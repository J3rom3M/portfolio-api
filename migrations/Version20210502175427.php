<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210502175427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE projects_technos (projects_id INT NOT NULL, technos_id INT NOT NULL, INDEX IDX_B991CD0B1EDE0F55 (projects_id), INDEX IDX_B991CD0B25F7B143 (technos_id), PRIMARY KEY(projects_id, technos_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE projects_technos ADD CONSTRAINT FK_B991CD0B1EDE0F55 FOREIGN KEY (projects_id) REFERENCES projects (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projects_technos ADD CONSTRAINT FK_B991CD0B25F7B143 FOREIGN KEY (technos_id) REFERENCES technos (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE projects_technos');
    }
}
