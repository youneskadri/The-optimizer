<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230301003811 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F286538AB43');
        $this->addSql('DROP INDEX IDX_4E522F286538AB43 ON match_f');
        $this->addSql('ALTER TABLE match_f DROP stade_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f ADD stade_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F286538AB43 FOREIGN KEY (stade_id) REFERENCES stade (id)');
        $this->addSql('CREATE INDEX IDX_4E522F286538AB43 ON match_f (stade_id)');
    }
}
