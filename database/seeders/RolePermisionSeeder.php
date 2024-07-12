<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolePermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'create-admin']);
        Permission::create(['name' => 'read-admin']);
        Permission::create(['name' => 'update-admin']);
        Permission::create(['name' => 'delete-admin']);

        Permission::create(['name' => 'create-mitra']);
        Permission::create(['name' => 'read-mitra']);
        Permission::create(['name' => 'update-mitra']);
        Permission::create(['name' => 'delete-mitra']);
        Permission::create(['name' => 'approve-mitra']);

        Permission::create(['name' => 'create-mhs']);
        Permission::create(['name' => 'read-mhs']);
        Permission::create(['name' => 'update-mhs']);
        Permission::create(['name' => 'delete-mhs']);

        Permission::create(['name' => 'create-dospem']);
        Permission::create(['name' => 'read-dospem']);
        Permission::create(['name' => 'update-dospem']);
        Permission::create(['name' => 'active-dospem']);

        Permission::create(['name' => 'create-kaprodi']);
        Permission::create(['name' => 'read-kaprodi']);
        Permission::create(['name' => 'update-kaprodi']);
        Permission::create(['name' => 'delete-kaprodi']);

        Permission::create(['name' => 'create-activity-mbkm']);
        Permission::create(['name' => 'read-activity-mbkm']);
        Permission::create(['name' => 'review-activity-mbkm']);
        Permission::create(['name' => 'update-activity-mbkm']);

        Permission::create(['name' => 'backup-db']);
        Permission::create(['name' => 'store-nilai-mbkm']);

        Role::create(['name' => 'su-admin']);
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'mitra-pt']);
        Role::create(['name' => 'mitra-industri']);
        Role::create(['name' => 'kaprodi']);
        Role::create(['name' => 'dospem']);
        Role::create(['name' => 'mahasiswa']);


        $roleAdmin = Role::findByName('su-admin');
        $roleAdmin->givePermissionTo('create-admin');
        $roleAdmin->givePermissionTo('read-admin');
        $roleAdmin->givePermissionTo('update-admin');
        $roleAdmin->givePermissionTo('delete-admin');

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('read-mitra');
        $roleAdmin->givePermissionTo('approve-mitra');
        $roleAdmin->givePermissionTo('update-admin');
        $roleAdmin->givePermissionTo('create-mhs');
        $roleAdmin->givePermissionTo('read-mhs');
        $roleAdmin->givePermissionTo('update-mhs');
        $roleAdmin->givePermissionTo('delete-mhs');
        $roleAdmin->givePermissionTo('create-kaprodi');
        $roleAdmin->givePermissionTo('read-kaprodi');
        $roleAdmin->givePermissionTo('update-kaprodi');
        $roleAdmin->givePermissionTo('delete-kaprodi');
        $roleAdmin->givePermissionTo('backup-db');

        $roleAdmin = Role::findByName('mitra-pt');
        $roleAdmin->givePermissionTo('create-mhs');
        $roleAdmin->givePermissionTo('read-mhs');
        $roleAdmin->givePermissionTo('update-mhs');
        $roleAdmin->givePermissionTo('delete-mhs');
        $roleAdmin->givePermissionTo('read-activity-mbkm');

        $roleAdmin = Role::findByName('kaprodi');
        $roleAdmin->givePermissionTo('create-dospem');
        $roleAdmin->givePermissionTo('read-dospem');
        $roleAdmin->givePermissionTo('update-dospem');
        $roleAdmin->givePermissionTo('active-dospem');
        $roleAdmin->givePermissionTo('store-nilai-mbkm');

        $roleAdmin = Role::findByName('dospem');
        $roleAdmin->givePermissionTo('read-activity-mbkm');
        $roleAdmin->givePermissionTo('review-activity-mbkm');

        $roleAdmin = Role::findByName('mahasiswa');
        $roleAdmin->givePermissionTo('update-mhs');
        $roleAdmin->givePermissionTo('create-activity-mbkm');
        $roleAdmin->givePermissionTo('read-activity-mbkm');
        $roleAdmin->givePermissionTo('update-activity-mbkm');

    }
}
