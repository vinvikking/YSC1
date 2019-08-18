<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $crudList = [
            'users',
            'roles',
            'Influencer',
            'Influencer Promo ',
            'Business',
            'Campaign',
            'Business Analytics'
        ];

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create Roles
        $superadmin = Role::create([
            'name' => 'superadmin'
            // 'guard_name' => 'web'
        ]); // Altijd 1de id

        $Business = Role::create([
            'name' => 'Business'
            // 'guard_name' => 'web'
        ]); // Altijd 2de id

        $Influencer = Role::create([
            'name' => 'Influencer'
            // 'guard_name' => 'web'
        ]);

        $default = Role::create([
            'name' => 'default'
        ]);




        // Create Permissions
        Permission::create([
            'name' => 'register users',
            'group' => 'auth',
            'description' => "Gebruiker kan nieuwe gebruikers aanmaken"
        ]);

        Permission::create([
            'name' => 'change userrole',
            'group' => 'auth',
            'description' => "Gebruiker kan rollen veranderen van een gebruiker"
        ]);

        Permission::create([
            'name' => 'access adminpage',
            'group' => 'auth',
            'description' => "Gebruiker kan admin pagina openen"
        ]);

  





        foreach ($crudList as $crud) {
            Permission::create([
                'name' => 'see ' . $crud,
                'group' => $crud,
                'description' => "Gebruiker kan de index pagina openen van $crud"
            ]);

            Permission::create([
                'name' => 'create ' . $crud,
                'group' => $crud,
                'description' => "Gebruiker kan nieuwe $crud aanmaken"
            ]);

            Permission::create([
                'name' => 'update ' . $crud,
                'group' => $crud,
                'description' => "Gebruiker kan $crud updaten"
            ]);

            Permission::create([
                'name' => 'destroy ' . $crud,
                'group' => $crud,
                'description' => "Gebruiker kan $crud verwijderen"
            ]);
        }

        // Assign Permissions to role
        foreach (Permission::all() as $perm) {
            $superadmin->givePermissionTo($perm->name);
        }

        $Business->givePermissionTo('see Business');
        $Influencer->givePermissionTo('see Influencer');
        $default->givePermissionTo('access adminpage');

        //Give all users a role
        $users = User::all();

        foreach ($users as $user) {
            $user->assignRole('Influencer');
        }
 

        // $users->random()
        //     ->removeRole('default')
        //     ->assignRole('ouder');
    
    }
}
