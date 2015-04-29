<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Loadshedding;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('LoadsheddingTableSeeder');
	}
}

class LoadsheddingTableSeeder extends Seeder
	{
		public function run()
		{
			// Loadshedding time table of Group 1

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Sunday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Monday',
				'time1_start' => '11:00:00',
				'time1_end' => '16:00:00',
				'time2_start' => '20:00:00',
				'time2_end' => '23:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Tuesday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:30:00',
				'time2_start' => '18:30:00',
				'time2_end' => '21:30:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Wednesday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '16:00:00',
				'time2_end' => '20:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Thursday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '14:30:00',
				'time2_end' => '18:30:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Friday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 1',
				'day' => 'Saturday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '12:00:00',
				'time2_end' => '17:00:00'
			));

			// Loadshedding time table of Group 2

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Sunday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '12:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Monday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Tuesday',
				'time1_start' => '11:00:00',
				'time1_end' => '16:00:00',
				'time2_start' => '20:00:00',
				'time2_end' => '23:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Wednesday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:30:00',
				'time2_start' => '18:30:00',
				'time2_end' => '21:30:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Thursday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '16:00:00',
				'time2_end' => '20:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Friday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '14:30:00',
				'time2_end' => '18:30:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 2',
				'day' => 'Saturday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			// Loadshedding time table of Group 3

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Sunday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Monday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '12:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Tuesday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Wednesday',
				'time1_start' => '11:00:00',
				'time1_end' => '16:00:00',
				'time2_start' => '20:00:00',
				'time2_end' => '23:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Thursday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:30:00',
				'time2_start' => '18:30:00',
				'time2_end' => '21:30:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Friday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '16:00:00',
				'time2_end' => '20:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 3',
				'day' => 'Saturday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '14:30:00',
				'time2_end' => '18:30:00'
			));

			// Loadshedding time table of Group 4

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Sunday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '15:00:00',
				'time2_end' => '18:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Monday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '14:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Tuesday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Wednesday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Thursday',
				'time1_start' => '11:00:00',
				'time1_end' => '15:30:00',
				'time2_start' => '20:30:00',
				'time2_end' => '23:30:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Friday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:00:00',
				'time2_start' => '18:00:00',
				'time2_end' => '22:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 4',
				'day' => 'Saturday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '20:00:00'
			));

			// Loadshedding time table of Group 5

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Sunday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '20:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Monday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '15:00:00',
				'time2_end' => '18:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Tuesday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '14:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Wednesday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Thursday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Friday',
				'time1_start' => '11:00:00',
				'time1_end' => '15:00:00',
				'time2_start' => '20:00:00',
				'time2_end' => '23:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 5',
				'day' => 'Saturday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:00:00',
				'time2_start' => '18:00:00',
				'time2_end' => '22:00:00'
			));

			// Loadshedding time table of Group 6

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Sunday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:00:00',
				'time2_start' => '18:00:00',
				'time2_end' => '22:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Monday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '20:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Tuesday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '15:00:00',
				'time2_end' => '18:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Wednesday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '14:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Thursday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Friday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 6',
				'day' => 'Saturday',
				'time1_start' => '11:00:00',
				'time1_end' => '15:00:00',
				'time2_start' => '20:00:00',
				'time2_end' => '23:00:00'
			));

			// Loadshedding time table of Group 7

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Sunday',
				'time1_start' => '11:00:00',
				'time1_end' => '15:00:00',
				'time2_start' => '20:00:00',
				'time2_end' => '23:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Monday',
				'time1_start' => '10:00:00',
				'time1_end' => '14:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '22:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Tuesday',
				'time1_start' => '07:00:00',
				'time1_end' => '12:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '20:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Wednesday',
				'time1_start' => '06:00:00',
				'time1_end' => '11:00:00',
				'time2_start' => '15:00:00',
				'time2_end' => '18:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Thursday',
				'time1_start' => '05:00:00',
				'time1_end' => '10:00:00',
				'time2_start' => '14:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Friday',
				'time1_start' => '05:00:00',
				'time1_end' => '09:00:00',
				'time2_start' => '13:00:00',
				'time2_end' => '17:00:00'
			));

			Loadshedding::create(array(
				'group_name' => 'Group 7',
				'day' => 'Saturday',
				'time1_start' => '09:00:00',
				'time1_end' => '13:00:00',
				'time2_start' => '17:00:00',
				'time2_end' => '21:00:00'
			));
		}

	}

