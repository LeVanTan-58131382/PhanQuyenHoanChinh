<?php

use Illuminate\Database\Seeder;

use App\Models\Role;
use App\Models\Permission;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                "id" => 1,
                "name" => "admin",
                "email" => "admin@gmail.com",
                "password" => '$2y$10$pl7AlLMo/271PcxMHAqDyu7MgJbAaNahoSee.MKwJbd9gWtveMahu',
            ],
            [
                "id" => 2,
                "name" => "vantan",
                "email" => "vantan@gmail.com",
                "password" => '$2y$10$pl7AlLMo/271PcxMHAqDyu7MgJbAaNahoSee.MKwJbd9gWtveMahu',
            ],
        ];

        $roles = [
            [
                "id" => 1,
                "name" => "Quản trị hệ thống",
            ],
            [
                "id" => 2,
                "name" => "Nhà phát triển",
            ],
            [
                "id" => 3,
                "name" => "Khách hàng",
            ],
        ];

        $permissions = [
            // permissions for product
            [
                "id" => 1,
                "name" => "product-manage",
                "name-display" => "Quản lý Sản phẩm",
                "key-code-name" => "product-manage",
                "group" => "product",
                "is-main" => 1,
            ],
            [
                "id" => 2,
                "name" => "product-list",
                "name-display" => "Danh sách",
                "key-code-name" => "product-list",
                "group" => "product",
                "is-main" => 0,
            ],
            [
                "id" => 3,
                "name" => "product-add",
                "name-display" => "Thêm sản phẩm",
                "key-code-name" => "product-add",
                "group" => "product",
                "is-main" => 0,
            ],
            [
                "id" => 4,
                "name" => "product-detail",
                "name-display" => "Xem sản phẩm",
                "key-code-name" => "product-detail",
                "group" => "product",
                "is-main" => 0,
            ],
            [
                "id" => 5,
                "name" => "product-delete",
                "name-display" => "Xóa sản phẩm",
                "key-code-name" => "product-delete",
                "group" => "product",
                "is-main" => 0,
            ],
            [
                "id" => 6,
                "name" => "product-update",
                "name-display" => "Sửa sản phẩm",
                "key-code-name" => "product-update",
                "group" => "product",
                "is-main" => 0,
            ],

            // permission for role

            [
                "id" => 7,
                "name" => "role-manage",
                "name-display" => "Quản lý Vai trò",
                "key-code-name" => "role-manage",
                "group" => "role",
                "is-main" => 1,
            ],
            [
                "id" => 8,
                "name" => "role-list",
                "name-display" => "Danh sách",
                "key-code-name" => "role-list",
                "group" => "role",
                "is-main" => 0,
            ],
            [
                "id" => 9,
                "name" => "role-add",
                "name-display" => "Thêm vai trò",
                "key-code-name" => "role-add",
                "group" => "role",
                "is-main" => 0,
            ],
            [
                "id" => 10,
                "name" => "role-detail",
                "name-display" => "Xem vai trò",
                "key-code-name" => "role-detail",
                "group" => "role",
                "is-main" => 0,
            ],
            [
                "id" => 11,
                "name" => "role-delete",
                "name-display" => "Xóa vai trò",
                "key-code-name" => "role-delete",
                "group" => "role",
                "is-main" => 0,
            ],
            [
                "id" => 12,
                "name" => "role-update",
                "name-display" => "Sửa vai trò",
                "key-code-name" => "role-update",
                "group" => "role",
                "is-main" => 0,
            ],

            // 

            // permission for user

            [
                "id" => 13,
                "name" => "user-manage",
                "name-display" => "Quản lý Người dùng",
                "key-code-name" => "user-manage",
                "group" => "user",
                "is-main" => 1,
            ],
            [
                "id" => 14,
                "name" => "user-list",
                "name-display" => "Danh sách",
                "key-code-name" => "user-list",
                "group" => "user",
                "is-main" => 0,
            ],
            [
                "id" => 15,
                "name" => "user-add",
                "name-display" => "Thêm Người dùng",
                "key-code-name" => "user-add",
                "group" => "user",
                "is-main" => 0,
            ],
            [
                "id" => 16,
                "name" => "user-detail",
                "name-display" => "Xem Người dùng",
                "key-code-name" => "user-detail",
                "group" => "user",
                "is-main" => 0,
            ],
            [
                "id" => 17,
                "name" => "user-delete",
                "name-display" => "Xóa Người dùng",
                "key-code-name" => "user-delete",
                "group" => "user",
                "is-main" => 0,
            ],
            [
                "id" => 18,
                "name" => "user-update",
                "name-display" => "Sửa Người dùng",
                "key-code-name" => "user-update",
                "group" => "user",
                "is-main" => 0,
            ],
        ];

        Permission::insert($permissions);
        Role::insert($roles);
        User::insert($users);

        
        DB::table('role_user')->insert(
            [
                [
                    "id" => 1,
                    "role_id" => 1,
                    "user_id" => 1,
                ],
                [
                    "id" => 2,
                    "role_id" => 3,
                    "user_id" => 2,
                ],
            ]
        );

        DB::table('permission_role')->insert(
            [
                [
                    "id" => 1,
                    "role_id" => 1,
                    "permission_id" => 1,
                ],
                [
                    "id" => 2,
                    "role_id" => 1,
                    "permission_id" => 2,
                ],
                [
                    "id" => 3,
                    "role_id" => 1,
                    "permission_id" => 3,
                ],
                [
                    "id" => 4,
                    "role_id" => 1,
                    "permission_id" => 4,
                ],
                [
                    "id" => 5,
                    "role_id" => 1,
                    "permission_id" => 5,
                ],
                [
                    "id" => 6,
                    "role_id" => 1,
                    "permission_id" => 6,
                ],
                [
                    "id" => 7,
                    "role_id" => 1,
                    "permission_id" => 7,
                ],
                [
                    "id" => 8,
                    "role_id" => 1,
                    "permission_id" => 8,
                ],
                [
                    "id" => 9,
                    "role_id" => 1,
                    "permission_id" => 9,
                ],
                [
                    "id" => 10,
                    "role_id" => 1,
                    "permission_id" => 10,
                ],
                [
                    "id" => 11,
                    "role_id" => 1,
                    "permission_id" => 11,
                ],
                [
                    "id" => 12,
                    "role_id" => 1,
                    "permission_id" => 12,
                ],
                [
                    "id" => 13,
                    "role_id" => 1,
                    "permission_id" => 13,
                ],
                [
                    "id" => 14,
                    "role_id" => 1,
                    "permission_id" => 14,
                ],
                [
                    "id" => 15,
                    "role_id" => 1,
                    "permission_id" => 15,
                ],
                [
                    "id" => 16,
                    "role_id" => 1,
                    "permission_id" => 16,
                ],
                [
                    "id" => 17,
                    "role_id" => 1,
                    "permission_id" => 17,
                ],
                [
                    "id" => 18,
                    "role_id" => 1,
                    "permission_id" => 18,
                ],

                [
                    "id" => 19,
                    "role_id" => 3,
                    "permission_id" => 2,
                ]
            ]
        );
    }
}
