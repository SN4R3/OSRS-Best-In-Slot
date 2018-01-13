<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180113061919 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE item (id INT AUTO_INCREMENT NOT NULL, ge_id INT NOT NULL, req_id INT NOT NULL, item_name VARCHAR(255) NOT NULL, stats_id INT NOT NULL, gp_value INT NOT NULL, item_slot VARCHAR(255) NOT NULL, hand INT NOT NULL, p2p INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE items');
        $this->addSql('DROP TABLE stats');
        $this->addSql('DROP TABLE stats_req');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE items (id INT NOT NULL, ge_id INT NOT NULL, req_id INT NOT NULL, item_name VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, stats_id INT NOT NULL, gp_value INT DEFAULT NULL, item_slot VARCHAR(20) NOT NULL COLLATE latin1_swedish_ci, hand INT DEFAULT NULL, P2P INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stats (stats_id INT NOT NULL, att_stab INT NOT NULL, att_slash INT NOT NULL, att_crush INT NOT NULL, att_magic INT NOT NULL, att_range INT NOT NULL, def_stab INT NOT NULL, def_slash INT NOT NULL, def_crush INT NOT NULL, def_magic INT NOT NULL, def_range INT NOT NULL, mel_str INT NOT NULL, ran_str INT NOT NULL, mag_str INT NOT NULL, prayer INT NOT NULL, PRIMARY KEY(stats_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stats_req (req_id INT NOT NULL, att INT NOT NULL, str INT NOT NULL, def INT NOT NULL, hp INT NOT NULL, rang INT NOT NULL, pray INT NOT NULL, mage INT NOT NULL, PRIMARY KEY(req_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE item');
    }
}
