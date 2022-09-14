<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914095855 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gestion_planes CHANGE year_inicio year_inicio DATE DEFAULT NULL, CHANGE year_fin year_fin DATE DEFAULT NULL, CHANGE localidad localidad VARCHAR(255) DEFAULT NULL, CHANGE destinatario destinatario VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE requisitos_criterios_plan CHANGE localidad_empadronamiento localidad_empadronamiento VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gestion_planes CHANGE year_inicio year_inicio DATE DEFAULT \'NULL\', CHANGE year_fin year_fin DATE DEFAULT \'NULL\', CHANGE localidad localidad VARCHAR(255) DEFAULT \'NULL\', CHANGE destinatario destinatario VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE requisitos_criterios_plan CHANGE localidad_empadronamiento localidad_empadronamiento VARCHAR(255) DEFAULT \'NULL\'');
    }
}
