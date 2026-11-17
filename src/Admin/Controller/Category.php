<?php

/**
 * Manage Categories
 *
 * @package    Nails
 * @subpackage module-category
 * @category   Controller
 * @author     Nails Dev Team
 */

namespace Nails\Category\Admin\Controller;

use Nails\Admin\Controller\DefaultController;
use Nails\Category\Constants;

/**
 * Class Category
 *
 * @package Nails\Category\Admin\Controller
 */
class Category extends DefaultController
{
    const CONFIG_MODEL_NAME     = 'Category';
    const CONFIG_MODEL_PROVIDER = Constants::MODULE_SLUG;
}
