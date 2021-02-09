<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210118225017 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment CHANGE Patient_Id Patient_Id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE patient ADD address VARCHAR(255) NOT NULL, ADD post_code VARCHAR(50) NOT NULL, ADD mail_address VARCHAR(255) NOT NULL, ADD number_of_children VARCHAR(255) DEFAULT NULL, ADD occupation_education VARCHAR(255) DEFAULT NULL, ADD attending_physician VARCHAR(255) DEFAULT NULL, ADD social_security_number INT NOT NULL, ADD disease VARCHAR(255) DEFAULT NULL, ADD psycology VARCHAR(255) DEFAULT NULL, ADD medical_treatment VARCHAR(255) DEFAULT NULL, ADD long_lasting_treatment VARCHAR(255) DEFAULT NULL, ADD punctual_processing VARCHAR(255) DEFAULT NULL, ADD other_medical_history VARCHAR(255) DEFAULT NULL, ADD sprain VARCHAR(255) DEFAULT NULL, ADD fracture VARCHAR(255) DEFAULT NULL, ADD dislocation VARCHAR(255) DEFAULT NULL, ADD car_accident VARCHAR(255) DEFAULT NULL, ADD accident_on_the_public_road VARCHAR(255) DEFAULT NULL, ADD fall VARCHAR(255) DEFAULT NULL, ADD other_trauma_history VARCHAR(255) DEFAULT NULL, ADD orthopaedic VARCHAR(255) DEFAULT NULL, ADD head_churigie VARCHAR(255) DEFAULT NULL, ADD chest_churigie VARCHAR(255) DEFAULT NULL, ADD churigia_of_abdomen VARCHAR(255) DEFAULT NULL, ADD gynecological_churigie VARCHAR(255) DEFAULT NULL, ADD orl VARCHAR(255) DEFAULT NULL, ADD death VARCHAR(255) DEFAULT NULL, ADD childbirth VARCHAR(255) DEFAULT NULL, ADD other_family_history VARCHAR(255) DEFAULT NULL, CHANGE Professional_Id Professional_Id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment CHANGE Patient_Id Patient_Id INT NOT NULL');
        $this->addSql('ALTER TABLE patient DROP address, DROP post_code, DROP mail_address, DROP number_of_children, DROP occupation_education, DROP attending_physician, DROP social_security_number, DROP disease, DROP psycology, DROP medical_treatment, DROP long_lasting_treatment, DROP punctual_processing, DROP other_medical_history, DROP sprain, DROP fracture, DROP dislocation, DROP car_accident, DROP accident_on_the_public_road, DROP fall, DROP other_trauma_history, DROP orthopaedic, DROP head_churigie, DROP chest_churigie, DROP churigia_of_abdomen, DROP gynecological_churigie, DROP orl, DROP death, DROP childbirth, DROP other_family_history, CHANGE Professional_Id Professional_Id INT NOT NULL');
    }
}
