<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210502164221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE diplomas (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) DEFAULT NULL, content VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE diplomas_profile (diplomas_id INT NOT NULL, profile_id INT NOT NULL, INDEX IDX_ED11243A5CD360E8 (diplomas_id), INDEX IDX_ED11243ACCFA12B8 (profile_id), PRIMARY KEY(diplomas_id, profile_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, tel VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projects (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, techno LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE social (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, url VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE technos (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, percentage DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE diplomas_profile ADD CONSTRAINT FK_ED11243A5CD360E8 FOREIGN KEY (diplomas_id) REFERENCES diplomas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE diplomas_profile ADD CONSTRAINT FK_ED11243ACCFA12B8 FOREIGN KEY (profile_id) REFERENCES profile (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE diplomas_profile DROP FOREIGN KEY FK_ED11243A5CD360E8');
        $this->addSql('ALTER TABLE diplomas_profile DROP FOREIGN KEY FK_ED11243ACCFA12B8');
        $this->addSql('DROP TABLE diplomas');
        $this->addSql('DROP TABLE diplomas_profile');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE projects');
        $this->addSql('DROP TABLE social');
        $this->addSql('DROP TABLE technos');
    }
}
