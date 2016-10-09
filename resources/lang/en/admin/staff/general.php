<?php
return [

    'audit-log'           => [
        'category'              => 'Staff',
        'msg-index'             => 'Accessed list of staff.',
        'msg-show'              => 'Accessed details of staff: :username.',
        'msg-store'             => 'Created new staff: :username.',
        'msg-edit'              => 'Initiated edit of staff: :username.',
        'msg-replay-edit'       => 'Initiated replay edit of staff: :username.',
        'msg-update'            => 'Submitted edit of staff: :username.',
        'msg-destroy'           => 'Deleted staff: :username.',
        'msg-enable'            => 'Enabled staff: :username.',
        'msg-disabled'          => 'Disabled staff: :username.',
        'msg-enabled-selected'  => 'Enabled multiple staff.',
        'msg-disabled-selected' => 'Disabled multiple staff.',
    ],

    'status'              => [
        'created'                   => 'User successfully created',
        'updated'                   => 'User successfully updated',
        'deleted'                   => 'User successfully deleted',
        'global-enabled'            => 'Selected staff enabled.',
        'global-disabled'           => 'Selected staff disabled.',
        'enabled'                   => 'User enabled.',
        'disabled'                  => 'User disabled.',
        'no-staff-selected'          => 'No staff selected.',
    ],

    'error'               => [
        'cant-be-edited'                => 'User cannot be edited',
        'cant-be-deleted'               => 'User cannot be deleted',
        'cant-be-disabled'              => 'User cannot be disabled',
        'login-failed-staff-disabled'    => 'That account has been disabled.',
        'perm_not_found'                => 'Could not find permission #:id.',
        'user_not_found'                => 'Could not find staff #:id.',
    ],

    'page'              => [
        'index'              => [
            'title'             => 'Admin | Staff',
            'description'       => 'List of staff',
            'table-title'       => 'User list',
        ],
        'show'              => [
            'title'             => 'Admin | User | Show',
            'description'       => 'Displaying staff: :full_name',
            'section-title'     => 'User details'
        ],
        'create'            => [
            'title'            => 'Admin | User | Create',
            'description'      => 'Creating a new staff',
            'section-title'    => 'New staff'
        ],
        'edit'              => [
            'title'            => 'Admin | User | Edit',
            'description'      => 'Editing staff: :full_name',
            'section-title'    => 'Edit staff'
        ],
    ],

    'columns'           => [
        'id'                        =>  'ID',
        'gravatar'                  =>  'Gravatar',
        'username'                  =>  'User name',
        'first_name'                =>  'First name',
        'last_name'                 =>  'Last name',
        'name'                      =>  'Name',
        'assigned'                  =>  'Assigned',
        'roles'                     =>  'Roles',
        'roles-not-found'           =>  'Roles not found',
        'email'                     =>  'Email',
        'type'                      =>  'Type',
        'permissions'               =>  'Permissions',
        'permissions-not-found'     =>  'Permissions not found',
        'password'                  =>  'Password',
        'password_confirmation'     =>  'Password confirmation',
        'created'                   =>  'Created',
        'updated'                   =>  'Updated',
        'actions'                   =>  'Actions',
        'effective'                 =>  'Effective',
        'enabled'                   =>  'Enabled',
        'theme'                     =>  'Theme',
        'time_zone'                 =>  'Time zone',
        'locale'                    =>  'Locale',
        'time_format'               =>  'Time format',
    ],

    'button'               => [
        'create'    =>  'Create new staff',
    ],

    'options'               => [
        '12_hours'    =>  '12 hours',
        '24_hours'    =>  '24 hours',
    ],

    'placeholder'           => [
        'select-theme'         => 'Select a theme',
        'select-time_zone'     => 'Select a time-zone',
        'select-locale'        => 'Select a locale',
    ],



];

