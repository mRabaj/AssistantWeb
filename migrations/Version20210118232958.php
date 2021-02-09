<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118232958 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient ADD landline_phone VARCHAR(255) DEFAULT NULL, ADD address_2 VARCHAR(255) DEFAULT NULL, ADD general_remarks VARCHAR(255) DEFAULT NULL, ADD marital_status VARCHAR(255) NOT NULL, ADD leisure VARCHAR(255) DEFAULT NULL, ADD mutual VARCHAR(255) DEFAULT NULL, ADD sent_by VARCHAR(255) DEFAULT NULL, ADD manual_preference VARCHAR(255) DEFAULT NULL, ADD notes_on_history VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE patient DROP landline_phone, DROP address_2, DROP general_remarks, DROP marital_status, DROP leisure, DROP mutual, DROP sent_by, DROP manual_preference, DROP notes_on_history');
    }
}
