<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210119181054 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, brochure_filename VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE files');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY appointment_ibfk_1');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844B150B50B FOREIGN KEY (Patient_Id) REFERENCES patient (id_Patient)');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY patient_ibfk_2');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT FK_1ADAD7EB10F66A3F FOREIGN KEY (Professional_Id) REFERENCES healthprofessional (Id_Professional)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE files (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('DROP TABLE product');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844B150B50B');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT appointment_ibfk_1 FOREIGN KEY (Patient_Id) REFERENCES patient (id_Patient) ON UPDATE CASCADE');
        $this->addSql('ALTER TABLE patient DROP FOREIGN KEY FK_1ADAD7EB10F66A3F');
        $this->addSql('ALTER TABLE patient ADD CONSTRAINT patient_ibfk_2 FOREIGN KEY (Professional_Id) REFERENCES healthprofessional (Id_Professional) ON UPDATE CASCADE');
    }
}
