<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200831210657 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }
    public function up(Schema $schema) : void
    {
        $this->addSql("INSERT INTO hangars (id, name) VALUES (1, 'Aeropakt')");

        $this->addSql("INSERT INTO airplanes (id, name) VALUES (1, 'Aeroprakt A-24')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (2, 'Aeroprakt A-24')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (3, 'Aeroprakt A-24')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (4, 'Aeroprakt A-24')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (5, 'Aeroprakt A-24')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (6, 'Curtiss NC-4')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (7, 'Curtiss NC-4')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (8, 'Curtiss NC-4')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (9, 'Boeing 747')");
        $this->addSql("INSERT INTO airplanes (id, name) VALUES (10, 'Boeing 747')");

        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (1, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (2, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (3, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (4, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (5, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (6, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (7, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (8, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (9, 1)");
        $this->addSql("INSERT INTO hangars_airplanes (airplane_id, hangar_id) VALUES (10, 1)");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM hangars_airplanes');
        $this->addSql('DELETE FROM airplanes');
        $this->addSql('DELETE FROM hangars');
    }
}
