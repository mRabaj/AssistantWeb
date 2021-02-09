<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210119144500 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE files (id INT AUTO_INCREMENT NOT NULL, id_files INT NOT NULL, id_patient INT NOT NULL, title VARCHAR(255) NOT NULL, create_at DATETIME NOT NULL, expiry_date_at DATETIME NOT NULL, file_blob LONGBLOB NOT NULL, file_extension VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE patient CHANGE Professional_Id Professional_Id INT DEFAULT NULL, CHANGE marital_status marital_status VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE files');
        $this->addSql('ALTER TABLE patient CHANGE marital_status marital_status VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE Professional_Id Professional_Id INT NOT NULL');
    }
}
