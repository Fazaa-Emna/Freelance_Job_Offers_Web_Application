<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230504131202 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF336278D5A8');
        $this->addSql('DROP TABLE classroom');
        $this->addSql('DROP TABLE student');
        $this->addSql('ALTER TABLE application ADD CONSTRAINT FK_A45BDDC1B441ED23 FOREIGN KEY (idFreelance) REFERENCES freelance (idFreelance) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX idFreelance ON application (idFreelance)');
        $this->addSql('ALTER TABLE blog CHANGE title title VARCHAR(255) NOT NULL, CHANGE body body VARCHAR(255) NOT NULL, CHANGE note note VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY fk_id_blog');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY fk_id_blog');
        $this->addSql('ALTER TABLE comment CHANGE body body VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CDAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
        $this->addSql('DROP INDEX blog_id ON comment');
        $this->addSql('CREATE INDEX IDX_9474526CDAE07E97 ON comment (blog_id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_id_blog FOREIGN KEY (blog_id) REFERENCES blog (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hackathon DROP FOREIGN KEY hackathon_ibfk_1');
        $this->addSql('ALTER TABLE hackathon ADD CONSTRAINT FK_8B3AF64F71F7E88B FOREIGN KEY (event_id) REFERENCES event (event_id)');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY fk_cid');
        $this->addSql('ALTER TABLE lesson CHANGE cid cid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT FK_F87474F34B30D9C4 FOREIGN KEY (cid) REFERENCES course (cid)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE packag DROP FOREIGN KEY fksid');
        $this->addSql('ALTER TABLE packag DROP FOREIGN KEY fksid');
        $this->addSql('ALTER TABLE packag CHANGE sid sid INT DEFAULT NULL');
        $this->addSql('ALTER TABLE packag ADD CONSTRAINT FK_DC9320AE57167AB4 FOREIGN KEY (sid) REFERENCES service (id)');
        $this->addSql('DROP INDEX fksid ON packag');
        $this->addSql('CREATE INDEX sid ON packag (sid)');
        $this->addSql('ALTER TABLE packag ADD CONSTRAINT fksid FOREIGN KEY (sid) REFERENCES service (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profile DROP FOREIGN KEY idUser');
        $this->addSql('ALTER TABLE service CHANGE descr descr VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE role role VARCHAR(55) NOT NULL, CHANGE createdAt createdAt DATE NOT NULL, CHANGE isVerified isVerified DATE NOT NULL, CHANGE isBanned isBanned INT NOT NULL, CHANGE isConnected isConnected INT NOT NULL');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY workshop_ibfk_1');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT FK_9B6F02C471F7E88B FOREIGN KEY (event_id) REFERENCES event (event_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE classroom (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(55) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE student (id INT AUTO_INCREMENT NOT NULL, classroom_id INT DEFAULT NULL, nsc INT NOT NULL, email VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_B723AF336278D5A8 (classroom_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF336278D5A8 FOREIGN KEY (classroom_id) REFERENCES classroom (id)');
        $this->addSql('ALTER TABLE application DROP FOREIGN KEY FK_A45BDDC1B441ED23');
        $this->addSql('DROP INDEX idFreelance ON application');
        $this->addSql('ALTER TABLE blog CHANGE title title VARCHAR(50) NOT NULL, CHANGE body body TEXT NOT NULL, CHANGE note note DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CDAE07E97');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526CDAE07E97');
        $this->addSql('ALTER TABLE comment CHANGE body body TEXT NOT NULL');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT fk_id_blog FOREIGN KEY (blog_id) REFERENCES blog (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_9474526cdae07e97 ON comment');
        $this->addSql('CREATE INDEX blog_id ON comment (blog_id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526CDAE07E97 FOREIGN KEY (blog_id) REFERENCES blog (id)');
        $this->addSql('ALTER TABLE hackathon DROP FOREIGN KEY FK_8B3AF64F71F7E88B');
        $this->addSql('ALTER TABLE hackathon ADD CONSTRAINT hackathon_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (event_id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE lesson DROP FOREIGN KEY FK_F87474F34B30D9C4');
        $this->addSql('ALTER TABLE lesson CHANGE cid cid INT NOT NULL');
        $this->addSql('ALTER TABLE lesson ADD CONSTRAINT fk_cid FOREIGN KEY (cid) REFERENCES course (cid) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE packag DROP FOREIGN KEY FK_DC9320AE57167AB4');
        $this->addSql('ALTER TABLE packag DROP FOREIGN KEY FK_DC9320AE57167AB4');
        $this->addSql('ALTER TABLE packag CHANGE sid sid INT NOT NULL');
        $this->addSql('ALTER TABLE packag ADD CONSTRAINT fksid FOREIGN KEY (sid) REFERENCES service (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX sid ON packag');
        $this->addSql('CREATE INDEX fksid ON packag (sid)');
        $this->addSql('ALTER TABLE packag ADD CONSTRAINT FK_DC9320AE57167AB4 FOREIGN KEY (sid) REFERENCES service (id)');
        $this->addSql('ALTER TABLE profile ADD CONSTRAINT idUser FOREIGN KEY (idUser) REFERENCES user (idUser)');
        $this->addSql('ALTER TABLE service CHANGE descr descr TEXT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE role role VARCHAR(255) NOT NULL, CHANGE createdAt createdAt DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, CHANGE isVerified isVerified TINYINT(1) DEFAULT 0 NOT NULL, CHANGE isBanned isBanned TINYINT(1) DEFAULT 0 NOT NULL, CHANGE isConnected isConnected TINYINT(1) DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE workshop DROP FOREIGN KEY FK_9B6F02C471F7E88B');
        $this->addSql('ALTER TABLE workshop ADD CONSTRAINT workshop_ibfk_1 FOREIGN KEY (event_id) REFERENCES event (event_id) ON DELETE CASCADE');
    }
}
