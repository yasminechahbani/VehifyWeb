<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250410191322 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD id_quiz_id INT DEFAULT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis ADD CONSTRAINT FK_173894535BA17805 FOREIGN KEY (id_quiz_id) REFERENCES quiz (id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE UNIQUE INDEX UNIQ_173894535BA17805 ON permis (id_quiz_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP FOREIGN KEY FK_173894535BA17805
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX UNIQ_173894535BA17805 ON permis
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE permis DROP id_quiz_id
        SQL);
    }
}
