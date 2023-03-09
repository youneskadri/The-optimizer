<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307171702 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f ADD stade_id INT DEFAULT NULL, ADD tournoi_id INT DEFAULT NULL, ADD type_match_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F286538AB43 FOREIGN KEY (stade_id) REFERENCES stade (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F28F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F28E7418B2A FOREIGN KEY (type_match_id) REFERENCES type_match (id)');
        $this->addSql('CREATE INDEX IDX_4E522F286538AB43 ON match_f (stade_id)');
        $this->addSql('CREATE INDEX IDX_4E522F28F607770A ON match_f (tournoi_id)');
        $this->addSql('CREATE INDEX IDX_4E522F28E7418B2A ON match_f (type_match_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F286538AB43');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F28F607770A');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F28E7418B2A');
        $this->addSql('DROP INDEX IDX_4E522F286538AB43 ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F28F607770A ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F28E7418B2A ON match_f');
        $this->addSql('ALTER TABLE match_f DROP stade_id, DROP tournoi_id, DROP type_match_id');
    }
}
