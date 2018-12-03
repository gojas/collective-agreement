<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181203130409 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE superadmin_bonuses (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_3F4C90D8E3C68343 (unique_id), INDEX IDX_3F4C90D8B03A8386 (created_by_id), INDEX IDX_3F4C90D899049ECE (modified_by_id), INDEX IDX_3F4C90D8C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_holiday_calendars (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_9139AC78E3C68343 (unique_id), INDEX IDX_9139AC78B03A8386 (created_by_id), INDEX IDX_9139AC7899049ECE (modified_by_id), INDEX IDX_9139AC78C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_salaries (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_681280AE3C68343 (unique_id), INDEX IDX_681280AB03A8386 (created_by_id), INDEX IDX_681280A99049ECE (modified_by_id), INDEX IDX_681280AC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_conditions (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, parameter VARCHAR(45) DEFAULT NULL, comparator VARCHAR(45) DEFAULT NULL, value VARCHAR(45) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_ED0B04C6E3C68343 (unique_id), INDEX IDX_ED0B04C6B03A8386 (created_by_id), INDEX IDX_ED0B04C699049ECE (modified_by_id), INDEX IDX_ED0B04C6C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_one_time_payments (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_269D700EE3C68343 (unique_id), INDEX IDX_269D700EB03A8386 (created_by_id), INDEX IDX_269D700E99049ECE (modified_by_id), INDEX IDX_269D700EC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supreadmin_collective_agreements (id INT NOT NULL, holiday_calendar_id INT DEFAULT NULL, salary_id INT DEFAULT NULL, surcharge_id INT DEFAULT NULL, allowance_id INT DEFAULT NULL, one_time_payment_id INT DEFAULT NULL, mileage_allowance_id INT DEFAULT NULL, remuneration_id INT DEFAULT NULL, holiday_allowance_id INT DEFAULT NULL, christmas_allowance_id INT DEFAULT NULL, original_id INT DEFAULT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, external_id VARCHAR(255) DEFAULT NULL, name VARCHAR(45) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, check_sum VARCHAR(45) DEFAULT NULL, normal_working_hours NUMERIC(10, 0) DEFAULT NULL, standard_hours_divider NUMERIC(10, 0) DEFAULT NULL, overtime_hours_divider NUMERIC(10, 0) DEFAULT NULL, is_for_workpersons TINYINT(1) DEFAULT NULL, is_for_employees TINYINT(1) DEFAULT NULL, is_for_personnel_leasing TINYINT(1) DEFAULT NULL, synced TINYINT(1) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, valid_from DATETIME DEFAULT NULL, valid_to DATETIME DEFAULT NULL, allowed_roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', permission_informations LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_554B6DFEE3C68343 (unique_id), INDEX IDX_554B6DFE608F7002 (holiday_calendar_id), INDEX IDX_554B6DFEB0FDF16E (salary_id), INDEX IDX_554B6DFEE6E963C5 (surcharge_id), INDEX IDX_554B6DFE282DEF00 (allowance_id), INDEX IDX_554B6DFE968F8729 (one_time_payment_id), INDEX IDX_554B6DFE645C1C84 (mileage_allowance_id), INDEX IDX_554B6DFE1D7E2A02 (remuneration_id), INDEX IDX_554B6DFE53F60B7C (holiday_allowance_id), INDEX IDX_554B6DFE31084A58 (christmas_allowance_id), INDEX IDX_554B6DFE108B7592 (original_id), INDEX IDX_554B6DFEB03A8386 (created_by_id), INDEX IDX_554B6DFE99049ECE (modified_by_id), INDEX IDX_554B6DFEC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_surcharges (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_145BC491E3C68343 (unique_id), INDEX IDX_145BC491B03A8386 (created_by_id), INDEX IDX_145BC49199049ECE (modified_by_id), INDEX IDX_145BC491C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_allowances (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_76B4D8B6E3C68343 (unique_id), INDEX IDX_76B4D8B6B03A8386 (created_by_id), INDEX IDX_76B4D8B699049ECE (modified_by_id), INDEX IDX_76B4D8B6C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_classifications (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, name VARCHAR(45) DEFAULT NULL, salary_type VARCHAR(45) DEFAULT NULL, factor NUMERIC(10, 0) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_78926DC9E3C68343 (unique_id), INDEX IDX_78926DC9B03A8386 (created_by_id), INDEX IDX_78926DC999049ECE (modified_by_id), INDEX IDX_78926DC9C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_wage_entries (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, name VARCHAR(45) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, peer_group VARCHAR(255) DEFAULT NULL, factor NUMERIC(10, 0) DEFAULT NULL, salary_type VARCHAR(45) DEFAULT NULL, amount NUMERIC(10, 0) DEFAULT NULL, quantity NUMERIC(10, 0) DEFAULT NULL, unit VARCHAR(45) DEFAULT NULL, is_hourly TINYINT(1) DEFAULT NULL, is_daily TINYINT(1) DEFAULT NULL, is_weekly TINYINT(1) DEFAULT NULL, is_monthly TINYINT(1) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_3FD4A367E3C68343 (unique_id), INDEX IDX_3FD4A367B03A8386 (created_by_id), INDEX IDX_3FD4A36799049ECE (modified_by_id), INDEX IDX_3FD4A367C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_maturities (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, accounting_month VARCHAR(255) DEFAULT NULL, reference_month VARCHAR(255) DEFAULT NULL, ratio NUMERIC(10, 0) DEFAULT NULL, is_variable TINYINT(1) DEFAULT NULL, till DATETIME DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_A3B9DE2EE3C68343 (unique_id), INDEX IDX_A3B9DE2EB03A8386 (created_by_id), INDEX IDX_A3B9DE2E99049ECE (modified_by_id), INDEX IDX_A3B9DE2EC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_allowed_values (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, name VARCHAR(40) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_6DC97E36E3C68343 (unique_id), INDEX IDX_6DC97E36B03A8386 (created_by_id), INDEX IDX_6DC97E3699049ECE (modified_by_id), INDEX IDX_6DC97E36C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_holidays (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, date DATETIME DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_DA09314DE3C68343 (unique_id), INDEX IDX_DA09314DB03A8386 (created_by_id), INDEX IDX_DA09314D99049ECE (modified_by_id), INDEX IDX_DA09314DC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_wage_groups (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, name VARCHAR(45) DEFAULT NULL, description VARCHAR(255) DEFAULT NULL, group_mode VARCHAR(45) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_6B94CB29E3C68343 (unique_id), INDEX IDX_6B94CB29B03A8386 (created_by_id), INDEX IDX_6B94CB2999049ECE (modified_by_id), INDEX IDX_6B94CB29C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_mileage_allowances (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_8AC2B9AEE3C68343 (unique_id), INDEX IDX_8AC2B9AEB03A8386 (created_by_id), INDEX IDX_8AC2B9AE99049ECE (modified_by_id), INDEX IDX_8AC2B9AEC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_remunerations (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_A45B133AE3C68343 (unique_id), INDEX IDX_A45B133AB03A8386 (created_by_id), INDEX IDX_A45B133A99049ECE (modified_by_id), INDEX IDX_A45B133AC76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_parameters (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, name VARCHAR(45) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, is_local TINYINT(1) DEFAULT NULL, is_global TINYINT(1) DEFAULT NULL, is_engine_relevant TINYINT(1) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, UNIQUE INDEX UNIQ_1FFE4591E3C68343 (unique_id), INDEX IDX_1FFE4591B03A8386 (created_by_id), INDEX IDX_1FFE459199049ECE (modified_by_id), INDEX IDX_1FFE4591C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE superadmin_parameter_settings (id INT NOT NULL, created_by_id INT DEFAULT NULL, modified_by_id INT DEFAULT NULL, deleted_by_id INT DEFAULT NULL, name VARCHAR(45) DEFAULT NULL, is_local TINYINT(1) DEFAULT NULL, is_global TINYINT(1) DEFAULT NULL, is_engine_relevant TINYINT(1) DEFAULT NULL, unique_id BINARY(16) NOT NULL COMMENT \'(DC2Type:uuid_binary)\', created_at DATETIME DEFAULT NULL, modified_at DATETIME DEFAULT NULL, valid_from DATETIME DEFAULT NULL, valid_to DATETIME DEFAULT NULL, allowed_roles LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', permission_informations LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_B9B147F9E3C68343 (unique_id), INDEX IDX_B9B147F9B03A8386 (created_by_id), INDEX IDX_B9B147F999049ECE (modified_by_id), INDEX IDX_B9B147F9C76F1F52 (deleted_by_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE superadmin_bonuses ADD CONSTRAINT FK_3F4C90D8B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_bonuses ADD CONSTRAINT FK_3F4C90D899049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_bonuses ADD CONSTRAINT FK_3F4C90D8C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_holiday_calendars ADD CONSTRAINT FK_9139AC78B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_holiday_calendars ADD CONSTRAINT FK_9139AC7899049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_holiday_calendars ADD CONSTRAINT FK_9139AC78C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_salaries ADD CONSTRAINT FK_681280AB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_salaries ADD CONSTRAINT FK_681280A99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_salaries ADD CONSTRAINT FK_681280AC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_conditions ADD CONSTRAINT FK_ED0B04C6B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_conditions ADD CONSTRAINT FK_ED0B04C699049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_conditions ADD CONSTRAINT FK_ED0B04C6C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_one_time_payments ADD CONSTRAINT FK_269D700EB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_one_time_payments ADD CONSTRAINT FK_269D700E99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_one_time_payments ADD CONSTRAINT FK_269D700EC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE608F7002 FOREIGN KEY (holiday_calendar_id) REFERENCES superadmin_holiday_calendars (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFEB0FDF16E FOREIGN KEY (salary_id) REFERENCES superadmin_salaries (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFEE6E963C5 FOREIGN KEY (surcharge_id) REFERENCES superadmin_surcharges (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE282DEF00 FOREIGN KEY (allowance_id) REFERENCES superadmin_allowances (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE968F8729 FOREIGN KEY (one_time_payment_id) REFERENCES superadmin_one_time_payments (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE645C1C84 FOREIGN KEY (mileage_allowance_id) REFERENCES superadmin_mileage_allowances (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE1D7E2A02 FOREIGN KEY (remuneration_id) REFERENCES superadmin_remunerations (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE53F60B7C FOREIGN KEY (holiday_allowance_id) REFERENCES superadmin_bonuses (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE31084A58 FOREIGN KEY (christmas_allowance_id) REFERENCES superadmin_bonuses (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE108B7592 FOREIGN KEY (original_id) REFERENCES supreadmin_collective_agreements (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFEB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFE99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements ADD CONSTRAINT FK_554B6DFEC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_surcharges ADD CONSTRAINT FK_145BC491B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_surcharges ADD CONSTRAINT FK_145BC49199049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_surcharges ADD CONSTRAINT FK_145BC491C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_allowances ADD CONSTRAINT FK_76B4D8B6B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_allowances ADD CONSTRAINT FK_76B4D8B699049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_allowances ADD CONSTRAINT FK_76B4D8B6C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_classifications ADD CONSTRAINT FK_78926DC9B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_classifications ADD CONSTRAINT FK_78926DC999049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_classifications ADD CONSTRAINT FK_78926DC9C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE core_users ADD CONSTRAINT FK_42028409B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE core_users ADD CONSTRAINT FK_4202840999049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE core_users ADD CONSTRAINT FK_42028409C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_wage_entries ADD CONSTRAINT FK_3FD4A367B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_wage_entries ADD CONSTRAINT FK_3FD4A36799049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_wage_entries ADD CONSTRAINT FK_3FD4A367C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_maturities ADD CONSTRAINT FK_A3B9DE2EB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_maturities ADD CONSTRAINT FK_A3B9DE2E99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_maturities ADD CONSTRAINT FK_A3B9DE2EC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_allowed_values ADD CONSTRAINT FK_6DC97E36B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_allowed_values ADD CONSTRAINT FK_6DC97E3699049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_allowed_values ADD CONSTRAINT FK_6DC97E36C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_holidays ADD CONSTRAINT FK_DA09314DB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_holidays ADD CONSTRAINT FK_DA09314D99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_holidays ADD CONSTRAINT FK_DA09314DC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_wage_groups ADD CONSTRAINT FK_6B94CB29B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_wage_groups ADD CONSTRAINT FK_6B94CB2999049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_wage_groups ADD CONSTRAINT FK_6B94CB29C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_mileage_allowances ADD CONSTRAINT FK_8AC2B9AEB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_mileage_allowances ADD CONSTRAINT FK_8AC2B9AE99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_mileage_allowances ADD CONSTRAINT FK_8AC2B9AEC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_remunerations ADD CONSTRAINT FK_A45B133AB03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_remunerations ADD CONSTRAINT FK_A45B133A99049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_remunerations ADD CONSTRAINT FK_A45B133AC76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_parameters ADD CONSTRAINT FK_1FFE4591B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_parameters ADD CONSTRAINT FK_1FFE459199049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_parameters ADD CONSTRAINT FK_1FFE4591C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_parameter_settings ADD CONSTRAINT FK_B9B147F9B03A8386 FOREIGN KEY (created_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_parameter_settings ADD CONSTRAINT FK_B9B147F999049ECE FOREIGN KEY (modified_by_id) REFERENCES core_users (id)');
        $this->addSql('ALTER TABLE superadmin_parameter_settings ADD CONSTRAINT FK_B9B147F9C76F1F52 FOREIGN KEY (deleted_by_id) REFERENCES core_users (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE53F60B7C');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE31084A58');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE608F7002');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFEB0FDF16E');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE968F8729');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE108B7592');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFEE6E963C5');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE282DEF00');
        $this->addSql('ALTER TABLE superadmin_bonuses DROP FOREIGN KEY FK_3F4C90D8B03A8386');
        $this->addSql('ALTER TABLE superadmin_bonuses DROP FOREIGN KEY FK_3F4C90D899049ECE');
        $this->addSql('ALTER TABLE superadmin_bonuses DROP FOREIGN KEY FK_3F4C90D8C76F1F52');
        $this->addSql('ALTER TABLE superadmin_holiday_calendars DROP FOREIGN KEY FK_9139AC78B03A8386');
        $this->addSql('ALTER TABLE superadmin_holiday_calendars DROP FOREIGN KEY FK_9139AC7899049ECE');
        $this->addSql('ALTER TABLE superadmin_holiday_calendars DROP FOREIGN KEY FK_9139AC78C76F1F52');
        $this->addSql('ALTER TABLE superadmin_salaries DROP FOREIGN KEY FK_681280AB03A8386');
        $this->addSql('ALTER TABLE superadmin_salaries DROP FOREIGN KEY FK_681280A99049ECE');
        $this->addSql('ALTER TABLE superadmin_salaries DROP FOREIGN KEY FK_681280AC76F1F52');
        $this->addSql('ALTER TABLE superadmin_conditions DROP FOREIGN KEY FK_ED0B04C6B03A8386');
        $this->addSql('ALTER TABLE superadmin_conditions DROP FOREIGN KEY FK_ED0B04C699049ECE');
        $this->addSql('ALTER TABLE superadmin_conditions DROP FOREIGN KEY FK_ED0B04C6C76F1F52');
        $this->addSql('ALTER TABLE superadmin_one_time_payments DROP FOREIGN KEY FK_269D700EB03A8386');
        $this->addSql('ALTER TABLE superadmin_one_time_payments DROP FOREIGN KEY FK_269D700E99049ECE');
        $this->addSql('ALTER TABLE superadmin_one_time_payments DROP FOREIGN KEY FK_269D700EC76F1F52');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFEB03A8386');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE99049ECE');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFEC76F1F52');
        $this->addSql('ALTER TABLE superadmin_surcharges DROP FOREIGN KEY FK_145BC491B03A8386');
        $this->addSql('ALTER TABLE superadmin_surcharges DROP FOREIGN KEY FK_145BC49199049ECE');
        $this->addSql('ALTER TABLE superadmin_surcharges DROP FOREIGN KEY FK_145BC491C76F1F52');
        $this->addSql('ALTER TABLE superadmin_allowances DROP FOREIGN KEY FK_76B4D8B6B03A8386');
        $this->addSql('ALTER TABLE superadmin_allowances DROP FOREIGN KEY FK_76B4D8B699049ECE');
        $this->addSql('ALTER TABLE superadmin_allowances DROP FOREIGN KEY FK_76B4D8B6C76F1F52');
        $this->addSql('ALTER TABLE superadmin_classifications DROP FOREIGN KEY FK_78926DC9B03A8386');
        $this->addSql('ALTER TABLE superadmin_classifications DROP FOREIGN KEY FK_78926DC999049ECE');
        $this->addSql('ALTER TABLE superadmin_classifications DROP FOREIGN KEY FK_78926DC9C76F1F52');
        $this->addSql('ALTER TABLE core_users DROP FOREIGN KEY FK_42028409B03A8386');
        $this->addSql('ALTER TABLE core_users DROP FOREIGN KEY FK_4202840999049ECE');
        $this->addSql('ALTER TABLE core_users DROP FOREIGN KEY FK_42028409C76F1F52');
        $this->addSql('ALTER TABLE superadmin_wage_entries DROP FOREIGN KEY FK_3FD4A367B03A8386');
        $this->addSql('ALTER TABLE superadmin_wage_entries DROP FOREIGN KEY FK_3FD4A36799049ECE');
        $this->addSql('ALTER TABLE superadmin_wage_entries DROP FOREIGN KEY FK_3FD4A367C76F1F52');
        $this->addSql('ALTER TABLE superadmin_maturities DROP FOREIGN KEY FK_A3B9DE2EB03A8386');
        $this->addSql('ALTER TABLE superadmin_maturities DROP FOREIGN KEY FK_A3B9DE2E99049ECE');
        $this->addSql('ALTER TABLE superadmin_maturities DROP FOREIGN KEY FK_A3B9DE2EC76F1F52');
        $this->addSql('ALTER TABLE superadmin_allowed_values DROP FOREIGN KEY FK_6DC97E36B03A8386');
        $this->addSql('ALTER TABLE superadmin_allowed_values DROP FOREIGN KEY FK_6DC97E3699049ECE');
        $this->addSql('ALTER TABLE superadmin_allowed_values DROP FOREIGN KEY FK_6DC97E36C76F1F52');
        $this->addSql('ALTER TABLE superadmin_holidays DROP FOREIGN KEY FK_DA09314DB03A8386');
        $this->addSql('ALTER TABLE superadmin_holidays DROP FOREIGN KEY FK_DA09314D99049ECE');
        $this->addSql('ALTER TABLE superadmin_holidays DROP FOREIGN KEY FK_DA09314DC76F1F52');
        $this->addSql('ALTER TABLE superadmin_wage_groups DROP FOREIGN KEY FK_6B94CB29B03A8386');
        $this->addSql('ALTER TABLE superadmin_wage_groups DROP FOREIGN KEY FK_6B94CB2999049ECE');
        $this->addSql('ALTER TABLE superadmin_wage_groups DROP FOREIGN KEY FK_6B94CB29C76F1F52');
        $this->addSql('ALTER TABLE superadmin_mileage_allowances DROP FOREIGN KEY FK_8AC2B9AEB03A8386');
        $this->addSql('ALTER TABLE superadmin_mileage_allowances DROP FOREIGN KEY FK_8AC2B9AE99049ECE');
        $this->addSql('ALTER TABLE superadmin_mileage_allowances DROP FOREIGN KEY FK_8AC2B9AEC76F1F52');
        $this->addSql('ALTER TABLE superadmin_remunerations DROP FOREIGN KEY FK_A45B133AB03A8386');
        $this->addSql('ALTER TABLE superadmin_remunerations DROP FOREIGN KEY FK_A45B133A99049ECE');
        $this->addSql('ALTER TABLE superadmin_remunerations DROP FOREIGN KEY FK_A45B133AC76F1F52');
        $this->addSql('ALTER TABLE superadmin_parameters DROP FOREIGN KEY FK_1FFE4591B03A8386');
        $this->addSql('ALTER TABLE superadmin_parameters DROP FOREIGN KEY FK_1FFE459199049ECE');
        $this->addSql('ALTER TABLE superadmin_parameters DROP FOREIGN KEY FK_1FFE4591C76F1F52');
        $this->addSql('ALTER TABLE superadmin_parameter_settings DROP FOREIGN KEY FK_B9B147F9B03A8386');
        $this->addSql('ALTER TABLE superadmin_parameter_settings DROP FOREIGN KEY FK_B9B147F999049ECE');
        $this->addSql('ALTER TABLE superadmin_parameter_settings DROP FOREIGN KEY FK_B9B147F9C76F1F52');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE645C1C84');
        $this->addSql('ALTER TABLE supreadmin_collective_agreements DROP FOREIGN KEY FK_554B6DFE1D7E2A02');
        $this->addSql('DROP TABLE superadmin_bonuses');
        $this->addSql('DROP TABLE superadmin_holiday_calendars');
        $this->addSql('DROP TABLE superadmin_salaries');
        $this->addSql('DROP TABLE superadmin_conditions');
        $this->addSql('DROP TABLE superadmin_one_time_payments');
        $this->addSql('DROP TABLE supreadmin_collective_agreements');
        $this->addSql('DROP TABLE superadmin_surcharges');
        $this->addSql('DROP TABLE superadmin_allowances');
        $this->addSql('DROP TABLE superadmin_classifications');
        $this->addSql('DROP TABLE core_users');
        $this->addSql('DROP TABLE superadmin_wage_entries');
        $this->addSql('DROP TABLE superadmin_maturities');
        $this->addSql('DROP TABLE superadmin_allowed_values');
        $this->addSql('DROP TABLE superadmin_holidays');
        $this->addSql('DROP TABLE superadmin_wage_groups');
        $this->addSql('DROP TABLE superadmin_mileage_allowances');
        $this->addSql('DROP TABLE superadmin_remunerations');
        $this->addSql('DROP TABLE superadmin_parameters');
        $this->addSql('DROP TABLE superadmin_parameter_settings');
    }
}
