<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220915110605 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE areas_profesionales (id INT AUTO_INCREMENT NOT NULL, familias_profesionales_id INT NOT NULL, denominacion VARCHAR(255) NOT NULL, INDEX IDX_572203876A80A53F (familias_profesionales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE becas (id INT AUTO_INCREMENT NOT NULL, requisitos LONGTEXT NOT NULL, importe DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE certificados_profesionalidad (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, horas_formacion INT NOT NULL, horas_practicas INT NOT NULL, nivel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comunidades (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE criterios_seleccion (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, titulacion_academica VARCHAR(255) NOT NULL, formacion_previa VARCHAR(255) NOT NULL, edad INT NOT NULL, experiencia_previa VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE direcciones (id INT AUTO_INCREMENT NOT NULL, municipios_id INT DEFAULT NULL, nombre_via VARCHAR(255) NOT NULL, numero INT NOT NULL, bloque VARCHAR(10) NOT NULL, piso INT DEFAULT NULL, puerta VARCHAR(5) DEFAULT NULL, escalera VARCHAR(20) DEFAULT NULL, codigo_postal INT NOT NULL, INDEX IDX_B0B0BECB4723E346 (municipios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE direcciones_personas (direcciones_id INT NOT NULL, personas_id INT NOT NULL, INDEX IDX_911320C44A9C8C9B (direcciones_id), INDEX IDX_911320C455394E80 (personas_id), PRIMARY KEY(direcciones_id, personas_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE familias_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formaciones (id INT AUTO_INCREMENT NOT NULL, areas_profesionales_id INT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, INDEX IDX_A1B87DD17C76DA45 (areas_profesionales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE gestion_planes (id INT AUTO_INCREMENT NOT NULL, becas_id INT NOT NULL, relation_id INT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, requisitos LONGTEXT NOT NULL, year_inicio DATE DEFAULT NULL, year_fin DATE DEFAULT NULL, localidad VARCHAR(255) DEFAULT NULL, destinatario VARCHAR(255) DEFAULT NULL, INDEX IDX_CF3953ABE4DA2BB4 (becas_id), UNIQUE INDEX UNIQ_CF3953AB3256915B (relation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grupos_profesionales (id INT AUTO_INCREMENT NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE itinerario_formativos (id INT AUTO_INCREMENT NOT NULL, criteriosseleccion_id INT NOT NULL, modulospropios_id INT NOT NULL, certificados_profesionalidad_id INT NOT NULL, personas_id INT NOT NULL, denominacion VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_EC5A64DA20A488EC (criteriosseleccion_id), INDEX IDX_EC5A64DA9721733 (modulospropios_id), INDEX IDX_EC5A64DA240AA6C5 (certificados_profesionalidad_id), INDEX IDX_EC5A64DA55394E80 (personas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_formativos_certificados (id INT AUTO_INCREMENT NOT NULL, unidades_formativas_id INT NOT NULL, nivel VARCHAR(255) NOT NULL, descripcion LONGTEXT DEFAULT NULL, codigo VARCHAR(8) NOT NULL, horas INT NOT NULL, contenido LONGTEXT NOT NULL, INDEX IDX_3FE25CBB52E6F056 (unidades_formativas_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_formativos_certificados_certificados_profesionalidad (modulos_formativos_certificados_id INT NOT NULL, certificados_profesionalidad_id INT NOT NULL, INDEX IDX_EDF6D30CF74045F2 (modulos_formativos_certificados_id), INDEX IDX_EDF6D30C240AA6C5 (certificados_profesionalidad_id), PRIMARY KEY(modulos_formativos_certificados_id, certificados_profesionalidad_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_propios (id INT AUTO_INCREMENT NOT NULL, requisitosalumnos_id INT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, objetivos LONGTEXT NOT NULL, duracion VARCHAR(255) NOT NULL, contenido LONGTEXT NOT NULL, con_practicas TINYINT(1) NOT NULL, horas_formacion INT NOT NULL, UNIQUE INDEX UNIQ_48B397233C91015C (requisitosalumnos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE municipios (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ocupaciones (id INT AUTO_INCREMENT NOT NULL, grupos_profesionales_id INT NOT NULL, cno INT NOT NULL, denominacion VARCHAR(255) NOT NULL, INDEX IDX_4316EAE97130CE12 (grupos_profesionales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ocupaciones_certificados_profesionalidad (ocupaciones_id INT NOT NULL, certificados_profesionalidad_id INT NOT NULL, INDEX IDX_88B7A649037806B (ocupaciones_id), INDEX IDX_88B7A64240AA6C5 (certificados_profesionalidad_id), PRIMARY KEY(ocupaciones_id, certificados_profesionalidad_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personas (id INT AUTO_INCREMENT NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, nif VARCHAR(9) NOT NULL, fecha_nacimiento DATE NOT NULL, telefono INT NOT NULL, email VARCHAR(255) NOT NULL, sexo TINYINT(1) NOT NULL, disponibilidad TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE provincias (id INT AUTO_INCREMENT NOT NULL, comunidades_id INT NOT NULL, nombre VARCHAR(255) NOT NULL, INDEX IDX_9F63142755BF0304 (comunidades_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_alumnos (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, nivel_academico INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_criterios_plan (id INT AUTO_INCREMENT NOT NULL, fecha_desempleo DATE NOT NULL, sexo TINYINT(1) NOT NULL, inscrito_programa_juvenil_empleo TINYINT(1) NOT NULL, localidad_empadronamiento VARCHAR(255) DEFAULT NULL, edad_minima INT NOT NULL, edad_maxima INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requisitos_formadores (id INT AUTO_INCREMENT NOT NULL, modulospropios_id INT NOT NULL, acreditacion VARCHAR(255) NOT NULL, años_experiencia_profesional_con_titulacion INT NOT NULL, años_experiencia_profesional_sin_titulacion INT NOT NULL, UNIQUE INDEX UNIQ_A8C5ED609721733 (modulospropios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subplanes (id INT AUTO_INCREMENT NOT NULL, relation_id INT NOT NULL, itinerario_formativos_id INT NOT NULL, codigo VARCHAR(8) NOT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_900B77233256915B (relation_id), INDEX IDX_900B77236C706373 (itinerario_formativos_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE unidades_formativas (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) NOT NULL, denominacion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, apellido1 VARCHAR(255) NOT NULL, apellido2 VARCHAR(255) NOT NULL, nombre VARCHAR(255) NOT NULL, nif VARCHAR(9) NOT NULL, fecha_nacimiento DATE NOT NULL, telefono INT NOT NULL, email VARCHAR(255) NOT NULL, sexo TINYINT(1) NOT NULL, disponibilidad TINYINT(1) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios_roles (usuarios_id INT NOT NULL, roles_id INT NOT NULL, INDEX IDX_CE0972BAF01D3B25 (usuarios_id), INDEX IDX_CE0972BA38C751C4 (roles_id), PRIMARY KEY(usuarios_id, roles_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE areas_profesionales ADD CONSTRAINT FK_572203876A80A53F FOREIGN KEY (familias_profesionales_id) REFERENCES familias_profesionales (id)');
        $this->addSql('ALTER TABLE direcciones ADD CONSTRAINT FK_B0B0BECB4723E346 FOREIGN KEY (municipios_id) REFERENCES municipios (id)');
        $this->addSql('ALTER TABLE direcciones_personas ADD CONSTRAINT FK_911320C44A9C8C9B FOREIGN KEY (direcciones_id) REFERENCES direcciones (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE direcciones_personas ADD CONSTRAINT FK_911320C455394E80 FOREIGN KEY (personas_id) REFERENCES personas (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formaciones ADD CONSTRAINT FK_A1B87DD17C76DA45 FOREIGN KEY (areas_profesionales_id) REFERENCES areas_profesionales (id)');
        $this->addSql('ALTER TABLE gestion_planes ADD CONSTRAINT FK_CF3953ABE4DA2BB4 FOREIGN KEY (becas_id) REFERENCES becas (id)');
        $this->addSql('ALTER TABLE gestion_planes ADD CONSTRAINT FK_CF3953AB3256915B FOREIGN KEY (relation_id) REFERENCES requisitos_criterios_plan (id)');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA20A488EC FOREIGN KEY (criteriosseleccion_id) REFERENCES criterios_seleccion (id)');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA9721733 FOREIGN KEY (modulospropios_id) REFERENCES modulos_propios (id)');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA240AA6C5 FOREIGN KEY (certificados_profesionalidad_id) REFERENCES certificados_profesionalidad (id)');
        $this->addSql('ALTER TABLE itinerario_formativos ADD CONSTRAINT FK_EC5A64DA55394E80 FOREIGN KEY (personas_id) REFERENCES personas (id)');
        $this->addSql('ALTER TABLE modulos_formativos_certificados ADD CONSTRAINT FK_3FE25CBB52E6F056 FOREIGN KEY (unidades_formativas_id) REFERENCES unidades_formativas (id)');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad ADD CONSTRAINT FK_EDF6D30CF74045F2 FOREIGN KEY (modulos_formativos_certificados_id) REFERENCES modulos_formativos_certificados (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad ADD CONSTRAINT FK_EDF6D30C240AA6C5 FOREIGN KEY (certificados_profesionalidad_id) REFERENCES certificados_profesionalidad (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE modulos_propios ADD CONSTRAINT FK_48B397233C91015C FOREIGN KEY (requisitosalumnos_id) REFERENCES requisitos_alumnos (id)');
        $this->addSql('ALTER TABLE ocupaciones ADD CONSTRAINT FK_4316EAE97130CE12 FOREIGN KEY (grupos_profesionales_id) REFERENCES grupos_profesionales (id)');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad ADD CONSTRAINT FK_88B7A649037806B FOREIGN KEY (ocupaciones_id) REFERENCES ocupaciones (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad ADD CONSTRAINT FK_88B7A64240AA6C5 FOREIGN KEY (certificados_profesionalidad_id) REFERENCES certificados_profesionalidad (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE provincias ADD CONSTRAINT FK_9F63142755BF0304 FOREIGN KEY (comunidades_id) REFERENCES comunidades (id)');
        $this->addSql('ALTER TABLE requisitos_formadores ADD CONSTRAINT FK_A8C5ED609721733 FOREIGN KEY (modulospropios_id) REFERENCES modulos_propios (id)');
        $this->addSql('ALTER TABLE subplanes ADD CONSTRAINT FK_900B77233256915B FOREIGN KEY (relation_id) REFERENCES gestion_planes (id)');
        $this->addSql('ALTER TABLE subplanes ADD CONSTRAINT FK_900B77236C706373 FOREIGN KEY (itinerario_formativos_id) REFERENCES itinerario_formativos (id)');
        $this->addSql('ALTER TABLE usuarios_roles ADD CONSTRAINT FK_CE0972BAF01D3B25 FOREIGN KEY (usuarios_id) REFERENCES usuarios (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE usuarios_roles ADD CONSTRAINT FK_CE0972BA38C751C4 FOREIGN KEY (roles_id) REFERENCES roles (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE areas_profesionales DROP FOREIGN KEY FK_572203876A80A53F');
        $this->addSql('ALTER TABLE direcciones DROP FOREIGN KEY FK_B0B0BECB4723E346');
        $this->addSql('ALTER TABLE direcciones_personas DROP FOREIGN KEY FK_911320C44A9C8C9B');
        $this->addSql('ALTER TABLE direcciones_personas DROP FOREIGN KEY FK_911320C455394E80');
        $this->addSql('ALTER TABLE formaciones DROP FOREIGN KEY FK_A1B87DD17C76DA45');
        $this->addSql('ALTER TABLE gestion_planes DROP FOREIGN KEY FK_CF3953ABE4DA2BB4');
        $this->addSql('ALTER TABLE gestion_planes DROP FOREIGN KEY FK_CF3953AB3256915B');
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA20A488EC');
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA9721733');
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA240AA6C5');
        $this->addSql('ALTER TABLE itinerario_formativos DROP FOREIGN KEY FK_EC5A64DA55394E80');
        $this->addSql('ALTER TABLE modulos_formativos_certificados DROP FOREIGN KEY FK_3FE25CBB52E6F056');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad DROP FOREIGN KEY FK_EDF6D30CF74045F2');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad DROP FOREIGN KEY FK_EDF6D30C240AA6C5');
        $this->addSql('ALTER TABLE modulos_propios DROP FOREIGN KEY FK_48B397233C91015C');
        $this->addSql('ALTER TABLE ocupaciones DROP FOREIGN KEY FK_4316EAE97130CE12');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad DROP FOREIGN KEY FK_88B7A649037806B');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad DROP FOREIGN KEY FK_88B7A64240AA6C5');
        $this->addSql('ALTER TABLE provincias DROP FOREIGN KEY FK_9F63142755BF0304');
        $this->addSql('ALTER TABLE requisitos_formadores DROP FOREIGN KEY FK_A8C5ED609721733');
        $this->addSql('ALTER TABLE subplanes DROP FOREIGN KEY FK_900B77233256915B');
        $this->addSql('ALTER TABLE subplanes DROP FOREIGN KEY FK_900B77236C706373');
        $this->addSql('ALTER TABLE usuarios_roles DROP FOREIGN KEY FK_CE0972BAF01D3B25');
        $this->addSql('ALTER TABLE usuarios_roles DROP FOREIGN KEY FK_CE0972BA38C751C4');
        $this->addSql('DROP TABLE areas_profesionales');
        $this->addSql('DROP TABLE becas');
        $this->addSql('DROP TABLE certificados_profesionalidad');
        $this->addSql('DROP TABLE comunidades');
        $this->addSql('DROP TABLE criterios_seleccion');
        $this->addSql('DROP TABLE direcciones');
        $this->addSql('DROP TABLE direcciones_personas');
        $this->addSql('DROP TABLE familias_profesionales');
        $this->addSql('DROP TABLE formaciones');
        $this->addSql('DROP TABLE gestion_planes');
        $this->addSql('DROP TABLE grupos_profesionales');
        $this->addSql('DROP TABLE itinerario_formativos');
        $this->addSql('DROP TABLE modulos_formativos_certificados');
        $this->addSql('DROP TABLE modulos_formativos_certificados_certificados_profesionalidad');
        $this->addSql('DROP TABLE modulos_propios');
        $this->addSql('DROP TABLE municipios');
        $this->addSql('DROP TABLE ocupaciones');
        $this->addSql('DROP TABLE ocupaciones_certificados_profesionalidad');
        $this->addSql('DROP TABLE personas');
        $this->addSql('DROP TABLE provincias');
        $this->addSql('DROP TABLE requisitos_alumnos');
        $this->addSql('DROP TABLE requisitos_criterios_plan');
        $this->addSql('DROP TABLE requisitos_formadores');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE subplanes');
        $this->addSql('DROP TABLE unidades_formativas');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE usuarios_roles');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
