<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914105612 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itinerario_formativos ADD modulospropios_id INT NOT NULL');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA9721733 FOREIGN KEY (modulospropios_id) REFERENCES modulos_propios (id)');
        $this->addSql('CREATE INDEX IDX_EC5A64DA9721733 ON itinerario_formativos (modulospropios_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA9721733');
        $this->addSql('DROP INDEX IDX_EC5A64DA9721733 ON itinerario_formativos');
        $this->addSql('ALTER TABLE itinerario_formativos DROP modulospropios_id');
    }
}
