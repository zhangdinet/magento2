<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Backend\Block\System;

/**
 * Custom Variable Block
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class Variable extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Block constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_blockGroup = 'Magento_Backend';
        $this->_controller = 'system_variable';
        $this->_headerText = __('Custom Variables');
        parent::_construct();
        $this->buttonList->update('add', 'label', __('Add New Variable'));
    }
}
