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
        // Reset cached roles and permissions
    app()['cache']->forget('spatie.permission.cache');

    
         // Create Roles
        $superadmin = Role::create([
            'name' => 'superadmin'
        ]); // Altijd 1de id

        $default = Role::create([
            'name' => 'default'
        ]); // Altijd 2de id

        $influencer = Role::create([
            'name' => 'influencer'
        ]);

        $business = Role::create([
            'name' => 'business'
        ]);


        $influencerPromo = Role::create([
            'name' => 'influencer promo'
        ]);

        $businessPromo = Role::create([
            'name' => 'business promo'
        ]);




        // Create Permissions
        Permission::create([
            'name' => 'register users',
            'group' => 'auth',
            'description' => "Gebruiker kan nieuwe gebruikers aanmaken"
        ]);

        Permission::create([
            'name' => 'delete users',
            'group' => 'auth',
            'description' => "Gebruiker kan rollen veranderen van een gebruiker"
        ]);

        Permission::create([
            'name' => 'access adminpage',
            'group' => 'auth',
            'description' => "Gebruiker kan admin pagina openen"
        ]);

        Permission::create([
            'name' => 'create article',
            'group' => 'design',
            'description' => 'Gebruiker kan nieuwsartikelen maken'
        ]);

        Permission::create([
            'name' => 'delete article',
            'group' => 'design',
            'description' => 'Gebruiker kan nieuwsartikelen verwijderen'
        ]);

        Permission::create([
        	'name' => 'create campaign',
        	'group' => 'business',
        	'description' => 'Gebruiker kan campagnes maken'
        ]);

        Permission::create([
        	'name' => 'delete campaign',
        	'group' => 'business',
        	'description' => 'Gebruiker kan campagnes verwijderen'
        ]);

        Permission::create([
        	'name' => 'edit campaign',
        	'group' => 'business',
        	'description' => 'Gebruiker kan campagnes wijzigen'
        ]);

        #Add Permissions to Role

        #superuser has all Permissions given
        foreach(Permission::all() as $permission ){
        	$superadmin->givePermissionTo($permission->name);
        }



        $business->givePermissionTo('create campaign');
        $business->givePermissionTo('delete campaign');
		$business->givePermissionTo('edit campaign');


    // /** @var \App\User $user */
    // $user = factory(\App\User::class)->create();

    // $user->assignRole('user');
    // Role::create(['name' => 'admin']);

    // /** @var \App\User $user */
    // $admin = factory(\App\User::class)->create([
    //     'name' => 'John Doe',
    //     'email' => 'john@example.com',
    // ]);

    // $admin->assignRole('admin');
    




    }
}
