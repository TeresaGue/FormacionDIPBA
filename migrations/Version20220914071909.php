<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914071909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE areas_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE becas (id INT AUTO_INCREMENT NOT NULL, requisitos LONGTEXT NOT NULL, importe DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE familias_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formaciones (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(255) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestion_planes (id INT AUTO_INCREMENT NOT NULL, becas_id INT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, requisitos LONGTEXT NOT NULL, year_inicio DATE DEFAULT NULL, year_fin DATE DEFAULT NULL, localidad VARCHAR(255) DEFAULT NULL, destinatario VARCHAR(255) DEFAULT NULL, INDEX IDX_CF3953ABE4DA2BB4 (becas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE itinerario_formativos (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_formadores (id INT AUTO_INCREMENT NOT NULL, acreditacion VARCHAR(255) NOT NULL, años_experiencia_profesional_con_titulacion INT NOT NULL, años_experiencia_profesional_sin_titulacion INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subplanes (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gestion_planes ADD CONSTRAINT FK_CF3953ABE4DA2BB4 FOREIGN KEY (becas_id) REFERENCES becas (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gestion_planes DROP FOREIGN KEY FK_CF3953ABE4DA2BB4');
        $this->addSql('DROP TABLE areas_profesionales');
        $this->addSql('DROP TABLE becas');
        $this->addSql('DROP TABLE familias_profesionales');
        $this->addSql('DROP TABLE formaciones');
        $this->addSql('DROP TABLE gestion_planes');
        $this->addSql('DROP TABLE itinerario_formativos');
        $this->addSql('DROP TABLE requisitos_formadores');
        $this->addSql('DROP TABLE subplanes');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
