<?php

namespace Database\Seeders;

use App\Models\Auth\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        /**Super User Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '1', 'name' => 'View S-User','slug'=>'superuser.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '1', 'name' => 'Show S-User','slug'=>'superuser.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '1', 'name' => 'Add S-User','slug'=>'superuser.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '1', 'name' => 'Edit S-User','slug'=>'superuser.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '1', 'name' => 'delete S-User','slug'=>'superuser.destroy', 'status' => 1, 'created_at' => now()]);

        /** User Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '2', 'name' => 'View User','slug'=>'user.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '2', 'name' => 'Show User','slug'=>'user.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '2', 'name' => 'Add User','slug'=>'user.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '2', 'name' => 'Edit User','slug'=>'user.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '2', 'name' => 'delete User','slug'=>'user.destroy', 'status' => 1, 'created_at' => now()]);

        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '3', 'name' => 'View Roles','slug'=>'role.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '3', 'name' => 'Show Role','slug'=>'role.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '3', 'name' => 'Add Role','slug'=>'role.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '3', 'name' => 'Edit Role','slug'=>'role.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '3', 'name' => 'delete Role','slug'=>'role.destroy', 'status' => 1, 'created_at' => now()]);

        // store category Management
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '4', 'name' => 'View Store Category','slug'=>'storeCategory.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '4', 'name' => 'Show Store Category','slug'=>'storeCategory.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '4', 'name' => 'Add Store Category','slug'=>'storeCategory.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '4', 'name' => 'Edit Store Category','slug'=>'storeCategory.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '4', 'name' => 'delete Store Category','slug'=>'storeCategory.destroy', 'status' => 1, 'created_at' => now()]);

        /** Ebitans Analytic Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '5', 'name' => 'View eBitans Analytic','slug'=>'eBitansAnalytic.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '5', 'name' => 'Show eBitans Analytic','slug'=>'eBitansAnalytic.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '5', 'name' => 'Create eBitans Analytic','slug'=>'eBitansAnalytic.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '5', 'name' => 'Edit eBitans Analytic','slug'=>'eBitansAnalytic.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '5', 'name' => 'Delete eBitans Analytic','slug'=>'eBitansAnalytic.destroy', 'status' => 1, 'created_at' => now()]);

        /** Customers Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '6', 'name' => 'View Customer','slug'=>'customer.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '6', 'name' => 'Show Customer','slug'=>'customer.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '6', 'name' => 'Create Customer','slug'=>'customer.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '6', 'name' => 'Edit Customer','slug'=>'customer.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '6', 'name' => 'Delete Customer','slug'=>'customer.destroy', 'status' => 1, 'created_at' => now()]);

        /** Products Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '7', 'name' => 'View Product','slug'=>'product.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '7', 'name' => 'Show Product','slug'=>'product.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '7', 'name' => 'Create Product','slug'=>'product.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '7', 'name' => 'Edit Product','slug'=>'product.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '7', 'name' => 'Delete Product','slug'=>'product.destroy', 'status' => 1, 'created_at' => now()]);

        /** Product Categories Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '8', 'name' => 'View Product Category','slug'=>'productCategory.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '8', 'name' => 'Show Product Category','slug'=>'productCategory.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '8', 'name' => 'Create Product Category','slug'=>'productCategory.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '8', 'name' => 'Edit Product Category','slug'=>'productCategory.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '8', 'name' => 'Delete Product Category','slug'=>'productCategory.destroy', 'status' => 1, 'created_at' => now()]);


        /** Product Sub Categories Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '9', 'name' => 'View Product Sub Category','slug'=>'productSubCategory.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '9', 'name' => 'Show Product Sub Category','slug'=>'productSubCategory.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '9', 'name' => 'Create Product Sub Category','slug'=>'productSubCategory.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '9', 'name' => 'Edit Product Sub Category','slug'=>'productSubCategory.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '9', 'name' => 'Delete Product Sub Category','slug'=>'productSubCategory.destroy', 'status' => 1, 'created_at' => now()]);

        /** Product Variant Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'View Product Variant','slug'=>'productVariant.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Show Product Variant','slug'=>'productVariant.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Create Product Variant','slug'=>'productVariant.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Edit Product Variant','slug'=>'productVariant.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Delete Product Variant','slug'=>'productVariant.destroy', 'status' => 1, 'created_at' => now()]);

        /** Themes Management */
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'View R-Theme','slug'=>'r_theme.index', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Show R-Theme','slug'=>'r_theme.show', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Create R-Theme','slug'=>'r_theme.create', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Edit R-Theme','slug'=>'r_theme.edit', 'status' => 1, 'created_at' => now()]);
        Permission::insert(['unique_key'=> mt_rand(1000000000, 9999999999), 'module_id' => '10', 'name' => 'Delete R-Theme','slug'=>'r_theme.destroy', 'status' => 1, 'created_at' => now()]);
    }
}
