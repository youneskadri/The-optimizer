<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307171315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f ADD equipe_b_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F2820226D48 FOREIGN KEY (equipe_b_id) REFERENCES equipe (id)');
        $this->addSql('CREATE INDEX IDX_4E522F2820226D48 ON match_f (equipe_b_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F2820226D48');
        $this->addSql('DROP INDEX IDX_4E522F2820226D48 ON match_f');
        $this->addSql('ALTER TABLE match_f DROP equipe_b_id');
    }
}
