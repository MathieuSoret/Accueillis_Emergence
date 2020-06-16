<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200612124629 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE t_Accueillis (id INT AUTO_INCREMENT NOT NULL, id_accueilli BIGINT NOT NULL, qualite VARCHAR(8) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, date_naissance DATETIME DEFAULT NULL, ville_naissance VARCHAR(25) DEFAULT NULL, ref_nationalite VARCHAR(4) DEFAULT NULL, date_arrivee DATETIME DEFAULT NULL, ref_prescripteur BIGINT DEFAULT NULL, isole TINYINT(1) DEFAULT NULL, ref_accueilli_famille BIGINT DEFAULT NULL, sexe VARCHAR(4) DEFAULT NULL, adulte TINYINT(1) DEFAULT NULL, actif TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Accueillis_Export_Errors (id INT AUTO_INCREMENT NOT NULL, champ VARCHAR(255) DEFAULT NULL, erreur VARCHAR(255) DEFAULT NULL, ligne BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Accueilli_Situation (id INT AUTO_INCREMENT NOT NULL, id_accueilli_situation BIGINT NOT NULL, date_situation DATETIME DEFAULT NULL, ref_accueilli BIGINT DEFAULT NULL, ref_hebergement BIGINT DEFAULT NULL, ref_domiciliation BIGINT DEFAULT NULL, actuel TINYINT(1) DEFAULT NULL, ref_administrative BIGINT DEFAULT NULL, ref_protection BIGINT DEFAULT NULL, gestionnaire VARCHAR(25) DEFAULT NULL, suivi_social TINYINT(1) DEFAULT NULL, suivi_observations VARCHAR(255) DEFAULT NULL, ref_sante BIGINT DEFAULT NULL, appel_115 TINYINT(1) DEFAULT NULL, appel_observations VARCHAR(50) DEFAULT NULL, mobilite_reduite TINYINT(1) DEFAULT NULL, animal TINYINT(1) DEFAULT NULL, animal_observations VARCHAR(255) DEFAULT NULL, observations VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Activite (id INT AUTO_INCREMENT NOT NULL, id_activite BIGINT NOT NULL, activite VARCHAR(255) DEFAULT NULL, d_activite VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Domiciliation (id INT AUTO_INCREMENT NOT NULL, id_domiciliation BIGINT NOT NULL, domiciliation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Famille (id INT AUTO_INCREMENT NOT NULL, id_famille BIGINT NOT NULL, famille VARCHAR(255) DEFAULT NULL, observation LONGTEXT DEFAULT NULL, diff BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Famille_Details (id INT AUTO_INCREMENT NOT NULL, ref_famille_details BIGINT DEFAULT NULL, ref_famille BIGINT DEFAULT NULL, ref_accueilli BIGINT DEFAULT NULL, ref_lien BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Hebergement (id INT AUTO_INCREMENT NOT NULL, id_hebergement BIGINT NOT NULL, hebergement VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Liens (id INT AUTO_INCREMENT NOT NULL, id_lien BIGINT NOT NULL, lien VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Pays (id INT AUTO_INCREMENT NOT NULL, id_pays VARCHAR(4) NOT NULL, pays VARCHAR(125) DEFAULT NULL, groupe VARCHAR(125) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Prescripteur (id INT AUTO_INCREMENT NOT NULL, id_prescripteur BIGINT NOT NULL, prescripteur VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Presents (id INT AUTO_INCREMENT NOT NULL, id_detail_session BIGINT NOT NULL, date_session DATETIME DEFAULT NULL, ref_activite BIGINT DEFAULT NULL, activite VARCHAR(255) DEFAULT NULL, ref_accueilli BIGINT DEFAULT NULL, qualite VARCHAR(8) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, ref_session BIGINT DEFAULT NULL, date_naissance DATETIME DEFAULT NULL, ref_nationalite VARCHAR(4) DEFAULT NULL, date_arrivee DATETIME DEFAULT NULL, ref_prescripteur BIGINT DEFAULT NULL, isole TINYINT(1) DEFAULT NULL, pays VARCHAR(125) DEFAULT NULL, groupe VARCHAR(125) DEFAULT NULL, sexe VARCHAR(4) DEFAULT NULL, adulte TINYINT(1) DEFAULT NULL, ref_accueilli_famille BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Presents_Famille (id INT AUTO_INCREMENT NOT NULL, id_detail_session BIGINT NOT NULL, date_session DATETIME DEFAULT NULL, ref_activite BIGINT DEFAULT NULL, activite VARCHAR(255) DEFAULT NULL, ref_accueilli BIGINT DEFAULT NULL, qualite VARCHAR(8) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, ref_session BIGINT DEFAULT NULL, date_naissance DATETIME DEFAULT NULL, ref_nationalite VARCHAR(4) DEFAULT NULL, date_arrivee DATETIME DEFAULT NULL, ref_prescripteur BIGINT DEFAULT NULL, isole TINYINT(1) DEFAULT NULL, pays VARCHAR(125) DEFAULT NULL, groupe VARCHAR(125) DEFAULT NULL, sexe VARCHAR(4) DEFAULT NULL, adulte TINYINT(1) DEFAULT NULL, ref_accueilli_famille BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Protection (id INT AUTO_INCREMENT NOT NULL, id_protection BIGINT NOT NULL, protection VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Ressources (id INT AUTO_INCREMENT NOT NULL, id_ressources BIGINT NOT NULL, ressources VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Sante (id INT AUTO_INCREMENT NOT NULL, id_sante BIGINT NOT NULL, droit_sante VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Session (id INT AUTO_INCREMENT NOT NULL, id_session BIGINT NOT NULL, date_session DATETIME DEFAULT NULL, ref_activite BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Session_Details (id INT AUTO_INCREMENT NOT NULL, id_detail_session BIGINT NOT NULL, ref_session BIGINT DEFAULT NULL, ref_accueilli BIGINT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE t_Situation (id INT AUTO_INCREMENT NOT NULL, id_situation BIGINT NOT NULL, situation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE t_Accueillis');
        $this->addSql('DROP TABLE t_Accueillis_Export_Errors');
        $this->addSql('DROP TABLE t_Accueilli_Situation');
        $this->addSql('DROP TABLE t_Activite');
        $this->addSql('DROP TABLE t_Domiciliation');
        $this->addSql('DROP TABLE t_Famille');
        $this->addSql('DROP TABLE t_Famille_Details');
        $this->addSql('DROP TABLE t_Hebergement');
        $this->addSql('DROP TABLE t_Liens');
        $this->addSql('DROP TABLE t_Pays');
        $this->addSql('DROP TABLE t_Prescripteur');
        $this->addSql('DROP TABLE t_Presents');
        $this->addSql('DROP TABLE t_Presents_Famille');
        $this->addSql('DROP TABLE t_Protection');
        $this->addSql('DROP TABLE t_Ressources');
        $this->addSql('DROP TABLE t_Sante');
        $this->addSql('DROP TABLE t_Session');
        $this->addSql('DROP TABLE t_Session_Details');
        $this->addSql('DROP TABLE t_Situation');
        $this->addSql('DROP TABLE user');
    }
}
