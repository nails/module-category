<?php

/**
 * Manage Categories
 *
 * @package    Nails
 * @subpackage module-category
 * @category   Controller
 * @author     Nails Dev Team
 */

namespace Nails\Admin\Category;

use Nails\Admin\Controller\DefaultController;
use Nails\Category\Constants;

/**
 * Class Category
 *
 * @package Nails\Admin\Category
 */
class Category extends DefaultController
{
    const CONFIG_MODEL_NAME     = 'Category';
    const CONFIG_MODEL_PROVIDER = Constants::MODULE_SLUG;
}
