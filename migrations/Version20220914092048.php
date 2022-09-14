<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914092048 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certificados_profesionalidad (id INT AUTO_INCREMENT NOT NULL, horas_formacion INT NOT NULL, horas_practicas INT NOT NULL, nivel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modulos_formativos_certificados_certificados_profesionalidad (modulos_formativos_certificados_id INT NOT NULL, certificados_profesionalidad_id INT NOT NULL, INDEX IDX_EDF6D30CF74045F2 (modulos_formativos_certificados_id), INDEX IDX_EDF6D30C240AA6C5 (certificados_profesionalidad_id), PRIMARY KEY(modulos_formativos_certificados_id, certificados_profesionalidad_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ocupaciones_certificados_profesionalidad (ocupaciones_id INT NOT NULL, certificados_profesionalidad_id INT NOT NULL, INDEX IDX_88B7A649037806B (ocupaciones_id), INDEX IDX_88B7A64240AA6C5 (certificados_profesionalidad_id), PRIMARY KEY(ocupaciones_id, certificados_profesionalidad_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad ADD CONSTRAINT FK_EDF6D30CF74045F2 FOREIGN KEY (modulos_formativos_certificados_id) REFERENCES modulos_formativos_certificados (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad ADD CONSTRAINT FK_EDF6D30C240AA6C5 FOREIGN KEY (certificados_profesionalidad_id) REFERENCES certificados_profesionalidad (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad ADD CONSTRAINT FK_88B7A649037806B FOREIGN KEY (ocupaciones_id) REFERENCES ocupaciones (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad ADD CONSTRAINT FK_88B7A64240AA6C5 FOREIGN KEY (certificados_profesionalidad_id) REFERENCES certificados_profesionalidad (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE certificados_profesionales');
        $this->addSql('DROP TABLE requisitos_alumnos');
        $this->addSql('ALTER TABLE modulos_formativos_certificados ADD unidades_formativas_id INT NOT NULL');
        $this->addSql('ALTER TABLE modulos_formativos_certificados ADD CONSTRAINT FK_3FE25CBB52E6F056 FOREIGN KEY (unidades_formativas_id) REFERENCES unidades_formativas (id)');
        $this->addSql('CREATE INDEX IDX_3FE25CBB52E6F056 ON modulos_formativos_certificados (unidades_formativas_id)');
        $this->addSql('ALTER TABLE ocupaciones ADD grupos_profesionales_id INT NOT NULL');
        $this->addSql('ALTER TABLE ocupaciones ADD CONSTRAINT FK_4316EAE97130CE12 FOREIGN KEY (grupos_profesionales_id) REFERENCES grupos_profesionales (id)');
        $this->addSql('CREATE INDEX IDX_4316EAE97130CE12 ON ocupaciones (grupos_profesionales_id)');
        $this->addSql('ALTER TABLE subplanes ADD relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE subplanes ADD CONSTRAINT FK_900B77233256915B FOREIGN KEY (relation_id) REFERENCES gestion_planes (id)');
        $this->addSql('CREATE INDEX IDX_900B77233256915B ON subplanes (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE certificados_profesionales (id INT AUTO_INCREMENT NOT NULL, horas_formacion INT NOT NULL, horas_practicas INT NOT NULL, nivel INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE requisitos_alumnos (id INT AUTO_INCREMENT NOT NULL, codigo VARCHAR(8) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, denominacion VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, nivel_academico VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad DROP FOREIGN KEY FK_EDF6D30CF74045F2');
        $this->addSql('ALTER TABLE modulos_formativos_certificados_certificados_profesionalidad DROP FOREIGN KEY FK_EDF6D30C240AA6C5');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad DROP FOREIGN KEY FK_88B7A649037806B');
        $this->addSql('ALTER TABLE ocupaciones_certificados_profesionalidad DROP FOREIGN KEY FK_88B7A64240AA6C5');
        $this->addSql('DROP TABLE certificados_profesionalidad');
        $this->addSql('DROP TABLE modulos_formativos_certificados_certificados_profesionalidad');
        $this->addSql('DROP TABLE ocupaciones_certificados_profesionalidad');
        $this->addSql('ALTER TABLE modulos_formativos_certificados DROP FOREIGN KEY FK_3FE25CBB52E6F056');
        $this->addSql('DROP INDEX IDX_3FE25CBB52E6F056 ON modulos_formativos_certificados');
        $this->addSql('ALTER TABLE modulos_formativos_certificados DROP unidades_formativas_id');
        $this->addSql('ALTER TABLE ocupaciones DROP FOREIGN KEY FK_4316EAE97130CE12');
        $this->addSql('DROP INDEX IDX_4316EAE97130CE12 ON ocupaciones');
        $this->addSql('ALTER TABLE ocupaciones DROP grupos_profesionales_id');
        $this->addSql('ALTER TABLE subplanes DROP FOREIGN KEY FK_900B77233256915B');
        $this->addSql('DROP INDEX IDX_900B77233256915B ON subplanes');
        $this->addSql('ALTER TABLE subplanes DROP relation_id');
    }
}
