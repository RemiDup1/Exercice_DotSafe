<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20231010124322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add Members';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE member (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, full_name VARCHAR(255) NOT NULL, role VARCHAR(255) DEFAULT NULL, is_admin BOOLEAN NOT NULL)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP TABLE member');
    }
}
