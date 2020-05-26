<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200526140134 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, mediator_id INT DEFAULT NULL, date_time DATETIME NOT NULL, type TINYINT(1) NOT NULL, INDEX IDX_FE38F844A76ED395 (user_id), INDEX IDX_FE38F844F70452F0 (mediator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE document (id INT AUTO_INCREMENT NOT NULL, type_id INT DEFAULT NULL, litigation_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, version INT DEFAULT NULL, INDEX IDX_D8698A76C54C8C93 (type_id), INDEX IDX_D8698A767CBE719 (litigation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE expertise_field (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE litigation (id INT AUTO_INCREMENT NOT NULL, expertise_field_id INT DEFAULT NULL, subject VARCHAR(255) NOT NULL, date_time DATETIME NOT NULL, article VARCHAR(255) NOT NULL, payment VARCHAR(255) NOT NULL, refund VARCHAR(255) DEFAULT NULL, delay VARCHAR(255) DEFAULT NULL, status TINYINT(1) DEFAULT NULL, INDEX IDX_B432B067501635BD (expertise_field_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mediator (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, date_time DATETIME NOT NULL, contenu LONGTEXT NOT NULL, from_user TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE request (id INT AUTO_INCREMENT NOT NULL, mediator_id INT DEFAULT NULL, subject VARCHAR(255) NOT NULL, party VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_3B978F9FF70452F0 (mediator_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, first_name VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, postal_code VARCHAR(255) NOT NULL, city VARCHAR(255) NOT NULL, company VARCHAR(255) NOT NULL, lawyer_id INT DEFAULT NULL, phone VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844F70452F0 FOREIGN KEY (mediator_id) REFERENCES mediator (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A76C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A767CBE719 FOREIGN KEY (litigation_id) REFERENCES litigation (id)');
        $this->addSql('ALTER TABLE litigation ADD CONSTRAINT FK_B432B067501635BD FOREIGN KEY (expertise_field_id) REFERENCES expertise_field (id)');
        $this->addSql('ALTER TABLE request ADD CONSTRAINT FK_3B978F9FF70452F0 FOREIGN KEY (mediator_id) REFERENCES mediator (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE litigation DROP FOREIGN KEY FK_B432B067501635BD');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A767CBE719');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844F70452F0');
        $this->addSql('ALTER TABLE request DROP FOREIGN KEY FK_3B978F9FF70452F0');
        $this->addSql('ALTER TABLE document DROP FOREIGN KEY FK_D8698A76C54C8C93');
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844A76ED395');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE expertise_field');
        $this->addSql('DROP TABLE litigation');
        $this->addSql('DROP TABLE mediator');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE request');
        $this->addSql('DROP TABLE type');
        $this->addSql('DROP TABLE user');
    }
}
