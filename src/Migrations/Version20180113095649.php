<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180113095649 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE stats');
        $this->addSql('ALTER TABLE item ADD stats_req_id INT DEFAULT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE item_name item_name VARCHAR(255) NOT NULL, CHANGE gp_value gp_value INT NOT NULL, CHANGE item_slot item_slot VARCHAR(255) NOT NULL, CHANGE hand hand INT NOT NULL');
        $this->addSql('ALTER TABLE item ADD CONSTRAINT FK_1F1B251E5F69C98C FOREIGN KEY (stats_req_id) REFERENCES stats_req (id)');
        $this->addSql('CREATE INDEX IDX_1F1B251E5F69C98C ON item (stats_req_id)');
        $this->addSql('ALTER TABLE stats_req DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE stats_req ADD id INT AUTO_INCREMENT NOT NULL, DROP req_id, DROP att, DROP str, DROP def, DROP hp, DROP rang, DROP pray, DROP mage');
        $this->addSql('ALTER TABLE stats_req ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE stats (stats_id INT NOT NULL, att_stab INT NOT NULL, att_slash INT NOT NULL, att_crush INT NOT NULL, att_magic INT NOT NULL, att_range INT NOT NULL, def_stab INT NOT NULL, def_slash INT NOT NULL, def_crush INT NOT NULL, def_magic INT NOT NULL, def_range INT NOT NULL, mel_str INT NOT NULL, ran_str INT NOT NULL, mag_str INT NOT NULL, prayer INT NOT NULL, PRIMARY KEY(stats_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE item DROP FOREIGN KEY FK_1F1B251E5F69C98C');
        $this->addSql('DROP INDEX IDX_1F1B251E5F69C98C ON item');
        $this->addSql('ALTER TABLE item DROP stats_req_id, CHANGE id id INT NOT NULL, CHANGE item_name item_name VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, CHANGE gp_value gp_value INT DEFAULT NULL, CHANGE item_slot item_slot VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, CHANGE hand hand INT DEFAULT NULL');
        $this->addSql('ALTER TABLE stats_req MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE stats_req DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE stats_req ADD req_id INT NOT NULL, ADD att INT NOT NULL, ADD str INT NOT NULL, ADD def INT NOT NULL, ADD hp INT NOT NULL, ADD rang INT NOT NULL, ADD pray INT NOT NULL, ADD mage INT NOT NULL, DROP id');
        $this->addSql('ALTER TABLE stats_req ADD PRIMARY KEY (req_id)');
    }
}
