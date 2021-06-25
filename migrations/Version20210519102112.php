<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210519102112 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant CHANGE campaign_id campaign_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE participant ADD CONSTRAINT FK_D79F6B113141FA38 FOREIGN KEY (campaign_id_id) REFERENCES campaign (id)');
        $this->addSql('CREATE INDEX IDX_D79F6B113141FA38 ON participant (campaign_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participant DROP FOREIGN KEY FK_D79F6B113141FA38');
        $this->addSql('DROP INDEX IDX_D79F6B113141FA38 ON participant');
        $this->addSql('ALTER TABLE participant CHANGE campaign_id_id campaign_id INT NOT NULL');
    }
}
