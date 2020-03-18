<?php

/**
 * This model handles interactions with the "nails_category" table.
 *
 * @package     Nails
 * @subpackage  module-category
 * @category    Model
 * @author      Nails Dev Team
 */

namespace Nails\Category\Model;

use Nails\Category\Constants;
use Nails\Common\Model\Base;

class Category extends Base
{
    /**
     * The table this model represents
     *
     * @var string
     */
    const TABLE = NAILS_DB_PREFIX . 'category';

    /**
     * The name of the resource to use (as passed to \Nails\Factory::resource())
     *
     * @var string
     */
    const RESOURCE_NAME = 'Category';

    /**
     * The provider of the resource to use (as passed to \Nails\Factory::resource())
     *
     * @var string
     */
    const RESOURCE_PROVIDER = Constants::MODULE_SLUG;

    /**
     * Whether to automatically set slugs or not
     *
     * @var bool
     */
    const AUTO_SET_SLUG = true;
}
