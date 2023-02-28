<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230227163731 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f DROP heure_fin_m, DROP type_match, DROP stade, DROP tournois');
        $this->addSql('ALTER TABLE tournoi DROP FOREIGN KEY FK_18AFD9DFC766DA93');
        $this->addSql('DROP INDEX IDX_18AFD9DFC766DA93 ON tournoi');
        $this->addSql('ALTER TABLE tournoi DROP match_f_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f ADD heure_fin_m TIME NOT NULL, ADD type_match VARCHAR(255) NOT NULL, ADD stade VARCHAR(255) NOT NULL, ADD tournois VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE tournoi ADD match_f_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE tournoi ADD CONSTRAINT FK_18AFD9DFC766DA93 FOREIGN KEY (match_f_id) REFERENCES match_f (id)');
        $this->addSql('CREATE INDEX IDX_18AFD9DFC766DA93 ON tournoi (match_f_id)');
    }
}
