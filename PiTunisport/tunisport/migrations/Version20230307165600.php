<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307165600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe ADD equipe_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE equipe ADD CONSTRAINT FK_2449BA156D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id)');
        $this->addSql('CREATE INDEX IDX_2449BA156D861B89 ON equipe (equipe_id)');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7BC08CF77');
        $this->addSql('DROP INDEX IDX_3BAE0AA7BC08CF77 ON event');
        $this->addSql('ALTER TABLE event ADD type_event VARCHAR(255) NOT NULL, DROP type_event_id');
        $this->addSql('ALTER TABLE match_f ADD nb_billet_total INT DEFAULT NULL, ADD nb_billet_reserve INT DEFAULT NULL, ADD date_match DATE DEFAULT NULL, ADD heure_deb_m TIME DEFAULT NULL, ADD heurefin_m TIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE equipe DROP FOREIGN KEY FK_2449BA156D861B89');
        $this->addSql('DROP INDEX IDX_2449BA156D861B89 ON equipe');
        $this->addSql('ALTER TABLE equipe DROP equipe_id');
        $this->addSql('ALTER TABLE event ADD type_event_id INT DEFAULT NULL, DROP type_event');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7BC08CF77 FOREIGN KEY (type_event_id) REFERENCES type_event (id)');
        $this->addSql('CREATE INDEX IDX_3BAE0AA7BC08CF77 ON event (type_event_id)');
        $this->addSql('ALTER TABLE match_f DROP nb_billet_total, DROP nb_billet_reserve, DROP date_match, DROP heure_deb_m, DROP heurefin_m');
    }
}
