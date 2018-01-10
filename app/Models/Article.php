<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rinvex\Attributes\Traits\Attributable;

class Article extends Model
{
    use Attributable;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $primaryKey = 'article_id';

}
