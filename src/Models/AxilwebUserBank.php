<?php

namespace Anwardote\AxilwebToCrewlix\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AxilwebUserBank extends Model
{
	protected $connection = 'axilweb';

	protected $table = 'employee_banks';
}
