<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308233533 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_like ADD event_id INT DEFAULT NULL, ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE event_like ADD CONSTRAINT FK_B3A80C1871F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE event_like ADD CONSTRAINT FK_B3A80C18A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B3A80C1871F7E88B ON event_like (event_id)');
        $this->addSql('CREATE INDEX IDX_B3A80C18A76ED395 ON event_like (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_like DROP FOREIGN KEY FK_B3A80C1871F7E88B');
        $this->addSql('ALTER TABLE event_like DROP FOREIGN KEY FK_B3A80C18A76ED395');
        $this->addSql('DROP INDEX IDX_B3A80C1871F7E88B ON event_like');
        $this->addSql('DROP INDEX IDX_B3A80C18A76ED395 ON event_like');
        $this->addSql('ALTER TABLE event_like DROP event_id, DROP user_id');
    }
}
