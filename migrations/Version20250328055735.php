<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250328055735 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE imported_file (id INT AUTO_INCREMENT NOT NULL, business_account VARCHAR(100) DEFAULT NULL, event_account VARCHAR(100) DEFAULT NULL, account_last_event VARCHAR(100) DEFAULT NULL, file_number INT DEFAULT NULL, civility VARCHAR(10) DEFAULT NULL, current_vehicle_owner VARCHAR(100) DEFAULT NULL, name VARCHAR(100) DEFAULT NULL, first_name VARCHAR(100) DEFAULT NULL, number_name_road VARCHAR(100) DEFAULT NULL, additional_address_one VARCHAR(100) DEFAULT NULL, zip_code VARCHAR(11) DEFAULT NULL, city VARCHAR(120) DEFAULT NULL, home_phone VARCHAR(100) DEFAULT NULL, cell_phone VARCHAR(100) DEFAULT NULL, job_phone VARCHAR(100) DEFAULT NULL, email VARCHAR(200) DEFAULT NULL, release_date DATETIME DEFAULT NULL, buy_date DATETIME DEFAULT NULL, last_event_date DATETIME DEFAULT NULL, brand VARCHAR(100) DEFAULT NULL, model VARCHAR(100) DEFAULT NULL, version VARCHAR(255) DEFAULT NULL, vin VARCHAR(255) DEFAULT NULL, registration VARCHAR(255) DEFAULT NULL, prospect_type VARCHAR(100) DEFAULT NULL, mileage VARCHAR(100) DEFAULT NULL, energy VARCHAR(100) DEFAULT NULL, vnseller VARCHAR(255) DEFAULT NULL, voseller VARCHAR(255) DEFAULT NULL, billing_comment VARCHAR(255) DEFAULT NULL, vnvotype VARCHAR(10) DEFAULT NULL, file_number_vnvo VARCHAR(100) DEFAULT NULL, vnsales_intermediary VARCHAR(100) DEFAULT NULL, event_date DATETIME DEFAULT NULL, origin_date DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            DROP TABLE imported_file
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE messenger_messages
        SQL);
    }
}
