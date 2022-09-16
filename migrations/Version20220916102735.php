<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220916102735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE modulos_formativos (id INT AUTO_INCREMENT NOT NULL, tipo_modulos TINYINT(1) NOT NULL, nivel INT NOT NULL, descripcion LONGTEXT NOT NULL, codigo VARCHAR(8) NOT NULL, objetivos LONGTEXT NOT NULL, duración INT NOT NULL, horas_formacion INT NOT NULL, con_practicas TINYINT(1) NOT NULL, contenido LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE modulos_formativos');
    }
}
