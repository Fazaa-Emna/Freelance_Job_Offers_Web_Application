<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503194901 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT \'NULL\', INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), INDEX IDX_75EA56E0FB7336F0 (queue_name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY fk_id_blog');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE comment');
        $this->addSql('ALTER TABLE application CHANGE idFreelance idFreelance INT DEFAULT NULL, CHANGE ApplicationDate ApplicationDate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC1B441ED23 FOREIGN KEY (idFreelance) REFERENCES freelance (idFreelance) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX idFreelance ON application (idFreelance)');
        $this->addSql('ALTER TABLE freelance CHANGE AddDate AddDate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE hackathon DROP FOREIGN KEY hackathon_ibfk_1');
        $this->addSql('ALTER TABLE hackathon ADD CONSTRAINT FK_8B3AF64F71F7E88B FOREIGN KEY (event_id) REFERENCES event (event_id)');
        $this->addSql('ALTER TABLE historysearch CHANGE SearchDate SearchDate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY fk_cid');
        $this->addSql('ALTER TABLE lesson CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT FK_F87474F34B30D9C4 FOREIGN KEY (cid) REFERENCES course (cid)');
        $this->addSql('ALTER TABLE packag DROP FOREIGN KEY fksid');
        $this->addSql('ALTER TABLE packag CHANGE sid sid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE packag ADD CONSTRAINT FK_DC9320AE57167AB4 FOREIGN KEY (sid) REFERENCES service (id)');
        $this->addSql('ALTER TABLE packag RENAME INDEX fksid TO sid');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY idUser');
        $this->addSql('ALTER TABLE service CHANGE descr descr VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE role role VARCHAR(55) NOT NULL, CHANGE createdAt createdAt DATE NOT NULL, CHANGE isVerified isVerified DATE NOT NULL, CHANGE isBanned isBanned INT NOT NULL, CHANGE isConnected isConnected INT NOT NULL');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY workshop_ibfk_1');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C471F7E88B FOREIGN KEY (event_id) REFERENCES event (event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE blog (id_blog INT AUTO_INCREMENT NOT NULL, title VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, body TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, note DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_blog)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE comment (id_comment INT AUTO_INCREMENT NOT NULL, id_blog INT NOT NULL, body TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX id_blog (id_blog), PRIMARY KEY(id_comment)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_id_blog FOREIGN KEY (id_blog) REFERENCES blog (id_blog) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC1B441ED23');
        $this->addSql('DROP INDEX idFreelance ON application');
        $this->addSql('ALTER TABLE application CHANGE ApplicationDate ApplicationDate DATETIME DEFAULT \'current_timestamp()\' NOT NULL, CHANGE idFreelance idFreelance INT NOT NULL');
        $this->addSql('ALTER TABLE freelance CHANGE AddDate AddDate DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('ALTER TABLE hackathon DROP FOREIGN KEY FK_8B3AF64F71F7E88B');
        $this->addSql('ALTER TABLE hackathon ADD CONSTRAINT hackathon_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (event_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE historysearch CHANGE SearchDate SearchDate DATETIME DEFAULT \'current_timestamp()\' NOT NULL');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F34B30D9C4');
        $this->addSql('ALTER TABLE lesson CHANGE cid cid INT NOT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT fk_cid FOREIGN KEY (cid) REFERENCES course (cid) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE packag DROP FOREIGN KEY FK_DC9320AE57167AB4');
        $this->addSql('ALTER TABLE packag CHANGE sid sid INT NOT NULL');
        $this->addSql('ALTER TABLE packag ADD CONSTRAINT fksid FOREIGN KEY (sid) REFERENCES service (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE packag RENAME INDEX sid TO fksid');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT idUser FOREIGN KEY (idUser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE service CHANGE descr descr TEXT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE role role VARCHAR(255) NOT NULL, CHANGE createdAt createdAt DATETIME DEFAULT \'current_timestamp()\' NOT NULL, CHANGE isVerified isVerified TINYINT(1) DEFAULT 0 NOT NULL, CHANGE isBanned isBanned TINYINT(1) DEFAULT 0 NOT NULL, CHANGE isConnected isConnected TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C471F7E88B');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT workshop_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (event_id) ON DELETE CASCADE');
    }
}
