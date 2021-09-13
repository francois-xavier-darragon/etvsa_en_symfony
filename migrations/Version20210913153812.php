<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210913153812 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE packages (id INT AUTO_INCREMENT NOT NULL, services_id INT NOT NULL, delivery VARCHAR(255) DEFAULT NULL, towns VARCHAR(255) DEFAULT NULL, price INT DEFAULT NULL, INDEX IDX_9BB5C0A7AEF5A6C1 (services_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE services (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE packages ADD CONSTRAINT FK_9BB5C0A7AEF5A6C1 FOREIGN KEY (services_id) REFERENCES services (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE packages DROP FOREIGN KEY FK_9BB5C0A7AEF5A6C1');
        $this->addSql('DROP TABLE packages');
        $this->addSql('DROP TABLE services');
    }
}
