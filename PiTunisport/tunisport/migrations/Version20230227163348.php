<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227163348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tournoi (id INT AUTO_INCREMENT NOT NULL, match_f_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, INDEX IDX_18AFD9DFC766DA93 (match_f_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DFC766DA93 FOREIGN KEY (match_f_id) REFERENCES match_f (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DFC766DA93');
        $this->addSql('DROP TABLE tournoi');
    }
}
