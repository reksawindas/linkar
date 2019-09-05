<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190904072557 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE kunjungan (id INT AUTO_INCREMENT NOT NULL, pasien_id INT NOT NULL, tanggal_masuk DATETIME NOT NULL, tanggal_keluar DATETIME NOT NULL, INDEX IDX_DFD6AB34EBBB8755 (pasien_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pasien (id INT AUTO_INCREMENT NOT NULL, no_rm VARCHAR(8) NOT NULL, nama VARCHAR(255) NOT NULL, jenis_kelamin VARCHAR(20) NOT NULL, tanggal_lahir DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kunjungan ADD CONSTRAINT FK_DFD6AB34EBBB8755 FOREIGN KEY (pasien_id) REFERENCES kunjungan (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE kunjungan DROP FOREIGN KEY FK_DFD6AB34EBBB8755');
        $this->addSql('DROP TABLE kunjungan');
        $this->addSql('DROP TABLE pasien');
    }
}
