<?php
/**
 * phpDocumentor
 *
 * PHP Version 5
 *
 * @category   phpDocumentor
 * @package    Parser
 * @subpackage Tag_Definitions
 * @author     Mike van Riel <mike.vanriel@naenius.com>
 * @copyright  2010-2011 Mike van Riel / Naenius. (http://www.naenius.com)
 * @license    http://www.opensource.org/licenses/mit-license.php MIT
 * @link       http://phpdoc.org
 */

/**
 * Definition for the @param tag; adds a attribute called `variable`.
 *
 * @category   phpDocumentor
 * @package    Parser
 * @subpackage Tag_Definitions
 * @author     Mike van Riel <mike.vanriel@naenius.com>
 * @license    http://www.opensource.org/licenses/mit-license.php MIT
 * @link       http://phpdoc.org
 */
class phpDocumentor_Plugin_Core_Parser_DocBlock_Tag_Definition_Param
    extends phpDocumentor_Plugin_Core_Parser_DocBlock_Tag_Definition
{
    /**
     * Adds an attribute called `variable` containing the name of the argument.
     *
     * @return void
     */
    protected function configure()
    {
        if (trim($this->tag->getVariableName()) == '') {
            // TODO: get the name from the argument list
        }

        $this->xml['variable'] = $this->tag->getVariableName();
    }
}
