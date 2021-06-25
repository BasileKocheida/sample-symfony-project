<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210519114540 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE payment ADD participant_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE payment ADD CONSTRAINT FK_6D28840DBEF137EE FOREIGN KEY (participant_id_id) REFERENCES participant (id)');
        $this->addSql('CREATE INDEX IDX_6D28840DBEF137EE ON payment (participant_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE payment DROP FOREIGN KEY FK_6D28840DBEF137EE');
        $this->addSql('DROP INDEX IDX_6D28840DBEF137EE ON payment');
        $this->addSql('ALTER TABLE payment DROP participant_id_id');
    }
}
