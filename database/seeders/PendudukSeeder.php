<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PendudukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('penduduks')->insert([
            [
                'nik'               => '3329021107540002',
                'no_kk'             => '3329021107540002',
                'nama_lengkap'      => 'JAMAL HASANUDIN AL AYUBI',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1975-07-15',
                'id_pendidikan'     => '4',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '6',
                'id_sdhk'           => '1',
                'nama_ayah'         => 'Jamaludin',
                'nama_ibu'          => 'ami',
                'alamat'            => 'Dusun Cimara Rt.001 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 1,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> true,
                'is_keluarga'       => true,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3329021108340002',
                'no_kk'             => '3329021108340002',
                'nama_lengkap'      => 'ALIYAH',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1983-07-15',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'P',
                'id_pekerjaan'      => '2',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.001 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             =>1,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            
            [
                'nik'               => '3208285507830005',
                'no_kk'             => '3208285507830005',
                'nama_lengkap'      => 'HASAN',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1983-07-15',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.001 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 1,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208285507900005',
                'no_kk'             => '3208285507900005',
                'nama_lengkap'      => 'Elinurlidha Zakiyah',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1990-07-15',
                'id_pendidikan'     => '6',
                'agama'             => 'islam',
                'id_status_perkawinan' => '1',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '12',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.001 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 1,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => 7,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208285507950005',
                'no_kk'             => '3208285507950005',
                'nama_lengkap'      => 'Dessy Adiratna',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1990-07-15',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.002 Rw.002 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 6,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '320828410790040',
                'no_kk'             => '320828410790040',
                'nama_lengkap'      => 'SITI NURJANAH',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1994-09-16',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'P',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.001 Rw.002 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 5,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208280206080002',
                'no_kk'             => '3208280206080002',
                'nama_lengkap'      => 'MUHAMMAD SOFYAN AL FAJRI',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '2008-06-02',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.004 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 4,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208290305900005',
                'no_kk'             => '3208290305900005',
                'nama_lengkap'      => 'IMAM WAHYUDIN',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1990-05-03',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.003 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 3,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208294110180002',
                'no_kk'             => '3208294110180002',
                'nama_lengkap'      => 'AISHA NAFIATUL INSYIRAH',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '2018-10-01',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'P',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.003 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 3,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208282205690008',
                'no_kk'             => '3208282205690008',
                'nama_lengkap'      => 'IRWAN',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '1969-05-22',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.002 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 2,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            [
                'nik'               => '3208282404050001',
                'no_kk'             => '3208282404050001',
                'nama_lengkap'      => 'ABDULLAH FATAH SAHIDAN',
                'tempat_lahir'      => 'Kuningan',
                'tgl_lahir'         => '2005-04-25',
                'id_pendidikan'     => '5',
                'agama'             => 'islam',
                'id_status_perkawinan' => '2',
                'jenis_kelamin'     => 'L',
                'id_pekerjaan'      => '3',
                'id_sdhk'           => '3',
                'nama_ayah'          => null,
                'nama_ibu'           => null,
                'alamat'            => 'Dusun Cimara Rt.002 Rw.001 Desa Cimara Kecamatan Cibeureum Kabupaten Kuningan Jawa Barat',
                'rt_id'             => 2,
                'province_id'       =>32,
                'regency_id'        =>3208,
                'district_id'       =>3208071,
                'village_id'        =>3208071001,
                'status_penduduk'   => 'tetap',
                'is_live'           => true,
                'is_mutasi'         => false,
                'is_kepala_keluarga'=> false,
                'is_keluarga'       => false,
                'user_id'           => null,
                'kewarganegaraan'   => 'WNI',
                'created_at'        => Carbon::now(),
                'updated_at'        => Carbon::now(),
            ],
            
        ]);
    }
}
