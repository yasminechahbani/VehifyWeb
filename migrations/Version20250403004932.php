<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250403004932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP INDEX fk_id_user ON carte_grise
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE carte_grise CHANGE id_carte_grise id_carte_grise INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compte DROP FOREIGN KEY compte_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compte CHANGE id id INT NOT NULL, CHANGE image image VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_user ON compte
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_CFF652606B3CA4B ON compte (id_user)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compte ADD CONSTRAINT compte_ibfk_1 FOREIGN KEY (id_user) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe DROP FOREIGN KEY fk_service
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe DROP FOREIGN KEY fk_service
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe CHANGE id_employe id_employe INT NOT NULL, CHANGE salaire salaire DOUBLE PRECISION NOT NULL, CHANGE role role VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe ADD CONSTRAINT FK_F804D3B93F0033A2 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk_service ON employe
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_F804D3B93F0033A2 ON employe (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe ADD CONSTRAINT fk_service FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement DROP FOREIGN KEY equipement_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement DROP FOREIGN KEY equipement_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement CHANGE id_equipement id_equipement INT NOT NULL, CHANGE description description LONGTEXT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F326997AC9 FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_employe ON equipement
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B8B4C6F326997AC9 ON equipement (id_employe)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement ADD CONSTRAINT equipement_ibfk_1 FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_75EA56E016BA31DB ON messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_75EA56E0FB7336F0 ON messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_75EA56E0E3BD61CE ON messenger_messages
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE id id BIGINT NOT NULL, CHANGE delivered_at delivered_at DATETIME NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE paiement DROP FOREIGN KEY paiement_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE paiement CHANGE id_paiement id_paiement INT NOT NULL, CHANGE date_paiement date_paiement DATETIME NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE numeroCarte numero_carte VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_reservation ON paiement
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_B1DC7A1E5ADA84A2 ON paiement (id_reservation)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE paiement ADD CONSTRAINT paiement_ibfk_1 FOREIGN KEY (id_reservation) REFERENCES reservation (id_reservation) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY fk_employe
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY fk_id_service
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY fk_employe
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY fk_id_service
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis CHANGE id_permis id_permis INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT FK_1738945326997AC9 FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT FK_173894533F0033A2 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk_employe ON permis
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_1738945326997AC9 ON permis (id_employe)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX fk_id_service ON permis
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_173894533F0033A2 ON permis (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT fk_employe FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT fk_id_service FOREIGN KEY (id_service) REFERENCES service (id_service) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz CHANGE id id INT NOT NULL, CHANGE rating rating INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rapport DROP FOREIGN KEY rapport_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rapport ADD huile_default VARCHAR(150) NOT NULL, DROP huileDefault, CHANGE id_rapport id_rapport INT NOT NULL, CHANGE direction direction VARCHAR(150) NOT NULL, CHANGE visibilite visibilite VARCHAR(150) NOT NULL, CHANGE pneaumatique pneaumatique VARCHAR(150) NOT NULL, CHANGE echappement echappement VARCHAR(150) NOT NULL, CHANGE carrosorie carrosorie VARCHAR(150) NOT NULL, CHANGE eclairage eclairage VARCHAR(150) NOT NULL, CHANGE freinage freinage VARCHAR(150) NOT NULL, CHANGE date date DATE NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_resultat ON rapport
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_BE34A09CB700B177 ON rapport (id_resultat)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rapport ADD CONSTRAINT rapport_ibfk_1 FOREIGN KEY (id_resultat) REFERENCES resultat (id_resultat) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY reservation_service
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY reservation_service
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation CHANGE id_reservation id_reservation INT NOT NULL, CHANGE heureReservation heure_reservation VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C84955ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_compte ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C84955A76ED395 ON reservation (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX reservation_service ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C84955ED5CA9E6 ON reservation (service_id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_vehicule ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_42C849557A8CD546 ON reservation (idVehicule)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_1 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_2 FOREIGN KEY (idVehicule) REFERENCES vehicule (id_vehicule) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT reservation_service FOREIGN KEY (service_id) REFERENCES service (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY resultat_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY resultat_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY resultat_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY resultat_ibfk_2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat CHANGE id_resultat id_resultat INT NOT NULL, CHANGE status status TINYINT(1) NOT NULL, CHANGE huileDefault huile_default TINYINT(1) NOT NULL, CHANGE vinSaisie vin_saisie VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE23F0033A2 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE2E107968B FOREIGN KEY (id_paiement) REFERENCES paiement (id_paiement) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_service ON resultat
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E7DB5DE23F0033A2 ON resultat (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_paiement ON resultat
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_E7DB5DE2E107968B ON resultat (id_paiement)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT resultat_ibfk_1 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT resultat_ibfk_2 FOREIGN KEY (id_paiement) REFERENCES paiement (id_paiement) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE service CHANGE id_service id_service INT NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE id id INT NOT NULL, CHANGE nom nom VARCHAR(50) NOT NULL, CHANGE prenom prenom VARCHAR(50) NOT NULL, CHANGE tel tel VARCHAR(20) NOT NULL, CHANGE localisation localisation VARCHAR(100) NOT NULL, CHANGE email email VARCHAR(150) NOT NULL, CHANGE mot_de_passe mot_de_passe VARCHAR(150) NOT NULL, CHANGE status status VARCHAR(50) NOT NULL, CHANGE role role VARCHAR(50) NOT NULL, CHANGE image image VARCHAR(150) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX immatriculation ON vehicule
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule DROP FOREIGN KEY vehicule_ibfk_1
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule CHANGE id_vehicule id_vehicule INT NOT NULL, CHANGE statut statut VARCHAR(100) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX id_carte_grise ON vehicule
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_292FFF1DC277C232 ON vehicule (id_carte_grise)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule ADD CONSTRAINT vehicule_ibfk_1 FOREIGN KEY (id_carte_grise) REFERENCES carte_grise (id_carte_grise) ON DELETE CASCADE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE carte_grise CHANGE id_carte_grise id_carte_grise INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk_id_user ON carte_grise (id_user)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compte DROP FOREIGN KEY FK_CFF652606B3CA4B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compte CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE image image VARCHAR(255) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_cff652606b3ca4b ON compte
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_user ON compte (id_user)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE compte ADD CONSTRAINT FK_CFF652606B3CA4B FOREIGN KEY (id_user) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B93F0033A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B93F0033A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe CHANGE id_employe id_employe INT AUTO_INCREMENT NOT NULL, CHANGE salaire salaire NUMERIC(10, 2) NOT NULL, CHANGE role role VARCHAR(255) DEFAULT 'EMPLOYEE' NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe ADD CONSTRAINT fk_service FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_f804d3b93f0033a2 ON employe
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk_service ON employe (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE employe ADD CONSTRAINT FK_F804D3B93F0033A2 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F326997AC9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement DROP FOREIGN KEY FK_B8B4C6F326997AC9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement CHANGE id_equipement id_equipement INT AUTO_INCREMENT NOT NULL, CHANGE description description TEXT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement ADD CONSTRAINT equipement_ibfk_1 FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_b8b4c6f326997ac9 ON equipement
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_employe ON equipement (id_employe)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE equipement ADD CONSTRAINT FK_B8B4C6F326997AC9 FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL, CHANGE delivered_at delivered_at DATETIME DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE paiement DROP FOREIGN KEY FK_B1DC7A1E5ADA84A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE paiement CHANGE id_paiement id_paiement INT AUTO_INCREMENT NOT NULL, CHANGE date_paiement date_paiement DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE prix prix NUMERIC(10, 0) NOT NULL, CHANGE numero_carte numeroCarte VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_b1dc7a1e5ada84a2 ON paiement
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_reservation ON paiement (id_reservation)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE paiement ADD CONSTRAINT FK_B1DC7A1E5ADA84A2 FOREIGN KEY (id_reservation) REFERENCES reservation (id_reservation) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY FK_1738945326997AC9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY FK_173894533F0033A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY FK_1738945326997AC9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY FK_173894533F0033A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis CHANGE id_permis id_permis INT AUTO_INCREMENT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT fk_employe FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT fk_id_service FOREIGN KEY (id_service) REFERENCES service (id_service) ON UPDATE CASCADE ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_1738945326997ac9 ON permis
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk_employe ON permis (id_employe)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_173894533f0033a2 ON permis
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX fk_id_service ON permis (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT FK_1738945326997AC9 FOREIGN KEY (id_employe) REFERENCES employe (id_employe) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT FK_173894533F0033A2 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE quiz CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE rating rating INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rapport DROP FOREIGN KEY FK_BE34A09CB700B177
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rapport ADD huileDefault VARCHAR(150) DEFAULT NULL, DROP huile_default, CHANGE id_rapport id_rapport INT AUTO_INCREMENT NOT NULL, CHANGE direction direction VARCHAR(150) DEFAULT NULL, CHANGE visibilite visibilite VARCHAR(150) DEFAULT NULL, CHANGE pneaumatique pneaumatique VARCHAR(150) DEFAULT NULL, CHANGE echappement echappement VARCHAR(150) DEFAULT NULL, CHANGE carrosorie carrosorie VARCHAR(150) DEFAULT NULL, CHANGE eclairage eclairage VARCHAR(150) DEFAULT NULL, CHANGE freinage freinage VARCHAR(150) DEFAULT NULL, CHANGE date date DATE DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_be34a09cb700b177 ON rapport
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_resultat ON rapport (id_resultat)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE rapport ADD CONSTRAINT FK_BE34A09CB700B177 FOREIGN KEY (id_resultat) REFERENCES resultat (id_resultat) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955ED5CA9E6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955A76ED395
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955ED5CA9E6
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation DROP FOREIGN KEY FK_42C849557A8CD546
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation CHANGE id_reservation id_reservation INT AUTO_INCREMENT NOT NULL, CHANGE heure_reservation heureReservation VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT reservation_service FOREIGN KEY (service_id) REFERENCES service (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_42c84955ed5ca9e6 ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX reservation_service ON reservation (service_id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_42c84955a76ed395 ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_compte ON reservation (user_id)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_42c849557a8cd546 ON reservation
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_vehicule ON reservation (idVehicule)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C84955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C84955ED5CA9E6 FOREIGN KEY (service_id) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE reservation ADD CONSTRAINT FK_42C849557A8CD546 FOREIGN KEY (idVehicule) REFERENCES vehicule (id_vehicule) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE23F0033A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE2E107968B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE23F0033A2
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat DROP FOREIGN KEY FK_E7DB5DE2E107968B
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat CHANGE id_resultat id_resultat INT AUTO_INCREMENT NOT NULL, CHANGE status status TINYINT(1) DEFAULT NULL, CHANGE huile_default huileDefault TINYINT(1) NOT NULL, CHANGE vin_saisie vinSaisie VARCHAR(255) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT resultat_ibfk_1 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT resultat_ibfk_2 FOREIGN KEY (id_paiement) REFERENCES paiement (id_paiement) ON DELETE SET NULL
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_e7db5de23f0033a2 ON resultat
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_service ON resultat (id_service)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_e7db5de2e107968b ON resultat
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_paiement ON resultat (id_paiement)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE23F0033A2 FOREIGN KEY (id_service) REFERENCES service (id_service) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE resultat ADD CONSTRAINT FK_E7DB5DE2E107968B FOREIGN KEY (id_paiement) REFERENCES paiement (id_paiement) ON DELETE CASCADE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE service CHANGE id_service id_service INT AUTO_INCREMENT NOT NULL, CHANGE prix prix NUMERIC(10, 2) NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE user CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE nom nom VARCHAR(50) CHARACTER SET armscii8 DEFAULT NULL COLLATE `armscii8_general_ci`, CHANGE prenom prenom VARCHAR(50) CHARACTER SET armscii8 DEFAULT NULL COLLATE `armscii8_general_ci`, CHANGE tel tel VARCHAR(20) CHARACTER SET armscii8 DEFAULT NULL COLLATE `armscii8_general_ci`, CHANGE localisation localisation VARCHAR(100) CHARACTER SET armscii8 DEFAULT NULL COLLATE `armscii8_general_ci`, CHANGE email email VARCHAR(150) DEFAULT NULL, CHANGE mot_de_passe mot_de_passe VARCHAR(150) DEFAULT NULL, CHANGE status status VARCHAR(50) CHARACTER SET armscii8 DEFAULT NULL COLLATE `armscii8_general_ci`, CHANGE role role VARCHAR(50) CHARACTER SET armscii8 DEFAULT NULL COLLATE `armscii8_general_ci`, CHANGE image image VARCHAR(150) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1DC277C232
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule CHANGE id_vehicule id_vehicule INT AUTO_INCREMENT NOT NULL, CHANGE statut statut VARCHAR(100) DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX immatriculation ON vehicule (immatriculation)
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX idx_292fff1dc277c232 ON vehicule
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX id_carte_grise ON vehicule (id_carte_grise)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1DC277C232 FOREIGN KEY (id_carte_grise) REFERENCES carte_grise (id_carte_grise) ON DELETE CASCADE
        SQL);
    }
}
