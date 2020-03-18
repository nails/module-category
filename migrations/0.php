<?php

/**
 * Migration:   0
 * Started:     18/03/2020
 * Finalised:   18/03/2020
 *
 * @package     Nails
 * @subpackage  module-category
 * @category    Database Migration
 * @author      Nails Dev Team
 * @link
 */

namespace Nails\Database\Migration\Nails\ModuleCategory;

use Nails\Common\Console\Migrate\Base;

class Migration0 extends Base
{
    /**
     * Execute the migration
     *
     * @return Void
     */
    public function execute()
    {
        $this->query("
            CREATE TABLE `{{NAILS_DB_PREFIX}}category` (
                `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                `slug` varchar(150) DEFAULT NULL,
                `label` varchar(150) DEFAULT NULL,
                `excerpt` varchar(150) DEFAULT NULL,
                `thumb_id` int(11) unsigned DEFAULT NULL,
                `cover_id` int(11) unsigned DEFAULT NULL,
                `body` mediumtext,
                `created` datetime NOT NULL,
                `created_by` int(11) unsigned DEFAULT NULL,
                `modified` datetime NOT NULL,
                `modified_by` int(11) unsigned DEFAULT NULL,
                PRIMARY KEY (`id`),
                KEY `created_by` (`created_by`),
                KEY `modified_by` (`modified_by`),
                KEY `thumb_id` (`thumb_id`),
                KEY `cover_id` (`cover_id`),
                CONSTRAINT `{{NAILS_DB_PREFIX}}category_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `nails_user` (`id`) ON DELETE SET NULL,
                CONSTRAINT `{{NAILS_DB_PREFIX}}category_ibfk_2` FOREIGN KEY (`modified_by`) REFERENCES `nails_user` (`id`) ON DELETE SET NULL,
                CONSTRAINT `{{NAILS_DB_PREFIX}}category_ibfk_3` FOREIGN KEY (`thumb_id`) REFERENCES `nails_cdn_object` (`id`),
                CONSTRAINT `{{NAILS_DB_PREFIX}}category_ibfk_4` FOREIGN KEY (`cover_id`) REFERENCES `nails_cdn_object` (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ");
    }
}
