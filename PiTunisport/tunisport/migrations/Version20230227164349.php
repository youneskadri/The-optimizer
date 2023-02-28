<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227164349 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE stade (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_match (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE equipe ADD nom VARCHAR(255) NOT NULL, ADD slug VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE match_f ADD tournoi_id INT DEFAULT NULL, ADD type_id INT DEFAULT NULL, ADD stade_id INT DEFAULT NULL, DROP equipe_a, DROP equipe_b');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F28F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F28C54C8C93 FOREIGN KEY (type_id) REFERENCES type_match (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F286538AB43 FOREIGN KEY (stade_id) REFERENCES stade (id)');
        $this->addSql('CREATE INDEX IDX_4E522F28F607770A ON match_f (tournoi_id)');
        $this->addSql('CREATE INDEX IDX_4E522F28C54C8C93 ON match_f (type_id)');
        $this->addSql('CREATE INDEX IDX_4E522F286538AB43 ON match_f (stade_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F286538AB43');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F28C54C8C93');
        $this->addSql('DROP TABLE stade');
        $this->addSql('DROP TABLE type_match');
        $this->addSql('ALTER TABLE equipe DROP nom, DROP slug');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F28F607770A');
        $this->addSql('DROP INDEX IDX_4E522F28F607770A ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F28C54C8C93 ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F286538AB43 ON match_f');
        $this->addSql('ALTER TABLE match_f ADD equipe_a VARCHAR(255) NOT NULL, ADD equipe_b VARCHAR(255) NOT NULL, DROP tournoi_id, DROP type_id, DROP stade_id');
    }
}
