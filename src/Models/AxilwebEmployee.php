<?php

namespace Anwardote\AxilwebToCrewlix\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AxilwebEmployee extends Model
{

	protected $connection = 'axilweb';

	protected $table = 'employees';

}
