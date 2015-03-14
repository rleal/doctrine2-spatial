<?php

namespace CrEOF\Spatial\ORM\Query\AST\Functions\PostgreSql;

use CrEOF\Spatial\ORM\Query\AST\Functions\AbstractSpatialDQLFunction;

class STX extends AbstractSpatialDQLFunction
{
    protected $platforms = array('postgresql');

    protected $functionName = 'ST_X';

    protected $minGeomExpr = 1;

    protected $maxGeomExpr = 1;
}
