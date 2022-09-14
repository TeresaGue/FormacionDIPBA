<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914074121 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE areas_profesionales ADD familias_profesionales_id INT NOT NULL');
        $this->addSql('ALTER TABLE areas_profesionales ADD CONSTRAINT FK_572203876A80A53F FOREIGN KEY (familias_profesionales_id) REFERENCES familias_profesionales (id)');
        $this->addSql('CREATE INDEX IDX_572203876A80A53F ON areas_profesionales (familias_profesionales_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE areas_profesionales DROP FOREIGN KEY FK_572203876A80A53F');
        $this->addSql('DROP INDEX IDX_572203876A80A53F ON areas_profesionales');
        $this->addSql('ALTER TABLE areas_profesionales DROP familias_profesionales_id');
    }
}
