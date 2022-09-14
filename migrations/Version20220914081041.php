<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220914081041 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE requisitos_formadores ADD relation_id INT NOT NULL');
        $this->addSql('ALTER TABLE requisitos_formadores ADD CONSTRAINT FK_A8C5ED603256915B FOREIGN KEY (relation_id) REFERENCES modulos_propios (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_A8C5ED603256915B ON requisitos_formadores (relation_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE requisitos_formadores DROP FOREIGN KEY FK_A8C5ED603256915B');
        $this->addSql('DROP INDEX UNIQ_A8C5ED603256915B ON requisitos_formadores');
        $this->addSql('ALTER TABLE requisitos_formadores DROP relation_id');
    }
}
