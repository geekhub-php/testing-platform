<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181215081950 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer ADD answer_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer ADD CONSTRAINT FK_DADD4A25D91ED822 FOREIGN KEY (answer_group_id) REFERENCES answer_group (id)');
        $this->addSql('CREATE INDEX IDX_DADD4A25D91ED822 ON answer (answer_group_id)');
        $this->addSql('ALTER TABLE answer_group DROP FOREIGN KEY FK_F6FAAD9679BF1BCE');
        $this->addSql('DROP INDEX IDX_F6FAAD9679BF1BCE ON answer_group');
        $this->addSql('ALTER TABLE answer_group DROP answers_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf('mysql' !== $this->connection->getDatabasePlatform()->getName(), 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer DROP FOREIGN KEY FK_DADD4A25D91ED822');
        $this->addSql('DROP INDEX IDX_DADD4A25D91ED822 ON answer');
        $this->addSql('ALTER TABLE answer DROP answer_group_id');
        $this->addSql('ALTER TABLE answer_group ADD answers_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer_group ADD CONSTRAINT FK_F6FAAD9679BF1BCE FOREIGN KEY (answers_id) REFERENCES answer (id)');
        $this->addSql('CREATE INDEX IDX_F6FAAD9679BF1BCE ON answer_group (answers_id)');
    }
}
