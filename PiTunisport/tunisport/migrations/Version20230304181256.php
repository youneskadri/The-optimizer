<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230304181256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F2820226D48');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F28C54C8C93');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F283297C2A6');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F28F607770A');
        $this->addSql('ALTER TABLE match_f DROP FOREIGN KEY FK_4E522F286538AB43');
        $this->addSql('DROP INDEX IDX_4E522F2820226D48 ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F28F607770A ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F286538AB43 ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F28C54C8C93 ON match_f');
        $this->addSql('DROP INDEX IDX_4E522F283297C2A6 ON match_f');
        $this->addSql('ALTER TABLE match_f ADD tournoi VARCHAR(255) NOT NULL, ADD type VARCHAR(255) NOT NULL, ADD equipe_a VARCHAR(255) NOT NULL, ADD equipe_b VARCHAR(255) NOT NULL, DROP tournoi_id, DROP type_id, DROP equipe_a_id, DROP equipe_b_id, DROP stade_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE match_f ADD tournoi_id INT DEFAULT NULL, ADD type_id INT DEFAULT NULL, ADD equipe_a_id INT DEFAULT NULL, ADD equipe_b_id INT DEFAULT NULL, ADD stade_id INT DEFAULT NULL, DROP tournoi, DROP type, DROP equipe_a, DROP equipe_b');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F2820226D48 FOREIGN KEY (equipe_b_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F28C54C8C93 FOREIGN KEY (type_id) REFERENCES type_match (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F283297C2A6 FOREIGN KEY (equipe_a_id) REFERENCES equipe (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F28F607770A FOREIGN KEY (tournoi_id) REFERENCES tournoi (id)');
        $this->addSql('ALTER TABLE match_f ADD CONSTRAINT FK_4E522F286538AB43 FOREIGN KEY (stade_id) REFERENCES stade (id)');
        $this->addSql('CREATE INDEX IDX_4E522F2820226D48 ON match_f (equipe_b_id)');
        $this->addSql('CREATE INDEX IDX_4E522F28F607770A ON match_f (tournoi_id)');
        $this->addSql('CREATE INDEX IDX_4E522F286538AB43 ON match_f (stade_id)');
        $this->addSql('CREATE INDEX IDX_4E522F28C54C8C93 ON match_f (type_id)');
        $this->addSql('CREATE INDEX IDX_4E522F283297C2A6 ON match_f (equipe_a_id)');
    }
}
