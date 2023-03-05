<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230305192348 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE billet (id INT AUTO_INCREMENT NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, descreption VARCHAR(255) NOT NULL, contenu VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_hebergement (id INT AUTO_INCREMENT NOT NULL, nomcategory VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE category_transport (id INT AUTO_INCREMENT NOT NULL, typetransport VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, blog_id INT DEFAULT NULL, user_id INT DEFAULT NULL, contenu_com VARCHAR(255) NOT NULL, date_c DATE NOT NULL, INDEX IDX_67F068BCDAE07E97 (blog_id), INDEX IDX_67F068BCA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event (id INT AUTO_INCREMENT NOT NULL, type_event_id INT DEFAULT NULL, nom_event VARCHAR(255) NOT NULL, date_event DATE NOT NULL, heure_deb TIME NOT NULL, heure_fin TIME NOT NULL, localisation VARCHAR(255) NOT NULL, INDEX IDX_3BAE0AA7BC08CF77 (type_event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hebergement (id INT AUTO_INCREMENT NOT NULL, localisation_id INT DEFAULT NULL, category_hebergement_id INT DEFAULT NULL, image VARCHAR(255) DEFAULT NULL, nom_heberg VARCHAR(255) NOT NULL, deschebergement VARCHAR(255) NOT NULL, INDEX IDX_4852DD9CC68BE09C (localisation_id), INDEX IDX_4852DD9CC2AB4C5B (category_hebergement_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, lieux VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE match_f (id INT AUTO_INCREMENT NOT NULL, heure_deb_m TIME NOT NULL, heure_fin_m TIME NOT NULL, date_match DATE NOT NULL, equipe_a VARCHAR(255) NOT NULL, equipe_b VARCHAR(255) NOT NULL, type_match VARCHAR(255) NOT NULL, stade VARCHAR(255) NOT NULL, tournois VARCHAR(255) NOT NULL, resultat_a INT NOT NULL, resultat_b INT NOT NULL, image VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE match_f_reservation (match_f_id INT NOT NULL, reservation_id INT NOT NULL, INDEX IDX_BC9DA35CC766DA93 (match_f_id), INDEX IDX_BC9DA35CB83297E7 (reservation_id), PRIMARY KEY(match_f_id, reservation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reclamation (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, sujet VARCHAR(255) NOT NULL, descreption VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, date_r DATE NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_CE606404A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, reclamation_id INT DEFAULT NULL, reponse VARCHAR(255) NOT NULL, INDEX IDX_5FB6DEC72D6BA2D9 (reclamation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, billet_id INT DEFAULT NULL, user_id INT DEFAULT NULL, date_resevation DATETIME NOT NULL, etat TINYINT(1) NOT NULL, nombre_billet INT NOT NULL, INDEX IDX_42C8495544973C78 (billet_id), INDEX IDX_42C84955A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transport (id INT AUTO_INCREMENT NOT NULL, category_transport_id INT DEFAULT NULL, image_transport VARCHAR(255) NOT NULL, nom_transport VARCHAR(255) NOT NULL, INDEX IDX_66AB212E43DEE2AD (category_transport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE transport_localisation (transport_id INT NOT NULL, localisation_id INT NOT NULL, INDEX IDX_212135CF9909C13F (transport_id), INDEX IDX_212135CFC68BE09C (localisation_id), PRIMARY KEY(transport_id, localisation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_event (id INT AUTO_INCREMENT NOT NULL, nom_type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, phone INT NOT NULL, date_join DATETIME NOT NULL, banned TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCDAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event ADD CONSTRAINT FK_3BAE0AA7BC08CF77 FOREIGN KEY (type_event_id) REFERENCES type_event (id)');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT FK_4852DD9CC68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE hebergement ADD CONSTRAINT FK_4852DD9CC2AB4C5B FOREIGN KEY (category_hebergement_id) REFERENCES category_hebergement (id)');
        $this->addSql('ALTER TABLE match_f_reservation ADD CONSTRAINT FK_BC9DA35CC766DA93 FOREIGN KEY (match_f_id) REFERENCES match_f (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE match_f_reservation ADD CONSTRAINT FK_BC9DA35CB83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC72D6BA2D9 FOREIGN KEY (reclamation_id) REFERENCES reclamation (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495544973C78 FOREIGN KEY (billet_id) REFERENCES billet (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE transport ADD CONSTRAINT FK_66AB212E43DEE2AD FOREIGN KEY (category_transport_id) REFERENCES category_transport (id)');
        $this->addSql('ALTER TABLE transport_localisation ADD CONSTRAINT FK_212135CF9909C13F FOREIGN KEY (transport_id) REFERENCES transport (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE transport_localisation ADD CONSTRAINT FK_212135CFC68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCDAE07E97');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCA76ED395');
        $this->addSql('ALTER TABLE event DROP FOREIGN KEY FK_3BAE0AA7BC08CF77');
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY FK_4852DD9CC68BE09C');
        $this->addSql('ALTER TABLE hebergement DROP FOREIGN KEY FK_4852DD9CC2AB4C5B');
        $this->addSql('ALTER TABLE match_f_reservation DROP FOREIGN KEY FK_BC9DA35CC766DA93');
        $this->addSql('ALTER TABLE match_f_reservation DROP FOREIGN KEY FK_BC9DA35CB83297E7');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('ALTER TABLE reponse DROP FOREIGN KEY FK_5FB6DEC72D6BA2D9');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495544973C78');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395');
        $this->addSql('ALTER TABLE transport DROP FOREIGN KEY FK_66AB212E43DEE2AD');
        $this->addSql('ALTER TABLE transport_localisation DROP FOREIGN KEY FK_212135CF9909C13F');
        $this->addSql('ALTER TABLE transport_localisation DROP FOREIGN KEY FK_212135CFC68BE09C');
        $this->addSql('DROP TABLE billet');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE category_hebergement');
        $this->addSql('DROP TABLE category_transport');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE event');
        $this->addSql('DROP TABLE hebergement');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP TABLE match_f');
        $this->addSql('DROP TABLE match_f_reservation');
        $this->addSql('DROP TABLE reclamation');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE transport');
        $this->addSql('DROP TABLE transport_localisation');
        $this->addSql('DROP TABLE type_event');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
