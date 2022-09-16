<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220916101340 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE becas (id INT AUTO_INCREMENT NOT NULL, requisitos LONGTEXT NOT NULL, importe DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE calendario (id INT AUTO_INCREMENT NOT NULL, tipo_dia VARCHAR(255) NOT NULL, fecha_dia DATE NOT NULL, observaciones LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comunidades (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE criterios_seleccion (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, titulacion_academica VARCHAR(255) NOT NULL, formacion_previa VARCHAR(255) NOT NULL, edad INT NOT NULL, experiencia_previa VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE direcciones (id INT AUTO_INCREMENT NOT NULL, nombre_via VARCHAR(255) NOT NULL, numero INT NOT NULL, bloque VARCHAR(255) DEFAULT NULL, piso INT DEFAULT NULL, puerta VARCHAR(255) DEFAULT NULL, escalera VARCHAR(255) DEFAULT NULL, cp INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestion_planes (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT NOT NULL, requisitos LONGTEXT NOT NULL, año_inicio DATE NOT NULL, año_fin DATE NOT NULL, localidad VARCHAR(255) NOT NULL, destinatario VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horario (id INT AUTO_INCREMENT NOT NULL, horas INT NOT NULL, id_modulos INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE itinerarios_formativos (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, fecha_inicio DATE NOT NULL, fecha_fin DATE NOT NULL, hora_inicio TIME NOT NULL, hora_fin TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE municipios (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personas (id INT AUTO_INCREMENT NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, nif VARCHAR(9) NOT NULL, fecha_nacimiento DATE NOT NULL, telefono INT NOT NULL, email VARCHAR(255) NOT NULL, sexo TINYINT(1) NOT NULL, disponibilidad TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE provincias (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_criterios_plan (id INT AUTO_INCREMENT NOT NULL, fecha_desempleo DATE NOT NULL, sexo TINYINT(1) NOT NULL, inscrito_programa_juvenil_empleo TINYINT(1) NOT NULL, localidad_empadronamiento VARCHAR(255) NOT NULL, edad_minima INT NOT NULL, edad_maxima INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subplanes (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades_formativas (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE becas');
        $this->addSql('DROP TABLE calendario');
        $this->addSql('DROP TABLE comunidades');
        $this->addSql('DROP TABLE criterios_seleccion');
        $this->addSql('DROP TABLE direcciones');
        $this->addSql('DROP TABLE gestion_planes');
        $this->addSql('DROP TABLE horario');
        $this->addSql('DROP TABLE itinerarios_formativos');
        $this->addSql('DROP TABLE municipios');
        $this->addSql('DROP TABLE personas');
        $this->addSql('DROP TABLE provincias');
        $this->addSql('DROP TABLE requisitos_criterios_plan');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE subplanes');
        $this->addSql('DROP TABLE unidades_formativas');
        $this->addSql('DROP TABLE usuarios');
    }
}
