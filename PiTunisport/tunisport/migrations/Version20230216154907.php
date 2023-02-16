<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216154907 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE billet DROP FOREIGN KEY FK_1F034AF6B83297E7');
        $this->addSql('DROP INDEX IDX_1F034AF6B83297E7 ON billet');
        $this->addSql('ALTER TABLE billet DROP reservation_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE billet ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE billet ADD CONSTRAINT FK_1F034AF6B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_1F034AF6B83297E7 ON billet (reservation_id)');
    }
}
