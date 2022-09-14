<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914101335 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itinerario_formativos ADD criterios_id INT NOT NULL');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA3505EC45 FOREIGN KEY (criterios_id) REFERENCES criterios_seleccion (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_EC5A64DA3505EC45 ON itinerario_formativos (criterios_id)');
        $this->addSql('ALTER TABLE modulos_propios ADD relation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modulos_propios ADD CONSTRAINT FK_48B397233256915B FOREIGN KEY (relation_id) REFERENCES requisitos_alumnos (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_48B397233256915B ON modulos_propios (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA3505EC45');
        $this->addSql('DROP INDEX UNIQ_EC5A64DA3505EC45 ON itinerario_formativos');
        $this->addSql('ALTER TABLE itinerario_formativos DROP criterios_id');
        $this->addSql('ALTER TABLE modulos_propios DROP FOREIGN KEY FK_48B397233256915B');
        $this->addSql('DROP INDEX UNIQ_48B397233256915B ON modulos_propios');
        $this->addSql('ALTER TABLE modulos_propios DROP relation_id');
    }
}
