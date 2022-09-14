<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914104210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itinerario_formativos ADD certificados_profesionalidad_id INT NOT NULL');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA240AA6C5 FOREIGN KEY (certificados_profesionalidad_id) REFERENCES certificados_profesionalidad (id)');
        $this->addSql('CREATE INDEX IDX_EC5A64DA240AA6C5 ON itinerario_formativos (certificados_profesionalidad_id)');
        $this->addSql('ALTER TABLE subplanes ADD itinerario_formativos_id INT NOT NULL');
        $this->addSql('ALTER TABLE subplanes ADD CONSTRAINT FK_900B77236C706373 FOREIGN KEY (itinerario_formativos_id) REFERENCES itinerario_formativos (id)');
        $this->addSql('CREATE INDEX IDX_900B77236C706373 ON subplanes (itinerario_formativos_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA240AA6C5');
        $this->addSql('DROP INDEX IDX_EC5A64DA240AA6C5 ON itinerario_formativos');
        $this->addSql('ALTER TABLE itinerario_formativos DROP certificados_profesionalidad_id');
        $this->addSql('ALTER TABLE subplanes DROP FOREIGN KEY FK_900B77236C706373');
        $this->addSql('DROP INDEX IDX_900B77236C706373 ON subplanes');
        $this->addSql('ALTER TABLE subplanes DROP itinerario_formativos_id');
    }
}
