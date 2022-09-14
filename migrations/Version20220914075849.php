<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914075849 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certificados_profesionales (id INT AUTO_INCREMENT NOT NULL, horas_formacion INT NOT NULL, horas_practicas INT NOT NULL, nivel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE criterios_seleccion (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, titulacion_academica VARCHAR(255) NOT NULL, formacion_previa VARCHAR(255) NOT NULL, edad INT NOT NULL, experiencia_previa VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grupos_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_formativos_certificados (id INT AUTO_INCREMENT NOT NULL, nivel VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, codigo VARCHAR(8) NOT NULL, horas INT NOT NULL, contenido LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_propios (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, objetivos LONGTEXT NOT NULL, duracion VARCHAR(255) NOT NULL, contenido LONGTEXT NOT NULL, con_practicas INT NOT NULL, horas_formacion INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ocupaciones (id INT AUTO_INCREMENT NOT NULL, cno VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_alumnos (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, nivel_academico VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_criterios_plan (id INT AUTO_INCREMENT NOT NULL, fecha_desempleo DATE NOT NULL, sexo TINYINT(1) NOT NULL, inscrito_programa_juvenil_empleo TINYINT(1) NOT NULL, localidad_empadronamiento VARCHAR(255) DEFAULT NULL, edad_minima INT NOT NULL, edad_maxima INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades_formativas (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formaciones ADD areas_profesionales_id INT NOT NULL');
        $this->addSql('ALTER TABLE formaciones ADD CONSTRAINT FK_A1B87DD17C76DA45 FOREIGN KEY (areas_profesionales_id) REFERENCES areas_profesionales (id)');
        $this->addSql('CREATE INDEX IDX_A1B87DD17C76DA45 ON formaciones (areas_profesionales_id)');
        $this->addSql('ALTER TABLE gestion_planes ADD relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE gestion_planes ADD CONSTRAINT FK_CF3953AB3256915B FOREIGN KEY (relation_id) REFERENCES requisitos_criterios_plan (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_CF3953AB3256915B ON gestion_planes (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gestion_planes DROP FOREIGN KEY FK_CF3953AB3256915B');
        $this->addSql('DROP TABLE certificados_profesionales');
        $this->addSql('DROP TABLE criterios_seleccion');
        $this->addSql('DROP TABLE grupos_profesionales');
        $this->addSql('DROP TABLE modulos_formativos_certificados');
        $this->addSql('DROP TABLE modulos_propios');
        $this->addSql('DROP TABLE ocupaciones');
        $this->addSql('DROP TABLE requisitos_alumnos');
        $this->addSql('DROP TABLE requisitos_criterios_plan');
        $this->addSql('DROP TABLE unidades_formativas');
        $this->addSql('ALTER TABLE formaciones DROP FOREIGN KEY FK_A1B87DD17C76DA45');
        $this->addSql('DROP INDEX IDX_A1B87DD17C76DA45 ON formaciones');
        $this->addSql('ALTER TABLE formaciones DROP areas_profesionales_id');
        $this->addSql('DROP INDEX UNIQ_CF3953AB3256915B ON gestion_planes');
        $this->addSql('ALTER TABLE gestion_planes DROP relation_id');
    }
}
