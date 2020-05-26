<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200526150224 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE demand (id INT AUTO_INCREMENT NOT NULL, mediator_id INT DEFAULT NULL, subject VARCHAR(255) NOT NULL, party VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_428D7973F70452F0 (mediator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE demand ADD CONSTRAINT FK_428D7973F70452F0 FOREIGN KEY (mediator_id) REFERENCES mediator (id)');
        $this->addSql('DROP TABLE request');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE request (id INT AUTO_INCREMENT NOT NULL, mediator_id INT DEFAULT NULL, subject VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, party VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, status TINYINT(1) NOT NULL, INDEX IDX_3B978F9FF70452F0 (mediator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9FF70452F0 FOREIGN KEY (mediator_id) REFERENCES mediator (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('DROP TABLE demand');
    }
}
