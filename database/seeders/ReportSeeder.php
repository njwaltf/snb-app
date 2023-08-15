<?php

namespace Database\Seeders;

use App\Models\Report;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        Report::create([
            'user_id' => 1,
            'bully_type_id' => 1,
            'title' => 'Bully di medsos',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Dalam Proses',
            'isAnonym' => 0
        ]);

        Report::create([
            'user_id' => 2,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 2,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 2,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 2,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 2,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 1,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 1,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 1,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 3,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 4,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 5,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 5,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
        Report::create([
            'user_id' => 3,
            'bully_type_id' => 2,
            'title' => 'Perundungan',
            'bully_desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'suspect_name' => 'Bagas Saputra',
            'suspect_total' => 1,
            'victim_name' => 'Muhamad Sumbul',
            'victim_total' => 1,
            'evidence_img' => 'evidences/bukti1.jpg',
            'place' => 'Instagram (online)',
            'date' => '2023-08-03',
            'incident_total' => 1,
            'status' => 'Telah Diterima',
            'isAnonym' => 0
        ]);
    }
}