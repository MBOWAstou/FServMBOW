<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210325101547 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acces ADD autorisation_id_id INT NOT NULL, ADD document_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B103B0E139B FOREIGN KEY (autorisation_id_id) REFERENCES autorisation (id)');
        $this->addSql('ALTER TABLE acces ADD CONSTRAINT FK_D0F43B1016E5E825 FOREIGN KEY (document_id_id) REFERENCES document (id)');
        $this->addSql('CREATE INDEX IDX_D0F43B103B0E139B ON acces (autorisation_id_id)');
        $this->addSql('CREATE INDEX IDX_D0F43B1016E5E825 ON acces (document_id_id)');
        $this->addSql('ALTER TABLE autorisation CHANGE ecriture ecriture TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE document ADD nom VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B103B0E139B');
        $this->addSql('ALTER TABLE acces DROP FOREIGN KEY FK_D0F43B1016E5E825');
        $this->addSql('DROP INDEX IDX_D0F43B103B0E139B ON acces');
        $this->addSql('DROP INDEX IDX_D0F43B1016E5E825 ON acces');
        $this->addSql('ALTER TABLE acces DROP autorisation_id_id, DROP document_id_id');
        $this->addSql('ALTER TABLE autorisation CHANGE ecriture ecriture VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE document DROP nom');
    }
}
