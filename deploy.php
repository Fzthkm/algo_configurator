<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'git@github.com:Fzthkm/algo_configurator.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('178.159.44.61')
    ->set('remote_user', 'root')
    ->set('deploy_path', '~/algo_configurator');

// Hooks

after('deploy:failed', 'deploy:unlock');
