<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200608114201 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personnes (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(45) DEFAULT NULL, prenom VARCHAR(45) DEFAULT NULL, datedenaissance DATE DEFAULT NULL, telephone VARCHAR(45) DEFAULT NULL, email VARCHAR(45) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE personne');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE personne (idpersonne INT AUTO_INCREMENT NOT NULL, nom VARCHAR(45) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, prenom VARCHAR(45) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, datedenaissance DATE DEFAULT \'NULL\', telephone VARCHAR(45) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, email VARCHAR(45) CHARACTER SET utf8 DEFAULT \'NULL\' COLLATE `utf8_general_ci`, PRIMARY KEY(idpersonne)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE personnes');
    }
}
