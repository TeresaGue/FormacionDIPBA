<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919103245 extends AbstractMigration
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
        $this->addSql('CREATE TABLE calendario (id INT AUTO_INCREMENT NOT NULL, tipo_dia VARCHAR(255) NOT NULL, fecha_dia DATE NOT NULL, observaciones LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE certificados_profesionalidad (id INT AUTO_INCREMENT NOT NULL, horas_form INT NOT NULL, horas_pract INT NOT NULL, nivel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comunidades (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE criterios_seleccion (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, titulacion_academica VARCHAR(255) NOT NULL, formacion_previa VARCHAR(255) NOT NULL, edad INT NOT NULL, experiencia_previa VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE direcciones (id INT AUTO_INCREMENT NOT NULL, nombre_via VARCHAR(255) NOT NULL, numero INT NOT NULL, bloque VARCHAR(255) DEFAULT NULL, piso INT DEFAULT NULL, puerta VARCHAR(255) DEFAULT NULL, escalera VARCHAR(255) DEFAULT NULL, cp INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE estados (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE familias_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formaciones (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestion_planes (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT NOT NULL, requisitos LONGTEXT NOT NULL, año_inicio DATE NOT NULL, año_fin DATE NOT NULL, localidad VARCHAR(255) NOT NULL, destinatario VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grupos_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE horario (id INT AUTO_INCREMENT NOT NULL, horas INT NOT NULL, id_modulos INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE itinerarios_formativos (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, fecha_inicio DATE NOT NULL, fecha_fin DATE NOT NULL, hora_inicio TIME NOT NULL, hora_fin TIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_formativos (id INT AUTO_INCREMENT NOT NULL, tipo_modulos TINYINT(1) NOT NULL, nivel INT NOT NULL, descripcion LONGTEXT NOT NULL, codigo VARCHAR(8) NOT NULL, objetivos LONGTEXT NOT NULL, duración INT NOT NULL, horas_formacion INT NOT NULL, con_practicas TINYINT(1) NOT NULL, contenido LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE municipios (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nivel_estudios_finalizados (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ocupaciones (id INT AUTO_INCREMENT NOT NULL, cno INT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE otros_indicadores (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personas (id INT AUTO_INCREMENT NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, nif VARCHAR(9) NOT NULL, fecha_nacimiento DATE NOT NULL, telefono INT NOT NULL, email VARCHAR(255) NOT NULL, sexo TINYINT(1) NOT NULL, disponibilidad TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE provincias (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_alumnos (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, nivel_academico INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_criterios_plan (id INT AUTO_INCREMENT NOT NULL, fecha_desempleo DATE NOT NULL, sexo TINYINT(1) NOT NULL, inscrito_programa_juvenil_empleo TINYINT(1) NOT NULL, localidad_empadronamiento VARCHAR(255) NOT NULL, edad_minima INT NOT NULL, edad_maxima INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_formadores (id INT AUTO_INCREMENT NOT NULL, acreditacion VARCHAR(255) NOT NULL, años_experiencia_profesional_con_titulacion INT NOT NULL, años_experiencia_profesional_sin_titulacion INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE situacion_laboral (id INT AUTO_INCREMENT NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE solicitudes (id INT AUTO_INCREMENT NOT NULL, origen TINYINT(1) NOT NULL, validada TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subplanes (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades_formativas (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE areas_profesionales');
        $this->addSql('DROP TABLE becas');
        $this->addSql('DROP TABLE calendario');
        $this->addSql('DROP TABLE certificados_profesionalidad');
        $this->addSql('DROP TABLE comunidades');
        $this->addSql('DROP TABLE criterios_seleccion');
        $this->addSql('DROP TABLE direcciones');
        $this->addSql('DROP TABLE estados');
        $this->addSql('DROP TABLE familias_profesionales');
        $this->addSql('DROP TABLE formaciones');
        $this->addSql('DROP TABLE gestion_planes');
        $this->addSql('DROP TABLE grupos_profesionales');
        $this->addSql('DROP TABLE horario');
        $this->addSql('DROP TABLE itinerarios_formativos');
        $this->addSql('DROP TABLE modulos_formativos');
        $this->addSql('DROP TABLE municipios');
        $this->addSql('DROP TABLE nivel_estudios_finalizados');
        $this->addSql('DROP TABLE ocupaciones');
        $this->addSql('DROP TABLE otros_indicadores');
        $this->addSql('DROP TABLE personas');
        $this->addSql('DROP TABLE provincias');
        $this->addSql('DROP TABLE requisitos_alumnos');
        $this->addSql('DROP TABLE requisitos_criterios_plan');
        $this->addSql('DROP TABLE requisitos_formadores');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE situacion_laboral');
        $this->addSql('DROP TABLE solicitudes');
        $this->addSql('DROP TABLE subplanes');
        $this->addSql('DROP TABLE unidades_formativas');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
