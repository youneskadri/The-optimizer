<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307170518 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe ADD match_f_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA15C766DA93 FOREIGN KEY (match_f_id) REFERENCES match_f (id)');
        $this->addSql('CREATE INDEX IDX_2449BA15C766DA93 ON equipe (match_f_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA15C766DA93');
        $this->addSql('DROP INDEX IDX_2449BA15C766DA93 ON equipe');
        $this->addSql('ALTER TABLE equipe DROP match_f_id');
    }
}
