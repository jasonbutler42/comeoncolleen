set :application, 'comeoncolleen'
set :repo_url, 'git@github.com:jasonbutler42/comeoncolleen.git'

# Branch options
# Prompts for the branch name (defaults to current branch)
#ask :branch, -> { `git rev-parse --abbrev-ref HEAD`.chomp }

# Hardcodes branch to always be master
# This could be overridden in a stage config file
set :branch, :master

set :deploy_to, -> { "/var/www/html/#{fetch(:application)}" }

set :log_level, :info

# Linked stuff gets automatically symbolically linked into the /current deployment folder from the shared folder
# All files and folders are relative from webserver root (/current/)
# Linked files
# set :linked_files, %w{.env web/.htaccess web/wp/.htaccess web/robots.txt web/dumbass_robots/blackhole.dat web/app/plugins/all-in-one-wp-security-and-firewall/logs/wp-security-log-cron-job.txt web/app/plugins/all-in-one-wp-security-and-firewall/logs/wp-security-log.txt}
set :linked_files, %w{.env web/.htaccess web/wp/.htaccess web/robots.txt web/dumbass_robots/blackhole.dat web/wp/.htaccess}
# Linked directories
# set :linked_dirs, %w{web/app/uploads web/app/w3tc-config web/app/cache web/app/aiowps_backups web/app/plugins/ad-injection-data web/app/plugins/fanciest-author-box web/app/plugins/pinterest-pin-it}
set :linked_dirs, %w{web/app/uploads web/app/wfcache}

namespace :deploy do
  desc 'Restart application'
  task :restart do
    on roles(:app), in: :sequence, wait: 5 do
      # Your restart mechanism here, for example:
      # execute :service, :nginx, :reload
    end
  end
end

# The above restart task is not run by default
# Uncomment the following line to run it on deploys if needed
# after 'deploy:publishing', 'deploy:restart'
